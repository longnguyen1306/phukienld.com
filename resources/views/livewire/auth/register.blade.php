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
                        <h3>Đã có tài khoản</h3>
                        <p class="mb-4">Vui lòng vào link bên dưới để chuyển đến trang đăng nhập.</p>
                        <a href="{{route('home.login')}}" class="btn btn-warning" style="margin-top: 20px"> Đăng nhập</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="box-authentication">
                        <form wire:submit.prevent="register">
                            <h3>Đăng ký tài khoản</h3>
                            <div class="form-group">
                                <label>Họ Tên:</label>
                                <input wire:model="name" name="name" type="text" class="form-control" placeholder="Nhập họ tên...">
                                @error('name') <span class="text-thong-bao">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label>Email:</label>
                                <input wire:model="email" name="email" type="email" class="form-control" placeholder="Nhập email...">
                                @error('email') <span class="text-thong-bao">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại:</label>
                                <input wire:model="phone" name="phone" type="text" class="form-control" placeholder="Nhập số điện thoại...">
                                @error('phone') <span class="text-thong-bao">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label>Mật khẩu:</label>
                                <input wire:model="pass" name="password" type="password" class="form-control" placeholder="Nhập mật khẩu...">
                                @error('pass') <span class="text-thong-bao">{{ $message }}</span> @enderror
                            </div>
                            <button type="submit" class="btn btn-warning">Đăng nhập</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
