@extends('layouts.front')
@section('title')
<!-- Slide -->
@include('page.parts.slide')
<!-- About -->
@include('page.parts.about')
<!-- servicios -->
@include('page.parts.services')
<!-- Video -->
@include('page.parts.video')
<!-- Category -->
@include('page.parts.category')
<!-- contact -->
@include('page.parts.contact')
<!-- contact -->
@include('page.parts.clients')

@section('styles')
    @yield('style_slide')
    @yield('style_video')
@endsection

@section('content')
    @yield('content_slide')
    @yield('content_about')
    @yield('content_service')
    @yield('content_video')
    @yield('content_category')
    @yield('content_contact')
    @yield('content_clients')
@endsection

@section('script')
    @yield('script_slide')
    @yield('script_video')
    @yield('script_category')
@endsection

