@component('mail::message')
Te han contactado via  https://www.issi.com.mx/

Nombre: {{$data['name']}}

Telefono: {{$data['telefono']}}

Email: {{$data['correo']}}

Asunto: {{$data['sistema']}}

El mensaje es el siguiente:
Deseo cotizar un sistema enfocado a: {{$data['tipo']}} 
Sistema del tipo: {{$data['tipo']}}
En un lugar de: {{$data['tamano']}}

{{ config('app.name') }}
@endcomponent
