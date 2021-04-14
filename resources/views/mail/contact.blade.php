@component('mail::message')
Los Datos de la persona que te ha contactado son:

Nombre: {{$data['name']}}

Telefono: {{$data['telefono']}}

Email: {{$data['email']}}

Los datos tecnicos son los siguientes:

Numero de serie de la maquina: {{$data['no_serie']}}

Modelo de la maquina: {{$data['mod_maquina']}}

Numero de pieza: {{$data['no_pieza']}}

El mensaje es el siguiente:
{{$data['message']}}

{{ config('app.name') }}
@endcomponent
