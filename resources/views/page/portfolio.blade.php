@extends('layouts.front')
@section('title', "Portafolio - ")
@section('content')

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Nuestros Productos</h2>
            </div>
            <div class="col-12">
                <a href="{{route('index') }}">Inicio</a>
                <a href="{{route('show_all.products')}}">Productos</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Portfolio Start -->
<div class="portfolio">
    <div class="container">
        <div class="section-header">
            <h2>Nuestros Productos</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">Todos</li>
                    @forelse ($categorys as $category)
                    <li data-filter=".{{ \Illuminate\Support\Str::slug($category->name,'-') }}">{{$category->name}}</li>
                    @empty
                    @endforelse
                </ul>
            </div>
        </div>
        <div class="row portfolio-container">
            @forelse ($productos as $product)
            <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item {{ \Illuminate\Support\Str::slug($product->category->name,'-') }}">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{ asset('img/products' . $product->img_name) }}" alt="Portfolio Image">
                        <a href="{{ asset('img/products' . $product->img_name) }}" class="link-preview" 
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        <a href="{{ route('show.product', $product)}}" class="link-details"><i class="fa fa-link"></i></a>
                        <a class="portfolio-title" href="#">{{$product->name}}</a>
                    </figure>
                </div>
            </div>
            @empty
            @endforelse
        </div>
    </div>
</div>
<!-- Portfolio Start -->

@endsection
