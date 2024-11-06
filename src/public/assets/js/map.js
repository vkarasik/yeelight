document.addEventListener('DOMContentLoaded', function () {

    // Init map
    ymaps.ready(function () {
        myMap = new ymaps.Map('map', {
            center: [53.902496, 27.561481],
            zoom: [11],
            controls: ['zoomControl'],
            scroll: false,
        });
        myMap.behaviors.disable('scrollZoom');
        placeMarks(shopData);
    });

    // Shop list
    const shops = document.getElementsByClassName('shop');
    const csrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    let shopData;

    fetch('/shops', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrf
        },
    })
        .then(response => response.json())
        .then(result => {
            shopData = result;
        })

    Array.from(shops).forEach(function (item, index, arr) {
        item.addEventListener('click', function (e) {
            arr.forEach(function (item) {
                item.classList.remove('active')
            })
            this.classList.add('active');
            myMap.geoObjects.removeAll();

            placeMarks(shopData, Number(item.dataset.shopId));
        })
    })
});

function placeMarks(shopData, id = 0) {
    for (const shopDatum of shopData) {
        if (shopDatum.shop_id === id || id === 0) {
            let mark = new ymaps.Placemark(
                [shopDatum.lat, shopDatum.lon],
                // shop.coordinates,
                {
                    'hintContent': shopDatum.shop.name,
                    'balloonContent': `
                        <img src="/assets/img/shops/${shopDatum.shop.logo}" /><br>
                        Адрес: ${shopDatum.address}<br>
                        Режим работы: ${shopDatum.schedule}<br>
                        Телефон: ${shopDatum.phone}<br>
                    `,
                },
                {
                    'iconLayout': 'default#image',
                    'iconImageHref': '../assets/img/pin.svg',
                    'iconImageSize': [35, 35],
                },
            );
            myMap.geoObjects.add(mark);
        }
    }
}
