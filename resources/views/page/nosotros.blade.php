<!-- About Start -->
<div class="about">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('img/about/'.$informacion['img_nosotros']) }}" alt="welcome">
            </div>
            <div class="col-md-6">
                <h2 class="section-title">Conocenos</h2>
                <p>{{ $informacion['nosotros'] }}</p>
                @if ($informacion['page'] === 'inicio')
                <a class="btn" href="{{ route('nosotros') }}">Conoce mas</a>    
                @endif
            </div>
        </div>
    </div>
</div>
<!-- About End -->