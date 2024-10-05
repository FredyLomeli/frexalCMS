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
                                <form action="" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
                                    <div style="display: none;">
                                        <input type="hidden" name="_wpcf7" value="7659">
                                    </div>
                                    <div class="">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form__grup wow fadeInLeft" data-wow-delay="0.3s">
                                                    <span class="wpcf7-form-control-wrap">
                                                        <select class="wpcf7-form-controlEEEE">
                                                            <option value="0">¿Casa u oficina?</option>
                                                            <option value="1">Para Casa</option>
                                                            <option value="2">Para Oficina</option>
                                                        </select>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form__grup wow fadeInUp" data-wow-delay="0.6s">
                                                    <span class="wpcf7-form-control-wrap">
                                                        <select class="wpcf7-form-control">
                                                            <option value="0">Tipo de servicio</option>
                                                            <option value="1">Hogar seguro</option>
                                                            <option value="2">Cámaras de vigilancia</option>
                                                            <option value="3">Sistema de alarmas</option>
                                                            <option value="4">Control de acceso</option>
                                                            <option value="5">Sistema vs incendio</option>
                                                            <option value="6">Biométricos</option>
                                                            <option value="7">Automatización</option>
                                                            <option value="8">Sistema de Grabación</option>
                                                        </select>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form__grup wow fadeInUp" data-wow-delay="0.6s">
                                                    <span class="wpcf7-form-control-wrap">
                                                        <select class="wpcf7-form-control">
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
                                                <div class="form__grup wow fadeInUp" data-wow-delay="0.6s">
                                                    <span class="wpcf7-form-control-wrap">
                                                        <input type="text" size="40" class="wpcf7-form-control form-popup__input" placeholder="Nombre completo">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form__grup wow fadeInUp" data-wow-delay="0.6s">
                                                    <span class="wpcf7-form-control-wrap">
                                                        <input type="email" value="" size="40" class="wpcf7-form-control form-popup__input" placeholder="Correo Electrónico">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form__grup wow fadeInUp" data-wow-delay="0.6s">
                                                    <span class="wpcf7-form-control-wrap">
                                                        <input type="text" value="" size="40" class="wpcf7-form-control form-popup__input" placeholder="Número celular">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="wow fadeInUp" data-wow-delay="0.8s">
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