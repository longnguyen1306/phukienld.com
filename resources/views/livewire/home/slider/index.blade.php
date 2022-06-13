<div id="home-slider">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 slider-left"></div>
            <div class="col-sm-9 header-top-right">
                <div class="homeslider">
                    <div class="content-slide">
                        <ul id="contenhomeslider">
                            @if($homeBanners)
                                @foreach($homeBanners as $banner)
                                    <li><img alt="Phụ Kiện LD - {{ $banner->name }}" src="{{ $banner->image }}" title="{{ $banner->name }}" /></li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
