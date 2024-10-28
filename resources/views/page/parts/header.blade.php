@section('content_header')
<header class="page-header wow fadeInUp" data-background="{{ asset('secutech/033-header-secutech.jpg') }}">
    <div class="container">
        <h2>{{ $informacion['page'] }}</h2>
        <p><a href="{{route('index')}}" class="headerbreadcrumb">Inicio</a> &nbsp;&nbsp;>&nbsp; {{ $informacion['page'] }}</p>
    </div>
</header>
@endsection