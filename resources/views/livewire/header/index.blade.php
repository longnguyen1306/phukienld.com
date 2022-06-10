<div id="header" class="header">
    @livewire('header.top-header.index')
    <!--/.top-header -->
    <!-- MAIN HEADER -->
    @livewire('header.main-header.index')
    <!-- END MANIN HEADER -->
    <div id="nav-top-menu" class="nav-top-menu">
        <div class="container">
            <div class="row">
                @if(request()->path() === '/')
                <div class="col-sm-3" id="box-vertical-megamenus">
                    @livewire('header.category-header.index')
                </div>
                @endif
                <div id="main-menu" class=" @if(request()->path() === '/') col-sm-9 @else col-sm-12 @endif  main-menu">
                    @livewire('header.menu-header.index')
                </div>
            </div>
            <!-- userinfo on top-->
            <div id="form-search-opntop">
            </div>
            <!-- userinfo on top-->
            <div id="user-info-opntop">
            </div>
            <!-- CART ICON ON MMENU -->
            <div id="shopping-cart-box-ontop">
                <i class="fa fa-shopping-cart"></i>
                <div class="shopping-cart-box-ontop-content"></div>
            </div>
        </div>
    </div>
</div>
