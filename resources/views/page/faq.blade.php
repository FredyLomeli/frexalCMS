@extends('layouts.front')
<!-- contact -->
@include('page.parts.header')
<!-- contact -->
@include('page.parts.faq')

@section('styles')
@yield('styles_faq')
@endsection

@section('content')
    @yield('content_header')
    @yield('content_faq')
@endsection

@section('script')
    @yield('script_faq')
@endsection

