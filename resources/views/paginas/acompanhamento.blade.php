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
        <h1 class="page-heading">Acompanhamento Processual</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="/">Início</a> / <span>Acompanhamento Processual</span></div>
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
          <p>
              Disponibilizamos os arquivos abaixo, verifique!
          </p>

          <ul class="howlist">
            <!--step 1-->
            <li>
              <div class="howbox">
                <div class="iconcircle"><i class="fa fa-cloud-download" aria-hidden="true"></i></div>
                <h4>Processo 5454845645</h4>
                <p>Clique para baixar</p>
              </div>
            </li>

          </ul>


        </div>

      </div>
    </div>
  </div>
</div>

@stop
