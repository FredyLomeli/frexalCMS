<!-- Service Start -->
<div class="service">
    <div class="container-fluid">
        <div class="section-header">
            <h2>Nuestros Servicios</h2>
            <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium ornare velit non</p>-->
        </div>
        <div class="row">
            @forelse ($categorys as $category)
            <div class="col-lg-3 col-md-6">
                <div class="service-item">
                    <h3>{{$category->name}}</h3>
                    <img src="{{ asset('img/portfolio'.$category->img_name) }}" alt="Service">
                    <p>{{$category->description}}</p>
                </div>
            </div>
            @empty
            @endforelse
        </div>
    </div>
</div>
<!-- Service End -->
