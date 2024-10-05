<!-- Portfolio Start -->
<div class="portfolio">
    <div class="container">
        <div class="section-header">
            <h2>Nuestros Servicios</h2>
        </div>
        <div class="row portfolio-container">
            @forelse ($productos as $product)
            <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{ asset('img/products' . $product->img_name) }}" alt="Portfolio Image">
                        <a href="{{ asset('img/products' . $product->img_name) }}" class="link-preview" 
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        <a href="{{ route('show.product', $product)}}" class="link-details"><i class="fa fa-link"></i></a>
                        <a class="portfolio-title" href="{{ route('show.product', $product)}}">{{$product->name}}</a>
                    </figure>
                </div>
            </div>
            @empty
            @endforelse
        </div>
    </div>
</div>
<!-- Portfolio Start -->
