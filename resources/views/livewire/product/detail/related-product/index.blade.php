<div class="page-product-box">
    <h3 class="heading">Sản phẩm liên quan</h3>
    <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
       @foreach($relatedProduct as $item)
        <li>
            <div class="left-block">
                <a href="{{ route('home.product',$item->slug) }}">
                    <img class="img-responsive" alt="product" src="{{ asset($item->anh_dai_dien) }}" />
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
                    @if($item->sp_moi == 1)<span class="product-new">NEW</span>@endif
                    @if($item->gia_giam > 0)<span class="product-sale">Sale</span>@endif
                </div>
            </div>
            <div class="right-block">
                <h5 class="product-name"><a href="{{ route('home.product',$item->slug) }}">
                        {{ \Illuminate\Support\Str::limit($item->ten, 50) }}
                    </a></h5>
                <div class="content_price">
                    @if($item->gia_giam > 0)
                    <span class="price product-price">{{number_format($item->gia_giam)}} đ</span>
                    <span class="price old-price">{{number_format($item->gia)}} đ</span>
                    @else
                    <span class="price product-price">{{number_format($item->gia)}} đ</span>
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
