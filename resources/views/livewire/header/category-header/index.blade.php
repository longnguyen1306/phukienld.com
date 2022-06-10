<div class="box-vertical-megamenus">
    <h4 class="title">
        <span class="title-menu">Danh mục</span>
        <span class="btn-open-mobile pull-right home-page"><i class="fa fa-bars"></i></span>
    </h4>
    <div class="vertical-menu-content is-home">
        <ul class="vertical-menu-list">
            @foreach($cats as $cat)
            <li><a href="{{ route('home.category', $cat->slug) }}">{{ $cat->name }}</a></li>
            @endforeach
        </ul>
    </div>
</div>
