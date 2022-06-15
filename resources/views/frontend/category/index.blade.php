@extends('layouts.app')

@section('content')

    @livewire('category.index', ['slug' => $slug])

@endsection
