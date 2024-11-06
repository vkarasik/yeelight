$(function () {
    // Dropdown menu
    $('.desktop .menu-item').hover(function () {
        $(this).find('.sub-menu').stop(true, true).slideToggle();
    });

    $('.menu-button').on('click', function (e) {
        e.preventDefault();
        $('.mobile').slideToggle();
        $(this).find('span').toggleClass('open close');
    });

    $('.menu li').mouseenter(function (e) {
        var t = $(this).position().left;
        var curId = $(this).attr('id');
        $('.' + curId).css({
            left: t,
        });
        $('.item').hide();
        $('.' + curId).show();
        $('.submenu').stop(true, true).slideDown(500);
        $('.item a').stop(true, true).animate(
            {
                left: '20px',
                opacity: '0',
            },
            1000
        );
        $('.' + curId + ' a')
            .stop(true, true)
            .animate(
                {
                    left: '0px',
                    opacity: '1',
                },
                1000
            );
    });

    $('header .row').mouseleave(function (e) {
        $('.submenu').stop(true, true).slideUp(500);
        $('.item').hide();
        $('.item a').stop(true, true).animate(
            {
                left: '20px',
                opacity: '0',
            },
            1000
        );
    });

    // Mobile menu
    $('.menu-item__inner').on('click touch', function (e) {
        e.preventDefault();
        $(this).find('span').toggleClass('arrow-down');
        $(this).next().slideToggle();
    });


    // Всплывающее окно с видео
    $('.play').on('click', function () {
        $('.overlay').fadeIn(500);
    });

    $('.overlay').click(function () {
        $(this).fadeOut(200);
    });

    // Слайдер
    $('.slider__inner')[0].lastElementChild.style.display = 'block';

    $('#right, #left').on('click', function (e) {
        const direction = $(this).attr('id');
        const curSlide = $('.slide:visible'); // текущий слайд
        const clientWidth = curSlide[0].clientWidth; // текущая ширина окна

        const nextSlide = direction == 'right' ? $(curSlide).prev() : $(curSlide).siblings().first();
        const nextSlidePosition = direction == 'right' ? clientWidth : -clientWidth;
        const curSlidePosition = direction == 'right' ? -clientWidth : clientWidth;

        nextSlide.css({
            right: nextSlidePosition,
            display: 'block',
        });

        $(curSlide).animate(
            {
                right: curSlidePosition,
            },
            {
                duration: 300,
                start: function () {
                    nextSlide.animate(
                        {
                            right: 0,
                        },
                        300
                    );
                },
                done: function () {
                    $(curSlide).hide();
                    if (direction == 'right') {
                        // Переместим слайд в начало списка
                        $('.slider__inner').prepend(curSlide.detach());
                    } else {
                        // Переместим слайд в конец списка
                        $('.slider__inner').append(nextSlide.detach());
                    }
                }
            }
        )
        console.log(nextSlide)
    });

})
