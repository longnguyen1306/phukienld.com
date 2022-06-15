@extends('layouts.app')

@section('content')
    @livewire('product.index',['slug' => $slug])
@endsection
