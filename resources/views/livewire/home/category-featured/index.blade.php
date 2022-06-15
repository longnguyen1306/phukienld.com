<div class="category-featured">
    <nav class="navbar nav-menu nav-menu-red show-brand">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-brand"><a href="{{ route('home.category', $category->slug)  }}">{{ $category->name }}</a></div>
            <span class="toggle-menu"></span>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav ">
                    <li><a href="#">Xem thêm</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="product-featured clearfix">
        <div class="banner-featured">
            <div class="featured-text"><span>Mua ngay</span></div>
            <div class="banner-img">
                <a href="#">
                    <img alt="Featurered 1" src="{{ asset($category->image) }}" />
                </a>
            </div>
        </div>
        <div class="product-featured-content">
            <div class="product-featured-list">
                <div class="tab-container">
                    <!-- tab product -->
                    <div class="tab-panel active">
                        <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                            @foreach($productByCat as $product)
                                <li>
                                    <div class="left-block">
                                        <a href="{{ route('home.product', $product->slug) }}">
                                            <img class="img-responsive" alt="product" src="{{ asset($product->anh_dai_dien) }}" />
                                        </a>
                                        <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                        </div>
                                        <div class="add-to-cart">
                                            <a title="Thêm vào giỏ" href="#">Thêm vào giỏ</a>
                                        </div>
                                        <div class="group-price">
                                            @if($product->sp_moi === 1)<span class="product-new">NEW</span>@endif
                                            @if($product->gia_giam > 0)<span class="product-sale">Sale</span>@endif
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="{{ route('home.product', $product->slug) }}">{{ \Illuminate\Support\Str::limit($product->ten, 45) }}</a></h5>
                                        <div class="content_price">
                                            @if($product->gia_giam > 0)
                                            <span class="price product-price">{{number_format($product->gia_giam)}} đ</span>
                                            <span class="price old-price">{{number_format($product->gia)}} đ</span>
                                            @else
                                                <span class="price product-price">{{number_format($product->gia)}} đ</span>
                                            @endif
                                        </div>
                                        <div class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
