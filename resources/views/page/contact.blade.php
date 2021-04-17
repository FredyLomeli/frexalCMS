@extends('layouts.front')
@section('title', "Contacto - ")
@section('content')
@include('messages.info')
@include('messages.warning')
@include('messages.list_errors')

<!-- Contact Start -->
<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="section-title">Ubicacion</h2>
                <div class="contact-info">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3019.8657333246992!2d-73.95447848459209!3d40.80894417932154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f613438663b5%3A0xce20073c8862af08!2sW%20123rd%20St%2C%20New%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1589004464646!5m2!1sen!2sbd" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    <h3>¿Como nos encuentras?</h3>
                    <p>{{$informacion['descripcion_ubicacion']}}</p>
                    <h3>Telefono <span>{{$informacion['telefono']}}</span></h3>
                    <h3>E-mail <span>{{$informacion['email']}}</span></h3>
                </div>
            </div>
            <div class="col-md-6">
                <div class="editor-info">
                    <h2 class="section-title">Contactanos</h2>
                    <div class="form contact-form">
                        <form action="{{ route('contact.mail') }}" method="post" role="form" class="contactForm">
                            {{csrf_field()}}
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Tu nombre" required/>
                                @if ($errors->has('name'))
                                    <small class="text-center text-danger">{{ $errors->first('name') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="telefono"
                                    id="telefono" placeholder="Teléfono" minlength="10" required/>
                                @if ($errors->has('telefono'))
                                    <small class="text-center text-danger">{{ $errors->first('telefono') }}</small>
                                @endif
                            </div>
                                <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Correo electrónico" required/>
                                @if ($errors->has('email'))
                                    <small class="text-center text-danger">{{ $errors->first('email') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="asunto" id="asunto"
                                    placeholder="Asunto" required/>
                                @if ($errors->has('asunto'))
                                    <small class="text-center text-danger">{{ $errors->first('asunto') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="message" name="message"
                                    rows="5" required></textarea>
                                @if ($errors->has('message'))
                                    <small class="text-center text-danger">{{ $errors->first('message') }}</small>
                                @endif
                            </div>
                            <div class="text-center"><button class="btn btn-primary" type="submit">Enviar solicitud</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

@endsection
