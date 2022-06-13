@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách danh mục</h1>
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <a href="{{ route('admin.banners.home-banner.create') }}" class="btn btn-success">
                                    <i class="fas fa-plus"></i> Thêm mới
                                </a>
                            </h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th style="width: 5%;">ID</th>
                                    <th>Tên</th>
                                    <th>Ảnh</th>
                                    <th>Ngày tạo</th>
                                    <th style="width: 10%;"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($banners->total() > 0)
                                    @foreach($banners as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td style="width: 350px">
                                                <img src="{{ $item->image }}" style="width: 300px;height: 150px">
                                            </td>
                                            <td>{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</td>
                                            <td>
                                                <a href="{{ route('admin.banners.home-banner.edit', $item->id) }}"><i class="fas fa-pen-alt"></i></a>
                                                <a href="{{ route('admin.banners.home-banner.delete', $item->id) }}" onclick="return confirm('Bạn chắc chắn?')"><i class="fas fa-trash-alt pl-2"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="6">Không có banner nào</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                {{ $banners->links() }}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
