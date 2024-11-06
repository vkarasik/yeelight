<x-layout :$title :$description :$keywords :$categories>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-10 offset-lg-1">
            <section class="shops">
                <h1 class="tac tcd">Купить продукты YeeLight в&nbsp;Беларуси</h1>
                <p class="tac tcd">Официальный поставщик продуктов YeeLight в Беларусь, <a href="https://cd-life.by/">группа
                        компаний CD-LIFE</a>. При покупке продукции YeeLight у официальных дилеров, вы получаете 100%
                    оригинальный продукт с&nbsp;официальной гарантией от поставщика.</p>
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="list-group overflow-auto shops-list">
                            <div class="list-group-item list-group-item-action active shop" data-shop-id="0">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Все представители</h5>
                                    <span class="badge rounded-pill bg-danger">{{count($shops)}}</span>
                                </div>
                                <p class="mb-1">Продукция Yeelight рядом с вашим домом!</p>
                            </div>
                            @foreach($shops as $shop)
                                <div class="list-group-item list-group-item-action shop" data-shop-id="{{$shop->id}}">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">{{$shop->name}}</h5>
                                        <span class="badge rounded-pill bg-danger">{{count($shop->branches)}}</span>
                                    </div>
                                    <p class="mb-1">{{$shop->title}}</p>
                                    <span>Купить на сайте продавца: <a href="{{$shop->url}}" class="text-muted"> {{parse_url($shop->url)['host']}}</a></span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div id="map" class="map"></div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-layout>
