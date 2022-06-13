<div class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 page-top-left">
                <div class="popular-tabs">
                    <ul class="nav-tab">
                        <li class="active"><a data-toggle="tab" href="#tab-1">BÁN CHẠY</a></li>
                        <li><a data-toggle="tab" href="#tab-2">SIÊU GIẢM GIÁ</a></li>
                    </ul>
                    <div class="tab-container">
                        <div id="tab-1" class="tab-panel active">
                            <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":5}}'>
                                @livewire('home.single-product.index')
                                @livewire('home.single-product.index')
                                @livewire('home.single-product.index')
                                @livewire('home.single-product.index')
                                @livewire('home.single-product.index')
                                @livewire('home.single-product.index')
                                @livewire('home.single-product.index')
                                @livewire('home.single-product.index')
                            </ul>
                        </div>
                        <div id="tab-2" class="tab-panel">
                            <ul class="product-list owl-carousel"  data-dots="false" data-loop="true" data-nav = "true" data-margin = "30"  data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":5}}'>
                                @livewire('home.single-product.index')
                                @livewire('home.single-product.index')
                                @livewire('home.single-product.index')
                                @livewire('home.single-product.index')
                                @livewire('home.single-product.index')
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
