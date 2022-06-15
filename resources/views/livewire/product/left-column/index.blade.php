<div class="column col-xs-12 col-sm-3" id="left_column">
    <!-- block category -->
    <div class="block left-module">
        <p class="title_block">Danh mục</p>
        <div class="block_content">
            <!-- layered -->
            <div class="layered layered-category">
                <div class="layered-content">
                    <ul class="tree-menu">
                        @foreach($categories as $cat)
                        <li @if($product->category->id === $cat->id) class="active" @endif><span></span>
                            <a href="{{ route('home.category', $cat->slug) }}">{{ $cat->name }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- ./layered -->
        </div>
    </div>
    <!-- ./block category  -->
    <!-- block best sellers -->
    <div class="block left-module">
        <p class="title_block">Sản phẩm mới</p>
        <div class="block_content">
            <div class="owl-carousel owl-best-sell" data-loop="true" data-nav = "false" data-margin = "0" data-autoplayTimeout="1000" data-autoplay="true" data-autoplayHoverPause = "true" data-items="1">
                @for($i=1;$i<=$newProduct['last_page'];$i++)
                <ul class="products-block best-sell">
                    @foreach($itemNewProduct->getProductByPageNumber($i)['data'] as $item)
                    <li>
                        <div class="products-block-left">
                            <a href="{{ route('home.product', $item['slug']) }}">
                                <img src="{{ asset($item['anh_dai_dien']) }}" alt="{{$item['ten']}}">
                            </a>
                        </div>
                        <div class="products-block-right">
                            <p class="product-name">
                                <a href="{{ route('home.product', $item['slug']) }}">
                                    {{ \Illuminate\Support\Str::limit($item['ten'], 35) }}
                                </a>
                            </p>
                            @if($item['gia_giam'] > 0)
                            <p class="product-price">{{ number_format($item['gia_giam']) }} đ</p>
                            @else
                            <p class="product-price">{{ number_format($item['gia']) }} đ</p>
                            @endif
                            <p class="product-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </p>
                        </div>
                    </li>
                    @endforeach
                </ul>
                @endfor
            </div>
        </div>
    </div>
    <!-- ./block best sellers  -->

    <!-- left silide -->
    <div class="col-left-slide left-module">
        <ul class="owl-carousel owl-style2" data-loop="true" data-nav = "false" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1" data-autoplay="true">
            <li><a href="#"><img src="/assets/data/slide-left.jpg" alt="slide-left"></a></li>
            <li><a href="#"><img src="/assets/data/slide-left2.jpg" alt="slide-left"></a></li>
            <li><a href="#"><img src="/assets/data/slide-left3.png" alt="slide-left"></a></li>
        </ul>
    </div>

</div>
