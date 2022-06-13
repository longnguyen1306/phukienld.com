<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.index') }}" class="brand-link">
        <img src="{{ asset('images/default/logo.png') }}" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">LD STORE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if(auth()->user()->avatar)
                <img src="{{ asset(auth()->user()->avatar) }}" class="img-circle elevation-2">
                @else
                <img src="{{ asset('images/default/logo.png') }}" class="img-circle elevation-2">
                @endif
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('admin.index') }}" class="nav-link {{ Request::is('admin') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                {{--menus--}}
                <li class="nav-item {{ Request::is('admin/menus*') ? 'menu-is-opening menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('admin/menus*') ? 'active' : '' }}">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Menus
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('admin.menus.header-menu.index') }}" class="nav-link {{ Request::is('admin/menus*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Header Menu</p>
                            </a>
                        </li>

                    </ul>
                </li>
                {{--danh mục--}}
                <li class="nav-item {{ Request::is('admin/categories*') ? 'menu-is-opening menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('admin/categories*') ? 'active' : '' }}">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Danh mục
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('admin.categories.product-category.index') }}" class="nav-link {{ Request::is('admin/categories/product-category*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh mục sản phẩm</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.categories.brand.index') }}" class="nav-link {{ Request::is('admin/categories/brand*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thương hiệu</p>
                            </a>
                        </li>

                    </ul>
                </li>
                {{--banners--}}
                <li class="nav-item {{ Request::is('admin/banners*') ? 'menu-is-opening menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('admin/banners*') ? 'active' : '' }}">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Banner
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('admin.banners.home-banner.index') }}" class="nav-link {{ Request::is('admin/banners/home-banner*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Home banner</p>
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
