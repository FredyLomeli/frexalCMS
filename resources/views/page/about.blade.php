@extends('layouts.front')
<!-- contact -->
@include('page.parts.header')
<!-- About -->
@include('page.parts.about')
<!-- Video -->
@include('page.parts.video')
<!-- branding -->
@include('page.parts.branding')
<!-- Services -->
@include('page.parts.services')
<!-- contact -->
@include('page.parts.clients')

@section('styles')
    @yield('style_video')
    @yield('style_slide')
@endsection

@section('content')
    @yield('content_header')
    @yield('content_about')
    @yield('content_branding')
    @yield('content_video')
    @yield('content_service')
    @yield('content_clients')
@endsection

@section('script')
    @yield('script_slide')
    @yield('script_video')
    @yield('script_category')
@endsection

