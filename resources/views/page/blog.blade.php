@extends('layouts.front')
<!-- contact -->
@include('page.parts.header')
<!-- contact -->
@include('page.parts.blog')

@section('styles')
@endsection

@section('content')
    @yield('content_header')
    @yield('content_blog')
@endsection

@section('script')
@endsection

