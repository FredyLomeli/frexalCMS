@extends('layouts.front')
@section('title', "Noticias - ")
@section('content')
<div class="service-row">
    <div class="container">
        <div class="section-header">
            <h2>Noticias</h2>
        </div>
        @forelse ($posts as $post)
        <!-- Service Row Start -->
        
            <div class="row align-items-center">
                <div class="col-md-6{{ ( $loop->index == 0 || $loop->index%2 == 0  ? ' d-md-none d-block' : '') }}">
                    <div class="service-row-img">
                        <a href="{{ route('show_new', $post) }}">
                            <img src="{{ asset('img/post'.$post->img_post) }}" alt="Noticias">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-row-text">
                        <a href="{{ route('show_new', $post) }}"><h2 class="section-title">{{$post->title}}</h2></a>
                        <p>{{$post->brief}}</p>
                        <p style="color: gray">Fecha de publicación : {{$post->created_at}}</p>
                    </div>
                </div>
                @if ($loop->index == 0 || $loop->index%2 == 0)
                <div class="col-md-6 d-md-block d-none">
                    <div class="service-row-img">
                        <a href="{{ route('show_new', $post) }}">
                            <img src="{{ asset('img/post'.$post->img_post) }}" alt="Noticias">
                        </a>
                    </div>
                </div>
                @endif
            </div>
        <hr>
        <!-- Service Row End -->
        @empty
        <p>No se han registrado noticias hasta el momento.</p>
        @endforelse
        {{ $posts->links('vendor.pagination.bootstrap-4') }}
    </div>

</div>
@endsection
