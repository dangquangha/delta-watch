@extends('layouts.master')

@section('title', 'Đăng ký Smart Watch')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
    @include('pages.register.components.breadcrumbs')

    <div class="content">
        @include('pages.register.components.register_form')
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/register.js') }}"></script>
@endsection
