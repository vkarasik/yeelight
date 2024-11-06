<x-layout :$title :$description :$keywords :$categories>
    <x-slider.layout :$slider />
    <div class="row">
        <div class="col-12">
            <section class="products">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                        <h3>Продукты YeeLight</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                        @foreach($categories as $category)
                            <div class="products__cat">
                                <h3>{{$category->title}}</h3>
                                <div class="products__list">
                                    @foreach($category->products as $product)
                                        <a href="/products/{{$product->slug}}" class="product">
                                            <img src="{{asset($product->thumbnail)}}"
                                                 alt="{{$product->name}}">
                                            <p>{{$product->title}}</p>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-layout>
