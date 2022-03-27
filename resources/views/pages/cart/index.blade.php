@extends('layouts.master')

@section('title', 'Giỏ hàng')

@section('css')
    <script src="{{ asset('libs/jquery/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('libs/popper/popper.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
@endsection

@section('content')
    @include('pages.cart.components.breadcrumbs')

    <div class="content">
        @include('pages.cart.components.cart_list')
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/cart.js') }}"></script>
@endsection
