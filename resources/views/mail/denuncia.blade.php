@component('mail::message')
# Denuncia

@component('mail::panel')
<p>Mensagem: {{ $documento->mensagem}}</p>
@endcomponent

<br/>
{{ config('app.name') }}
@endcomponent
