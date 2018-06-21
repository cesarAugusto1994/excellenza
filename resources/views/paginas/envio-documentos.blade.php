@extends('layout.base-page')

@section('content')

@include('layout.includes.menu')

<br/>
<br/>
<br/>
<br/>

<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Remessa Digital</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="/">Inicio</a> / <span>Remessa Digital</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<div class="innerpgWraper">
  <div class="container">
    <div class="about-desc">
      <div class="row">
        <div class="col-md-12">

          @include('flash::message')

          <p>Neste campo é possível enviar a Habilitação de Crédito, a Divergência e os documentos necessários para habilitação na Assembleia Geral de Credores.
          A documentação pode ser anexada neste campo ou enviada por e-mail ao Administrador Judicial: adm.judicial@excellenza.com.br.
          Após o envio, a Excellenza fará a conferência dos documentos e será enviado um e-mail de confirmação com o número de protocolo, no prazo de até 48 (quarenta e oito) horas.
          Caso reste alguma dúvida, o Credor poderá acessar as instruções que se encontram no campo direito desta página.</p>
        </div>
        <div class="col-md-8">

          <div class="contact-form">
          <form id="contact-form" class="row" method="post" action="{{ route('envio_documentos_send') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="col-md-6 col-sm-6">
              <input type="text" class="form-control" name="nome" value="{{ old('nome') }}" placeholder="Nome Credor" required>
            </div>
            <div class="col-md-6 col-sm-6">
              <input type="text" class="form-control" name="cpf" value="{{ old('cpf') }}" placeholder="CPF/CNPJ Credor" required>
            </div>
            <div class="col-md-6 col-sm-6">
              <input type="text" class="form-control" name="nome_devedor" value="{{ old('nome_devedor') }}" placeholder="Nome Devedor" required>
            </div>
            <div class="col-md-6 col-sm-6 has-error {{ $errors->has('cpf_devedor') ? ' has-error' : '' }}">
              <input type="text" class="form-control" name="cpf_devedor" value="{{ old('cpf_devedor') }}" placeholder="CPF/CNPJ Devedor">
              @if ($errors->has('cpf_devedor'))
                <span class="help-block">
                  <strong>{{ $errors->first('cpf_devedor') }}</strong>
                </span>
              @endif
            </div>
            <div class="col-md-4 col-sm-6">
              <input type="text" class="form-control" name="num_processo" value="{{ old('num_processo') }}" placeholder="Nº Processo" required>
            </div>
            <div class="col-md-4 col-sm-6">
              <input type="email" class="form-control" name="email_credor" value="{{ old('email_credor') }}" placeholder="Email Credor">
            </div>
            <div class="col-md-4 col-sm-12">
              <input type="tel" class="form-control" name="telefone_credor" value="{{ old('telefone_credor') }}" placeholder="Telefone Credor">
            </div>
            <div class="col-md-6 col-sm-12">
              <select class="form-control" name="tipo_arquivo" value="{{ old('tipo_arquivo') }}" placeholder="Tipo Arquivo" required>
                  <option value="">Selecione uma opção</option>
                  <option value="H">Habilitação</option>
                  <option value="D">Divergência</option>
              </select>
            </div>
            <div class="col-md-6 col-sm-12">
              <input type="file" class="form-control" name="arquivos" placeholder="Arquivo" required>
            </div>
            <div class="col-md-12 col-sm-12">
              <textarea class="form-control" rows="5" name="mensagem" value="{{ old('mensagem') }}" placeholder="Mensagem"></textarea>
            </div>
            <div class="col-md-12">
              <button id="submit" type="submit" class="form-control" name="submit">Enviar Arquivo</button>
            </div>
          </form>
        </div>

        </div>

        <div class="col-md-4">

          <ul class="howlist">
            <!--step 1-->
            <li>
              <div class="howbox">
                <div class="iconcircle"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></div>
                <h4>INSTRUÇÕES PARA HABILITAÇÃO DE CRÉDITO ADMINISTRATIVA</h4>
                <div class="">
                  <a href="{{ url('/files/habilitacao_credito.pdf') }}">VEJA AS INSTRUÇÕES AQUI</a>
                </div>
              </div>
            </li>
            <!--step 1 end-->

            <!--step 2-->
            <li>
              <div class="howbox">
                <div class="iconcircle"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></div>
                <h4>INSTRUÇÕES PARA DIVERGÊNCIA DE CRÉDITO ADMINISTRATIVA</h4>
                <div class="">
                    <a href="{{ url('/files/divergencia_credito.pdf') }}">VEJA AS INSTRUÇÕES AQUI</a>
                </div>
              </div>
            </li>
            <!--step 2 end-->

            <!--step 2-->
            <li>
              <div class="howbox">
                <div class="iconcircle"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></div>
                <h4>INSTRUÇÕES PARA HABILITAÇÃO DE PROCURADORES NA ASSEMBLEIA DE GERAL CREDORES</h4>
                <div class="">
                <a href="{{ url('/files/assembleia_geral_credores.pdf') }}">VEJA AS INSTRUÇÕES AQUI</a>
                </div>
              </div>
            </li>
            <!--step 2 end-->

          </ul>

        </div>
      </div>
    </div>
  </div>
</div>

@stop
