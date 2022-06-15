<div class="column col-xs-12 col-sm-3" id="left_column">
    <div class="block left-module">
        <p class="title_block">Lọc sản phẩm</p>
        <div class="block_content">
            <div class="layered layered-filter-price">
                <div class="layered_subtitle">Danh mục</div>
                <div class="layered-content">
                    <ul class="check-box-list">
                        @foreach($categories as $category)
                        <li>
                            <input type="checkbox" id="c{{$category->id}}" name="cc{{$category->id}}" />
                            <label for="c{{$category->id}}">
                                <span class="button"></span>
                                {{ $category->name }}<span class="count">({{count($category->products)}})</span>
                            </label>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="layered_subtitle">Giá</div>
                <div class="layered-content slider-range">

                    <div data-label-reasult="Range:" data-min="0" data-max="500" data-unit="$" class="slider-range-price" data-value-min="50" data-value-max="350"></div>
                    <div class="amount-range-price">Range: $50 - $350</div>
                </div>
                <div class="layered_subtitle">Thương hiệu</div>
                <div class="layered-content filter-brand">
                    <ul class="check-box-list">
                        @foreach($brands as $brand)
                        <li>
                            <input type="checkbox" id="brand{{$brand->id}}" name="cc" />
                            <label for="brand{{$brand->id}}">
                                <span class="button"></span>
                                {{$brand->name}}<span class="count">(0)</span>
                            </label>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- left silide -->
    <div class="col-left-slide left-module">
        <ul class="owl-carousel owl-style2" data-loop="true" data-nav = "false" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1" data-autoplay="true">
            <li><a href="#"><img src="/assets/data/slide-left.jpg" alt="slide-left"></a></li>
            <li><a href="#"><img src="/assets/data/slide-left2.jpg" alt="slide-left"></a></li>
            <li><a href="#"><img src="/assets/data/slide-left3.png" alt="slide-left"></a></li>
        </ul>

    </div>
    <!--./left silde-->

    <!-- TAGS -->
    <div class="block left-module">
        <p class="title_block">TAGS</p>
        <div class="block_content">
            <div class="tags">
                <a href="#"><span class="level1">actual</span></a>
                <a href="#"><span class="level2">adorable</span></a>
                <a href="#"><span class="level3">change</span></a>
                <a href="#"><span class="level4">consider</span></a>
                <a href="#"><span class="level3">phenomenon</span></a>
                <a href="#"><span class="level4">span</span></a>
                <a href="#"><span class="level1">spanegs</span></a>
                <a href="#"><span class="level5">spanegs</span></a>
                <a href="#"><span class="level1">actual</span></a>
                <a href="#"><span class="level1">actual</span></a>
                <a href="#"><span class="level1">actual</span></a>
                <a href="#"><span class="level1">actual</span></a>
                <a href="#"><span class="level1">actual</span></a>
                <a href="#"><span class="level1">actual</span></a>
                <a href="#"><span class="level1">actual</span></a>
                <a href="#"><span class="level1">actual</span></a>
                <a href="#"><span class="level2">adorable</span></a>
                <a href="#"><span class="level3">change</span></a>
                <a href="#"><span class="level4">consider</span></a>
                <a href="#"><span class="level2">gives</span></a>
                <a href="#"><span class="level3">change</span></a>
                <a href="#"><span class="level2">gives</span></a>
                <a href="#"><span class="level1">good</span></a>
                <a href="#"><span class="level3">phenomenon</span></a>
                <a href="#"><span class="level4">span</span></a>
                <a href="#"><span class="level1">spanegs</span></a>
                <a href="#"><span class="level5">spanegs</span></a>
            </div>
        </div>
    </div>
    <!-- ./TAGS -->
</div>
