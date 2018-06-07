@component('mail::message')
# Envio de Documentos

@component('mail::panel')
<p>Credor: <b>{{ $documento->nome }}</b></p>
<p>CPF: <b>{{ $documento->cpf }}</b></p>
<p>Telefone: {{ $documento->telefone_credor}}</p>
<p>Email: {{ $documento->email_credor}}</p>
@endcomponent

@component('mail::table')
|               |          |
| ------------- | --------:|
| Devedor       | {{ $documento->nome_devedor}}      |
| CPF           | {{ $documento->cpf_devedor ?? 'Não Informado'}}      |
@endcomponent

@component('mail::panel')
#Processo: {{ $documento->num_processo }}
<p>Tipo Arquivo: {{ $documento->tipo_arquivo == 'H' ? 'habilitação' : 'Divergência' }}</p>
<p>Mensagem: {{ $documento->mensagem}}</p>
@endcomponent

<br/>
{{ config('app.name') }}
@endcomponent
