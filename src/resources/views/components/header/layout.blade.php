<header>
    <div class="row justify-content-between">
        <div class="col-9 col-sm-10 col-md-3 col-lg-2 offset-lg-1">
            <x-header.logo />
            <x-header.nav class="mobile" style="display: none;" type="mobile" :$categories />
        </div>
        <div class="col-3 col-sm-2 col-md-9 col-lg-8 offset-lg-right-1">
            <x-header.nav class="desktop" :$categories />
            <x-header.burger />
        </div>
    </div>
</header>
