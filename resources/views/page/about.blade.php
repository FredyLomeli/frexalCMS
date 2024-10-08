@extends('layouts.front')
<!-- contact -->
@include('page.parts.header')
<!-- About -->
@include('page.parts.about')
<!-- Video -->
@include('page.parts.video')
<!-- Video -->
@include('page.parts.services')
<!-- contact -->
@include('page.parts.clients')

@section('styles')
    @yield('style_video')
@endsection

@section('content')
    @yield('content_header')
    @yield('content_about')
    @yield('content_video')
    @yield('content_service')
    @yield('content_clients')
@endsection

@section('script')
@endsection

