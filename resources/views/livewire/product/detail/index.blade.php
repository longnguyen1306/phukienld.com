<div class="center_column col-xs-12 col-sm-9" id="center_column">
    <div id="product">
        <div class="primary-box row">
            <div class="pb-left-column col-xs-12 col-sm-6">
                <div class="product-image">
                    <div class="product-full">
                        <img id="product-zoom" src='{{$productImages[0]['image']}}' data-zoom-image="{{$productImages[0]['image']}}"/>
                    </div>
                    <div class="product-img-thumb" id="gallery_01">
                        <ul class="owl-carousel" data-items="3" data-nav="true" data-dots="false" data-margin="20" data-loop="true">
                            @foreach($productImages as $image)
                            <li>
                                <a href="#" data-image="{{ asset($image->image) }}" data-zoom-image="{{ asset($image->image) }}">
                                    <img id="product-zoom"  src="{{ asset($image->image) }}" />
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="pb-right-column col-xs-12 col-sm-6">
                <h1 class="product-name">{{ $product->ten }}</h1>
                <div class="product-comments">
                    <div class="product-star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                </div>
                <div class="product-price-group">
                    @if($product->gia_giam > 0)
                    <span class="price">{{number_format($product->gia_giam)}} đ</span>
                    <span class="old-price">{{ number_format($product->gia) }} đ</span>
                    <span class="discount">-30%</span>
                    @else
                        <span class="price">{{ number_format($product->gia) }} đ</span>
                    @endif
                </div>
                <div class="info-orther">
                    <p>Danh mục: <b>{{ $product->category->name }}</b></p>
                    <p>Mã SP: <b>#{{ $product->ma_sp }}</b></p>
                    <p>Kho:
                        @if($product->so_luong_sp > 0)
                        <span class="btn btn-success btn-xs">Còn hàng</span>
                        @else
                        <span class="btn btn-danger btn-xs">Hết hàng</span>
                        @endif
                    </p>
                    <p>Tình trạng: <b>{{ $product->tinh_trang }}</b></p>
                </div>
                <div class="product-desc">
                    {{ $product->mo_ta_ngan }}
                </div>
                <div class="form-option">
                    <p class="form-option-title">Chọn sản phẩm:</p>
                    @if(count($productOptionsMauSac) > 0)
                    <div class="attributes">
                        <div class="attribute-label">Màu:</div>
                        <div class="attribute-list">
                            <select>
                                @foreach($productOptionsMauSac as $mau)
                                <option value="{{$mau->mau_sac}}">{{$mau->mau_sac}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    @endif
                    @if(count($productOptionDungLuong) > 0)
                    <div class="attributes">
                        <div class="attribute-label">Dung lượng:</div>
                        <div class="attribute-list">
                            <select>
                                @foreach($productOptionDungLuong as $dungLuong)
                                <option value="{{$dungLuong->dung_luong}}">{{$dungLuong->dung_luong}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    @endif
                    @if(count($productOptionChieuDai) > 0)
                    <div class="attributes">
                        <div class="attribute-label">Chiều dài:</div>
                        <div class="attribute-list">
                            <select>
                                @foreach($productOptionChieuDai as $chieuDai)
                                <option value="{{$chieuDai->chieu_dai}}">{{$chieuDai->chieu_dai}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    @endif
                </div>
                <div class="form-action">
                    <div class="button-group">
                        <a class="btn-add-cart" href="#">Thêm vào giỏ</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-tab">
            <ul class="nav-tab">
                <li class="active">
                    <a aria-expanded="false" data-toggle="tab" href="#product-detail">Chi tiết sản phẩm</a>
                </li>
                @if($product->video)
                <li>
                    <a aria-expanded="true" data-toggle="tab" href="#information">Video review</a>
                </li>
                @endif
            </ul>
            <div class="tab-container">
                <div id="product-detail" class="tab-panel active">

                    {!! $product->chi_tiet !!}

                </div>
                @if($product->video)
                <div id="information" class="tab-panel">
                    {{$product->video}}
                </div>
                @endif
            </div>
        </div>
        @livewire('product.detail.related-product.index', ['product' => $product])
    </div>
</div>
