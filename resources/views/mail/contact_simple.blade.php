@component('mail::message')
Te han contactado via  https://www.issi.com.mx/

Nombre: {{$data['nombre']}}

Telefono: {{$data['telefono']}}

Email: {{$data['email']}}

Asunto: Interesado en ser Contactado lo antes posible.

{{ config('app.name') }}
@endcomponent
