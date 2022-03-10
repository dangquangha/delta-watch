@extends('layouts.master')

@section('title', 'Sản phẩm XXX')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
    @include('pages.detail.components.breadcrumbs')

    <div class="content">
        @include('pages.detail.components.product_overview')

        @include('pages.detail.components.product_info')

        @include('pages.detail.components.product_relate')

        @include('pages.detail.components.posts')
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/detail.js') }}"></script>
@endsection