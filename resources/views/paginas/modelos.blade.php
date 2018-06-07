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
        <h1 class="page-heading">Modelos e Instruções</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="/">Inicio</a> / <span>Modelos e Instruções</span></div>
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

          <ul class="howlist">
            <!--step 1-->
            <li>
              <div class="howbox">
                <div class="iconcircle"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></div>
                <h4>Modelo Habilitação de Crédito</h4>
                <p><a target="_blank" href="{{ url('/files/modelo_habilitacao_credito.doc') }}">Clique para baixar</a></p>
              </div>
            </li>
            <!--step 1 end-->

            <!--step 2-->
            <li>
              <div class="howbox">
                <div class="iconcircle"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></div>
                <h4>Modelo Divergência de Crédito</h4>
                <p><a target="_blank" href="{{ url('/files/modelo_divergencia_credito.doc') }}">Clique para baixar</a></p>
              </div>
            </li>
            <!--step 2 end-->

            <!--step 3-->
            <li>
              <div class="howbox">
                <div class="iconcircle"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></div>
                <h4>Habilitação de Procuradores</h4>
                <p><a target="_blank" href="{{ url('/files/habilitacao_procuradores.pdf') }}">Clique para baixar</a></p>
              </div>
            </li>
            <!--step 3 end-->
          </ul>

        </div>

      </div>
    </div>
  </div>
</div>

@stop
