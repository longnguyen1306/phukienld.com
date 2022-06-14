@extends('layouts.admin')

@section('css_style')
    <link rel="stylesheet" href="{{ asset('backend/plugins/summernote/summernote-bs4.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách sản phẩm</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Sửa sản phẩm: {{ $product->ten }}</h3>
                        </div>

                        <form action="{{ route('admin.products.list-product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Tên sản phẩm: <span class="text-danger">(*)</span></label>
                                            <input
                                                type="text"
                                                class="form-control @error('ten') is-invalid @enderror"
                                                name="ten"
                                                placeholder="Nhập tên sản phẩm..."
                                                value="{{ old('ten', $product->ten) }}"
                                            >
                                            @error('ten')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Giá: <span class="text-danger">(*)</span></label>
                                            <input
                                                type="text"
                                                class="form-control @error('gia') is-invalid @enderror"
                                                name="gia"
                                                placeholder="Nhập giá sản phẩm..."
                                                value="{{ old('gia', $product->gia) }}"
                                            >
                                            @error('gia')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Giá sale: </label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="gia_giam"
                                                placeholder="Nhập giá sale..."
                                                value="{{ old('gia_giam', $product->gia_giam ) }}"
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Mã sản phẩm: <span class="text-danger">(*)</span></label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                value="{{ $product->ma_sp }}"
                                                disabled
                                            >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Danh mục: <span class="text-danger">(*)</span></label>
                                            <select name="danh_muc_id" class="custom-select @error('danh_muc_id') is-invalid @enderror">
                                                <option selected disabled>--Chọn danh mục sản phẩm--</option>
                                                @foreach($categories as $cat)
                                                    <option value="{{ $cat->id }}" {{ old('danh_muc_id', $product->danh_muc_id) == $cat->id ? "selected" : "" }}>{{ $cat->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('danh_muc_id')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Số lượng: <span class="text-danger">(*)</span></label>
                                            <input
                                                type="text"
                                                class="form-control @error('so_luong_sp') is-invalid @enderror"
                                                name="so_luong_sp"
                                                placeholder="Nhập số lượng sản phẩm..."
                                                value="{{ old('so_luong_sp', $product->so_luong_sp) }}"
                                            >
                                            @error('so_luong_sp')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Mô Tả ngắn:</label>
                                            <textarea
                                                name="mo_ta_ngan"
                                                class="form-control @error('mo_ta_ngan') is-invalid @enderror"
                                                rows="5"
                                                placeholder="Nhập mô tả sản phẩm">{{old('mo_ta_ngan', $product->mo_ta_ngan)}}</textarea>
                                            @error('mo_ta_ngan')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>video:</label>
                                            <textarea
                                                name="video"
                                                class="form-control"
                                                rows="5"
                                                placeholder="Video review">{{old('video', $product->video)}}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="customFile">Ảnh đại diện: <span class="text-danger">(*)</span></label>

                                            <div class="custom-file">
                                                <input type="file" name="anh_dai_dien" class="custom-file-input @error('anh_dai_dien') is-invalid @enderror" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                            @error('anh_dai_dien')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        @if($product->anh_dai_dien)
                                        <div class="mb-2">
                                            <img src="{{asset($product->anh_dai_dien)}}" style="width: 200px">
                                        </div>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="customFile">Ảnh sản phẩm:</label>

                                            <div class="custom-file">
                                                <input type="file" name="images[]" multiple class="custom-file-input " id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                        @if($proImg)
                                            <div class="mb-2">
                                                @foreach($proImg as $img)
                                                <img src="{{asset($img->image)}}" style="width: 200px">
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Chi tiết sản phẩm:</label>
                                            <textarea
                                                name="chi_tiet"
                                                id="detail"
                                                class="form-control"
                                                rows="5"
                                                placeholder="Chi tiết sản phẩm">{!! $product->chi_tiet !!}}</textarea>
                                            @error('chi_tiet')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="card card-info">
                                    <div class="card-header">
                                        <h3 class="card-title">Product Options</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Sản phẩm mới home page</label>
                                                    <div class="custom-control custom-checkbox">
                                                        <input name="sp_moi" @if($product->sp_moi == 1) checked @endif  class="custom-control-input" type="checkbox" id="sp_moi" value="1">
                                                        <label for="sp_moi" class="custom-control-label">Sản phẩm mới</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Tình trạng ( mới, cũ):</label>
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        name="tinh_trang"
                                                        placeholder="Tình trạng sản phẩm..."
                                                        value="{{ old('tinh_trang', $product->tinh_trang) }}"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Lượt mua:</label>
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        name="luot_mua"
                                                        placeholder="luot_mua"
                                                        value="{{ old('luot_mua', $product->luot_mua) }}"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Lượt xem:</label>
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        name="luot_xem"
                                                        placeholder="luot_xem"
                                                        value="{{ old('luot_xem', $product->luot_xem) }}"
                                                    >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Màu:</label>

                                                    <select name="mau_sac[]" class="custom-select mau_sac"  multiple="multiple">
                                                        @foreach($proOption as $option)
                                                            @if($option->mau_sac)
                                                            <option value="{{ $option->mau_sac }}" selected>{{ $option->mau_sac }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Dung lượng: <span class="text-danger">(*)</span></label>
                                                    <select name="dung_luong[]" class="custom-select mau_sac"  multiple="multiple">
                                                        @foreach($proOption as $option)
                                                            @if($option->dung_luong)
                                                                <option value="{{ $option->dung_luong }}" selected>{{ $option->dung_luong }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Ciều dài: <span class="text-danger">(*)</span></label>
                                                    <select name="chieu_dai[]" class="custom-select mau_sac"  multiple="multiple">
                                                        @foreach($proOption as $option)
                                                            @if($option->chieu_dai)
                                                                <option value="{{ $option->chieu_dai }}" selected>{{ $option->chieu_dai }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success float-right">Lưu</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('backend/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script>
        $(function () {
            bsCustomFileInput.init();
        });
    </script>
    <script src="{{ asset('backend/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script>
        $(function () {
            // Summernote
            $('#detail').summernote({
                height: 300
            })
        })
    </script>
    <!-- Select2 -->
    <script src="{{ asset('backend/plugins/select2/js/select2.full.min.js') }}"></script>
    <script>
        $('.mau_sac').select2({
            theme: 'bootstrap4',
            tags: true,
            tokenSeparators: [','],
            placeholder: "Chọn màu sắc",
            allowClear: true,
        })
        $('.dung_luong').select2({
            theme: 'bootstrap4',
            tags: true,
            tokenSeparators: [','],
            placeholder: "Chọn dung lượng",
            allowClear: true
        })
        $('.chieu_dai').select2({
            theme: 'bootstrap4',
            tags: true,
            tokenSeparators: [','],
            placeholder: "Chọn chiều dài",
            allowClear: true
        })
    </script>
@endsection
