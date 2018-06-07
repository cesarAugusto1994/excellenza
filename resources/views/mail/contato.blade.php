@component('mail::message')
# Envio de Dados para Contato

@component('mail::panel')
<p>Nome: <b>{{ $contato->nome }}</b></p>
<p>E-mail: <b>{{ $contato->email }}</b></p>
<p>Telefone: {{ $contato->telefone}}</p>
<p>Endereco: {{ $contato->endereco}}</p>
@endcomponent

@component('mail::panel')
<p>Mensagem: <b>{{ $contato->mensagem }}</b></p>
@endcomponent

<br/>
{{ config('app.name') }}
@endcomponent
