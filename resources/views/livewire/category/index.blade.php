<div class="columns-container">
    <div class="container" id="columns">

        <div class="breadcrumb clearfix">
            <a class="home" href="{{ route('home.index') }}">Trang chủ</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Danh mục sản phẩm</span>
        </div>

        <div class="row">
            @livewire('category.left-column.index')
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                <div id="view-product-list" class="view-product-list">
                    <h2 class="page-heading">
                        <span class="page-heading-title">
                            @if($category)
                                {{$category->name}}
                            @else
                                Tất cả sản phẩm
                            @endif
                        </span>
                    </h2>
                    <ul class="display-product-option">
                        <li class="view-as-grid selected">
                            <span>grid</span>
                        </li>
                        <li class="view-as-list">
                            <span>list</span>
                        </li>
                    </ul>
                    <ul class="row product-list grid">
                        @foreach($products as $product)
                        <li class="col-sx-12 col-sm-4">
                            <div class="product-container">
                                <div class="left-block">
                                    <a href="{{ route('home.product', $product->slug) }}">
                                        <img class="img-responsive" alt="product" src="{{ asset($product->anh_dai_dien) }}" />
                                    </a>
                                    <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    @if($product->so_luong_sp > 0)
                                    <div class="add-to-cart">
                                        <a href="">Add to Cart</a>
                                    </div>
                                    @else
                                    <div class="add-to-cart add-to-cart-het-hang">
                                        <a style="cursor: pointer">Hết Hàng</a>
                                    </div>
                                    @endif
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name">
                                        <a href="{{ route('home.product', $product->slug) }}">
                                            {{ \Illuminate\Support\Str::limit($product->ten, 50) }}
                                        </a>
                                    </h5>
                                    <div class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="content_price">
                                        @if($product->gia_giam > 0)
                                        <span class="price product-price">{{number_format($product->gia_giam)}} đ</span>
                                        <span class="price old-price">{{number_format($product->gia)}} đ</span>
                                        @else
                                            <span class="price product-price">{{number_format($product->gia)}} đ</span>
                                        @endif
                                    </div>
                                    <div class="info-orther">
                                        <p>Item Code: #{{$product->ma_sp}}</p>
                                        <p>
                                            Kho:
                                            @if($product->so_luong_sp > 0)
                                            <span class="btn btn-success btn-xs">Còn hàng</span>
                                            @else
                                            <span class="btn btn-danger btn-xs">Tạm hết hàng</span>
                                            @endif
                                        </p>
                                        <div class="product-desc">
                                            {{$product->mo_ta_ngan}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="sortPagiBar">
                    <div class="bottom-pagination">
                        <nav>
                            <ul class="pagination">
                                {{$products->links()}}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
