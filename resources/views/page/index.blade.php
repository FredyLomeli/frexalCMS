@extends('layouts.front')
@section('title', "Inicio - ")
<!-- Slide -->
@include('page.parts.slide')
<!-- About -->
@include('page.parts.about')
<!-- Category -->
@include('page.parts.category')
<!-- Video -->
@include('page.parts.video')
<!-- Video -->
@include('page.parts.services')
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
    @yield('content_category')
    @yield('content_video')
    @yield('content_service')
    @yield('content_contact')
    @yield('content_clients')
@endsection

@section('script')
    @yield('script_slide')
    @yield('script_video')
@endsection

