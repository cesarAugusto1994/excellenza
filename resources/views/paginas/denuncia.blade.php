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
        <h1 class="page-heading">Denuncia</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="/">Inicio</a> / <span>Denuncia</span></div>
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

          <p>As informações apresentadas neste canal não dependem de nenhum cadastro prévio,
            visando garantir o anonimato do denunciante.</p>
          <p>Todas as denuncias serão analisadas, no entanto, somente serão tomadas medidas pertinentes
            se acompanhadas de prova documental ou indícios de veracidade.</p>
        </div>

        <div class="col-md-12">
          <div class="contact-form">
              <form id="contact-form" class="row" method="post" action="{{ route('denuncia_store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="col-md-12 col-sm-12">
                  <textarea class="form-control" rows="5" name="mensagem" value="{{ old('mensagem') }}" placeholder="Insira sua mensagem"></textarea>
                </div>
                <div class="col-md-12 col-sm-12">
                  <input type="file" class="form-control" required name="arquivos" placeholder="Arquivo" accept="application/pdf,application/msword,application/msexcel,image/jpeg,text/html,audio/x-waw" required/>
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
