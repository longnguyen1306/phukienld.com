<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="{{ route('home.index') }}" title="Return to Home">Trang chủ</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Tài khoản</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <h2 class="page-heading">
            <span class="page-heading-title2">Tài khoản người dùng</span>
        </h2>
        <!-- ../page heading-->
        <div class="page-content">
            <div class="row">
                <div class="col-sm-6">
                    <div class="box-authentication">
                        <h3>Đăng ký tài khoản mới?</h3>
                        <p class="mb-4">Vui lòng vào link bên dưới để chuyển đến trang đăng ký tài khoản mới.</p>
                        <a href="{{route('home.register')}}" class="btn btn-warning" style="margin-top: 20px"> Đăng ký tài khoản</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="box-authentication">

                        <form wire:submit.prevent="login">
                            <h3>Bạn đã có tài khoản?</h3>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email:</label>
                                <input wire:model="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Nhập email...">
                                @error('email') <span class="text-thong-bao">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mật khẩu:</label>
                                <input wire:model="pass" type="password" class="form-control" placeholder="Nhập mật khẩu...">
                                @error('pass') <span class="text-thong-bao">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <p class="forgot-pass"><a href="#">Quên mật khẩu?</a></p>
                            </div>
                            <button type="submit" class="btn btn-warning">Đăng nhập</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
