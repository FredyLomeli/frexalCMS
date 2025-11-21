@extends('layouts.front')
<!-- contact -->
@include('page.parts.header')
<!-- contacto -->
@include('page.parts.contact')
<!-- contact -->
@include('page.parts.contactanos')

@include('page.parts.maps')

@section('styles')
@endsection

@section('content')
    @yield('content_header')
    @include('messages.info')
    @include('messages.warning')
    @include('messages.list_errors')
    @yield('content_contact')
    @yield('content_maps')
@endsection

@section('script')
@endsection

