@extends('layouts.master')

@section('title', 'Thế giới Smart Watch')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
    @include("pages.home.components.banner")

    <div class="content">
        @include('pages.home.components.best_brands')

        @include('pages.home.components.new_products')

        @include('pages.home.components.products_by_brand')

        @include('pages.home.components.products_for_man')

        @include('pages.home.components.products_for_woman')

        @include('pages.home.components.best_equipments')

        @include('pages.home.components.posts')
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/home.js') }}"></script>
@endsection