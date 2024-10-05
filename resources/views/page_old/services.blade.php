@extends('layouts.front')
@section('title', "Portafolio - ")
@section('content')

@include('page.servicios')

@forelse ($categorys as $category)
<!-- Service Row Start -->
<div class="service-row">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6{{ ( $loop->index == 0 || $loop->index%2 == 0  ? ' d-md-none d-block' : '') }}">
                <div class="service-row-img">
                    <img src="{{ asset('img/portfolio'.$category->img_name) }}" alt="Service">
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-row-text">
                    <h2 class="section-title">{{$category->name}}</h2>
                    <p>{{$category->description}}</p>
                </div>
            </div>
            @if ($loop->index == 0 || $loop->index%2 == 0)
            <div class="col-md-6 d-md-block d-none">
                <div class="service-row-img">
                    <img src="{{ asset('img/portfolio'.$category->img_name) }}" alt="Service">
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
<!-- Service Row End -->
@empty
@endforelse

@endsection
