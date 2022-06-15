<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="{{ route('home.index') }}" title="Return to Home">Trang chủ</a>
            <span class="navigation-pipe">&nbsp;</span>
            <a href="{{ route('home.category') }}" title="Return to Home">Sản phẩm</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Chi tiết sản phẩm</span>
        </div>
        <!-- ./breadcrumb -->
        <div class="row">
            @livewire('product.left-column.index', ['product' => $product])

            @livewire('product.detail.index', ['product' => $product])
        </div>
    </div>
</div>
