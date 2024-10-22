@section('content_contact')
<!-- Offer Request -->
<section class="offer-request">
    <div class="container">
        <div class="row">
            <div class="dep2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 lefthealt">
                            <img class="ff" src="{{ asset('secutech/offer-form-secutech-3.jpg') }}" alt="">
                        </div>
                        <div class="col-lg-8">
                            <h2 class="h2-baslik-anasayfa-wt wow fade" >¡Cotiza ahora!</h2>
                            <div role="form" class="wpcf7">
                                <div class="screen-reader-response">
                                    <p role="status" aria-live="polite" aria-atomic="true"></p> 
                                    <ul></ul>
                                </div>
                                <form action="{{ route('contact.mail') }}" method="post" class="wpcf7-form init" role="form" 
                                    class="contactForm" novalidate="novalidate">
                                    {{csrf_field()}}
                                    <div class="">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form__grup wow fadeInLeft">
                                                    <span class="wpcf7-form-control-wrap">
                                                        <select class="wpcf7-form-controlEEEE" name="tipo" id="tipo">
                                                            <option value="¿Casa u oficina?">¿Casa u oficina?</option>
                                                            <option value="Para Casa">Para Casa</option>
                                                            <option value="Para Oficina">Para Oficina</option>
                                                        </select>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form__grup wow fadeInUp">
                                                    <span class="wpcf7-form-control-wrap">
                                                        <select class="wpcf7-form-control" name="sistema" id="sistema">
                                                            <option value="Tipo de servicio">Tipo de servicio</option>
                                                            <option value="Hogar seguro">Hogar seguro</option>
                                                            <option value="Cámaras de vigilancia">Cámaras de vigilancia</option>
                                                            <option value="Sistema de alarmas">Sistema de alarmas</option>
                                                            <option value="Control de acceso">Control de acceso</option>
                                                            <option value="Sistema vs incendio">Sistema vs incendio</option>
                                                            <option value="Biométrico">Biométricos</option>
                                                            <option value="Automatización">Automatización</option>
                                                            <option value="Sistema de Grabació">Sistema de Grabación</option>
                                                        </select>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form__grup wow fadeInUp">
                                                    <span class="wpcf7-form-control-wrap">
                                                        <select class="wpcf7-form-control" name="tamano" id="tamano">
                                                            <option value="0">Tamaño del sistema</option>
                                                            <option value="1">Paqueño (1-3 Ubicaciones)</option>
                                                            <option value="2">Mediano (4-8 Ubicaciones)</option>
                                                            <option value="3">Grande (9-15 Ubicaciones)</option>
                                                            <option value="4">Otros</option>
                                                        </select>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form__grup wow fadeInUp">
                                                    <span class="wpcf7-form-control-wrap">
                                                        <input type="text" size="40" name="name" id="name"
                                                            class="wpcf7-form-control form-popup__input" placeholder="Nombre completo">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form__grup wow fadeInUp">
                                                    <span class="wpcf7-form-control-wrap">
                                                        <input type="email" value="" size="40" name="correo" id="correo"
                                                            class="wpcf7-form-control form-popup__input" placeholder="Correo Electrónico">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form__grup wow fadeInUp">
                                                    <span class="wpcf7-form-control-wrap">
                                                        <input type="text" value="" size="40" name="telefono" id="telefono"
                                                            class="wpcf7-form-control form-popup__input" placeholder="Número celular">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="wow fadeInUp">
                                                    <input type="submit" value="Solicitar →" class="wpcf7-form-control custom-button"><span class="wpcf7-spinner"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection