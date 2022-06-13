<div class="category-featured">
    <nav class="navbar nav-menu nav-menu-red show-brand">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-brand"><a href="{{ route('home.category', $category->slug)  }}">{{ $category->name }}</a></div>
            <span class="toggle-menu"></span>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a data-toggle="tab" href="#tab-4">Bán chạy</a></li>
                    <li><a data-toggle="tab" href="#tab-5">Giảm giá</a></li>
                    <li><a href="#">Xem thêm</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
        <div id="elevator-1" class="floor-elevator">
            <a href="#" class="btn-elevator up disabled fa fa-angle-up"></a>
            <a href="#elevator-2" class="btn-elevator down fa fa-angle-down"></a>
        </div>
    </nav>
    <div class="product-featured clearfix">
        <div class="banner-featured">
            <div class="featured-text"><span>Mua ngay</span></div>
            <div class="banner-img">
                <a href="#"><img alt="Featurered 1" src="{{ asset($category->image) }}" /></a>
            </div>
        </div>
        <div class="product-featured-content">
            <div class="product-featured-list">
                <div class="tab-container">
                    <!-- tab product -->
                    <div class="tab-panel active" id="tab-4">
                        <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                            @livewire('home.single-product.index')
                            @livewire('home.single-product.index')
                            @livewire('home.single-product.index')
                            @livewire('home.single-product.index')
                        </ul>
                    </div>
                    <!-- tab product -->
                    <div class="tab-panel" id="tab-5">
                        <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
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
