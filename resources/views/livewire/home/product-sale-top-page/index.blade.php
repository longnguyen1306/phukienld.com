<div class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-9 page-top-left">
                <div class="popular-tabs">
                    <ul class="nav-tab">
                        <li class="active"><a data-toggle="tab" href="#tab-1">BÁN CHẠY</a></li>
                        <li><a data-toggle="tab" href="#tab-2">SIÊU GIẢM GIÁ</a></li>
                    </ul>
                    <div class="tab-container">
                        <div id="tab-1" class="tab-panel active">
                            <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
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
                            <ul class="product-list owl-carousel"  data-dots="false" data-loop="true" data-nav = "true" data-margin = "30"  data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
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
            <div class="col-xs-12 col-sm-3 page-top-right">
                <div class="latest-deals">
                    <h2 class="latest-deal-title">deal hot</h2>
                    <div class="latest-deal-content">
                        <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":1}}'>
                            <li>
                                <div class="count-down-time" data-countdown="2022/06/27"></div>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="assets/data/ld1.jpg" /></a>
                                    <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                        <span class="colreduce-percentage">(-10%)</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="count-down-time" data-countdown="2015/06/27 9:20:00"></div>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="assets/data/ld2.jpg" /></a>
                                    <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                        <span class="colreduce-percentage">(-90%)</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="count-down-time" data-countdown="2015/06/27 9:20:00"></div>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="assets/data/ld2.jpg" /></a>
                                    <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                        <span class="colreduce-percentage">(-90%)</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
