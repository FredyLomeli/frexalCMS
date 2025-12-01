@section('content_contact')
<section class="offer-request">
    <div class="container">
        <div class="row">
            <div class="dep2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 lefthealt">
                            @empty($informacion['img_cotizar'])
                            <img class="ff" src="{{ asset('secutech/offer-form-secutech-3.jpg') }}" alt="">
                            @else
                            <img class="ff" src="{{ asset('img/about' . $informacion['img_cotizar']) }}" alt="">
                            @endempty
                        </div>
                        <div class="col-lg-8">
                            <h2 class="h2-baslik-anasayfa-wt wow fade">¡Cotiza ahora!</h2>
                            <div role="form" class="wpcf7">
                                <form action="{{ route('contact.mail') }}" method="post" class="wpcf7-form init">
                                    {{ csrf_field() }}
                                    
                                    <div class="row">
                                        
                                        {{-- INICIO DEL BUCLE DINÁMICO --}}
                                        @forelse($campos as $campo)
                                        <div class="col-lg-4">
                                            <div class="form__grup wow fadeInUp">
                                                <span class="wpcf7-form-control-wrap">
                                                    
                                                    {{-- OPCIÓN A: COMBO BOX (SELECT) --}}
                                                    @if($campo->type == 'select')
                                                        <select name="datos[{{ $campo->name }}]" class="wpcf7-form-control">
                                                            {{-- La primera opción es el Label (placeholder) --}}
                                                            <option value="">{{ $campo->name }}</option>
                                                            
                                                            @php
                                                                $opciones = explode(',', $campo->values);
                                                            @endphp

                                                            @foreach($opciones as $opcion)
                                                                <option value="{{ trim($opcion) }}">
                                                                    {{ trim($opcion) }}
                                                                </option>
                                                            @endforeach
                                                        </select>

                                                    {{-- OPCIÓN B: TEXTO LIBRE (INPUT) --}}
                                                    @else
                                                        <input type="text" 
                                                               name="datos[{{ $campo->name }}]" 
                                                               class="wpcf7-form-control form-popup__input" 
                                                               placeholder="{{ $campo->name }}">
                                                    @endif

                                                </span>
                                            </div>
                                        </div>
                                        @empty

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
                                                        <option value="Tamaño del sistema">Tamaño del sistema</option>
                                                        <option value="Pequeño (1-3 Ubicaciones)">Pequeño (1-3 Ubicaciones)</option>
                                                        <option value="Mediano (4-8 Ubicaciones)">Mediano (4-8 Ubicaciones)</option>
                                                        <option value="Grande (9-15 Ubicaciones)">Grande (9-15 Ubicaciones)</option>
                                                        <option value="Otros">Otros</option>
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

                                        @endforelse
                                        {{-- FIN DEL BUCLE DINÁMICO --}}

                                        {{-- BOTÓN ENVIAR --}}
                                        <div class="col-lg-12">
                                            <div class="wow fadeInUp" style="margin-top: 20px;">
                                                <input type="submit" value="Solicitar →" class="wpcf7-form-control custom-button">
                                            </div>
                                        </div>

                                    </div>
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