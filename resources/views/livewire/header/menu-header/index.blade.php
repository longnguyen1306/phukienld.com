<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#">MENU</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ route('home.index') }}">Trang chủ</a></li>
                <li class="dropdown">
                    <a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Sản phẩm</a>
                    <ul class="dropdown-menu container-fluid">
                        <li class="block-container">
                            <ul class="block">
                                <li class="link_container"><a href="#">Mobile</a></li>
                                <li class="link_container"><a href="#">Tablets</a></li>
                                <li class="link_container"><a href="#">Laptop</a></li>
                                <li class="link_container"><a href="#">Memory Cards</a></li>
                                <li class="link_container"><a href="#">Accessories</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="category.html">Chính Sách</a></li>
                <li><a href="category.html">Bài Viết</a></li>
                <li><a href="category.html">Liên hệ</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
