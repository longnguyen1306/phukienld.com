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
                    <a class="dropdown-toggle" data-toggle="dropdown" style="cursor: pointer">Sản phẩm</a>
                    <ul class="dropdown-menu container-fluid">
                        <li class="block-container">
                            <ul class="block">
                                @foreach($categories as $cat)
                                <li class="link_container"><a href="{{ route('home.category',$cat->slug) }}">{{ $cat->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </li>
                @if($menus)
                    @foreach($menus as $menu)
                        <li><a href="{{ $menu->link }}" target="_blank">{{ $menu->name }}</a></li>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
</nav>
