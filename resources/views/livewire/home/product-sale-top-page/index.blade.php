<div class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 page-top-left">
                <div class="popular-tabs">
                    <ul class="nav-tab">
                        <li class="active"><a data-toggle="tab" href="#tab-1">San phẩm mới</a></li>
                        <li><a data-toggle="tab" href="#tab-2">SIÊU GIẢM GIÁ</a></li>
                    </ul>
                    <div class="tab-container">
                        <div id="tab-1" class="tab-panel active">
                            <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":5}}'>
                                @foreach($products as $product)
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
                                            <h5 class="product-name">
                                                <a href="{{ route('home.product', $product->slug) }}">{{ \Illuminate\Support\Str::limit($product->ten, 45) }}</a>
                                            </h5>
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
                        <div id="tab-2" class="tab-panel">
                            <ul class="product-list owl-carousel"  data-dots="false" data-loop="true" data-nav = "true" data-margin = "30"  data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":5}}'>
                                @foreach($products as $product)
                                    @if($product->gia_giam > 0)
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
                                                <h5 class="product-name">
                                                    <a href="{{ route('home.product', $product->slug) }}">{{ \Illuminate\Support\Str::limit($product->ten, 45) }}</a>
                                                </h5>
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
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
