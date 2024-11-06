<section class="slider">
    <div id="left" class="arrow"></div>
    <div class="row">
        <div class="col-12" style="padding: 0">
            <div class="slider__inner">
                @foreach($slider as $slide)
                    <div class="slide" style="background-image: url({{ $slide->img }}); {{ $slide->css }}">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-10 offset-md-1 col-lg-10 offset-lg-1">
                                <h1>{!! $slide->title !!}</h1>
                                <h2>{!! $slide->subtitle !!}</h2>
                                <a href="{{ $slide->link }}" class="button button_main">Подробнее</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div id="right" class="arrow"></div>
</section>
