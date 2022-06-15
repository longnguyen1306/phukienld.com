<div class="top-header">
    <div class="container">
        <div class="nav-top-links">
            <a class="first-item" href="#">
                <img alt="phone" src="{{ asset('assets/images/phone.png') }}" />
                0934 072 724
            </a>
            <a href="mailto:ldc.longnd@gmail.com">
                <img alt="email" src="{{ asset('assets/images/email.png') }}" />
                ldc.longnd@gmail.com
            </a>
        </div>

        <div class="support-link">
            <a href="#">Đơn hàng</a>
            <a href="#">Hỗ trợ</a>
        </div>

        <div id="user-info-top" class="user-info pull-right">
            @if(auth()->check())
                <div class="dropdown">
                    <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                        <span>Xin chào: {{ auth()->user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu mega_dropdown" role="menu">
                        <li><a href="l">Tài khoản</a></li>
                        <li><a href="l">Đơn hàng</a></li>
                        <li><a href="{{route('home.logout')}}">Đăng xuất</a></li>
                    </ul>
            </div>
            @else
                <div class="dropdown">
                <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                    <span>Tài khoản</span>
                </a>
                <ul class="dropdown-menu mega_dropdown" role="menu">
                    <li><a href="login.html">Đăng ký</a></li>
                    <li><a href="{{ route('home.login') }}">Đăn nhập</a></li>
                </ul>
            </div>
            @endif
        </div>
    </div>
</div>
