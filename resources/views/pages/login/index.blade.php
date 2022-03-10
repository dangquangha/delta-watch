@extends('layouts.master')

@section('title', 'Đăng nhập Smart Watch')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
    @include('pages.login.components.breadcrumbs')

    <div class="content">
        @include('pages.login.components.login_form')
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/login.js') }}"></script>
@endsection
