@php
    use Illuminate\Support\Str;
@endphp
@props(['type' => '', 'categories' => $categories])
<nav {{$attributes}}>
    <ul class="menu">
        @foreach($categories as $category)
            <li class="menu-item">
                @if($type == 'mobile')
                    <div class="menu-item__inner">
                        <a href="{{$category->slug}}">
                            {!! Str::replace(' ', '&nbsp;', $category->name) !!}
                        </a>
                        <span></span>
                    </div>
                @else
                    <a href="{{$category->slug}}">
                        {!! Str::replace(' ', '&nbsp;', $category->name) !!}
                    </a>
                @endif

                <ul class="sub-menu" style="display:none">
                    @foreach($category->products as $product)
                        <li class="sub-menu-item">
                            <a href="/products/{{$product->slug}}">
                                {!! Str::replace(' ', '&nbsp;', $product->name) !!}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
    <a href="/shops" class="button button_main">Купить</a>
</nav>
