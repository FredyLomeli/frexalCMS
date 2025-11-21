<li id="text-2" class="widget widget_text">		

    <div class="textwidget">
        <div role="form" class="wpcf7" id="wpcf7-f809-o1" lang="en-US" dir="ltr">
            <div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
            <form action="{{ route('contact.mailSimple') }}" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
                {{csrf_field()}}
                <div class="callbackform wow fadeInUp" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                    <h2 class="h2-baslik-popup h-yazi-margin-kucuk">Para mas información<br></h2>
                    <p class="paragraf-popup">¡Contactanos ahora!</p>
                    <div class="form-popup">
                        <div class="form-popup__grup">
                            <span class="wpcf7-form-control-wrap" data-name="nombre">
                                <input type="text" name="nombre" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-popup__input" aria-required="true" aria-invalid="false" placeholder="Nombre completo" required>
                            </span><br>
                        </div>
                        <div class="form-popup__grup">
                            <span class="wpcf7-form-control-wrap" data-name="email">
                                <input type="email" name="email" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-popup__input" aria-required="true" aria-invalid="false" placeholder="Correo electronico" required>
                            </span><br>
                        </div>
                        <div class="form-popup__grup">
                            <span class="wpcf7-form-control-wrap" data-name="telefono">
                                <input type="text" name="telefono" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-popup__input" aria-required="true" aria-invalid="false" placeholder="Numero de telefono" required>
                            </span><br>
                        </div>
                        <div class="form-popup__grup">
                            @include('messages.info')
                            @include('messages.warning')
                            @include('messages.list_errors')
                        </div>
                        <div class="form-popup__grup">
                            <div class="or">
                                <input type="submit" value="Solicitar Información →" class="wpcf7-form-control has-spinner wpcf7-submit custom-buttonf"><span class="wpcf7-spinner"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpcf7-response-output" aria-hidden="true"></div>
            </form>
        </div>
    </div>

</li>