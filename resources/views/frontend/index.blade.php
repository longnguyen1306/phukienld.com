@extends('layouts.app')

@section('content')
    @livewire('home.slider.index')

    @livewire('home.services.index')

    @livewire('home.product-sale-top-page.index')

    <div id="content-wrap" style="margin-bottom: 20px">
        <div class="container">
            <!-- featured category fashion -->
            @livewire('home.category-featured.index')
            @livewire('home.category-featured.index')
            <!-- end featured category fashion -->

            <!-- Baner bottom -->
            @livewire('home.banner-botton.index')
            <!-- end banner bottom -->
        </div>
    </div>
@endsection
