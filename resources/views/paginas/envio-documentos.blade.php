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
        <h1 class="page-heading">Envio de Documentos</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="/">Inicio</a> / <span>Envio de Documentos</span></div>
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
          <p>Neste campo é possível enviar a Habilitação de Crédito, a Divergência e os documentos necessários para habilitação na Assembleia Geral de Credores.
          A documentação pode ser anexada neste campo ou enviada por e-mail ao Administrador Judicial: adm.judicial@excellenza.com.br.
          Após o envio, a Excellenza fará a conferência dos documentos e será enviado um e-mail de confirmação com o número de protocolo, no prazo de até 48 (quarenta e oito) horas.
          Caso reste alguma dúvida, o Credor poderá acessar as instruções que se encontram no campo direito desta página.</p>
        </div>
        <div class="col-md-12">

          <div class="contact-form">
          <form id="contact-form" class="row">
            <div class="col-md-6 col-sm-6">
              <input type="text" class="form-control" name="name" placeholder="Nome Credor">
            </div>
            <div class="col-md-6 col-sm-6">
              <input type="email" class="form-control" name="email" placeholder="CPF/CNPJ Credor">
            </div>
            <div class="col-md-6 col-sm-6">
              <input type="text" class="form-control" name="name" placeholder="Nome Devedor">
            </div>
            <div class="col-md-6 col-sm-6">
              <input type="email" class="form-control" name="email" placeholder="CPF/CNPJ Devedor">
            </div>
            <div class="col-md-4 col-sm-6">
              <input type="email" class="form-control" name="email" placeholder="Nº Processo">
            </div>
            <div class="col-md-4 col-sm-6">
              <input type="email" class="form-control" name="email" placeholder="Email Credor">
            </div>
            <div class="col-md-4 col-sm-12">
              <input type="tel" class="form-control" name="phone" placeholder="Telefone Credor">
            </div>
            <div class="col-md-6 col-sm-12">
              <input type="text" class="form-control" name="phone" placeholder="Tipo Arquivo">
            </div>
            <div class="col-md-6 col-sm-12">
              <input type="file" class="form-control" name="phone" placeholder="Arquivo">
            </div>
            <div class="col-md-12 col-sm-12">
              <textarea class="form-control" rows="5" name="message" placeholder="Message"></textarea>
            </div>
            <div class="col-md-12">
              <button id="submit" type="submit" class="form-control" name="submit">Enviar Arquivo</button>
            </div>
          </form>
        </div>

        </div>
      </div>
    </div>
  </div>
</div>

@stop
