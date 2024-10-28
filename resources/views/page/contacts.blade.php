@extends('layouts.front')
<!-- contact -->
@include('page.parts.header')
<!-- contacto -->
@include('page.parts.contact')
<!-- contact -->
@include('page.parts.contactanos')

@section('styles')
@endsection

@section('content')
    @yield('content_header')
    @include('messages.info')
    @include('messages.warning')
    @include('messages.list_errors')
    @yield('content_contact')
    @yield('content_contacto')
@endsection

@section('script')
@endsection

