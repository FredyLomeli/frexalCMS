@component('mail::message')
Te han contactado via  https://www.mhglobalbsupport.com/

Nombre: {{$data['name']}}

Telefono: {{$data['telefono']}}

Email: {{$data['email']}}

Asunto: {{$data['asunto']}}

El mensaje es el siguiente:
{{$data['message']}}

{{ config('app.name') }}
@endcomponent
