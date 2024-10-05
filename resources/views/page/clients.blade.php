@extends('layouts.front')
<!-- contact -->
@include('page.parts.header')
<!-- contact -->
@include('page.parts.clients')

@section('styles')
@endsection

@section('content')
    @yield('content_header')
    @yield('content_clients')
@endsection

@section('script')
@endsection

