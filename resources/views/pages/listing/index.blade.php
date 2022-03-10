@extends('layouts.master')

@section('title', 'Sản phẩm Delta Watch')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/listing.css') }}">
@endsection

@section('content')
    @include('pages.listing.components.breadcrumbs')

    <div class="content">
        <div class="content_main mt-3">
            <div class="container">
                <div class="row">
                    @include('pages.listing.components.sidebar')

                    @include('pages.listing.components.list_products')
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/listing.js') }}"></script>
@endsection