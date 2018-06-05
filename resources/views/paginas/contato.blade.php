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
        <h1 class="page-heading">Contato</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="/">Inicio</a> / <span>Contato</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<div id="map"></div>

<div id="contact" class="parallax-section">
  <div class="container">

    <!-- SECTION TITLE -->
    <div class="section-title">
      <h3>Entre em Contato</h3>
      <p>Perguntas e Respostas</p>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="contact-now">
          <div class="contact"> <span><i class="fa fa-home"></i></span>
            <div class="information"> <strong>Endereço:</strong>
              <p>Rua dos Ginásticos, 126, sala 02, conj. 01 Centro - Joinville - SC</p>
            </div>
          </div>
          <!-- Contact Info -->
          <div class="contact"> <span><i class="fa fa-envelope"></i></span>
            <div class="information"> <strong>Email:</strong>
              <p>contato@excellenza.com.br</p>
            </div>
          </div>
          <!-- Contact Info -->
          <div class="contact"> <span><i class="fa fa-phone"></i></span>
            <div class="information"> <strong>Telefone:</strong>
              <p>+55 (47) 3439-1259</p>
            </div>
          </div>
          <!-- Contact Info -->
        </div>
      </div>
      <div class="col-md-8">
        <!-- CONTACT FORM HERE -->
        <div class="contact-form">
          <form id="contact-form" class="row" action="javascript:void(0);" method="post">
            <div class="col-md-4 col-sm-6">
              <input type="text" class="form-control" name="name" placeholder="Nome">
            </div>
            <div class="col-md-4 col-sm-6">
              <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="col-md-4 col-sm-12">
              <input type="tel" class="form-control" name="phone" placeholder="Telefone">
            </div>
            <div class="col-md-12 col-sm-12">
              <input type="text" class="form-control" name="phone" placeholder="Endereço">
            </div>
            <div class="col-md-12 col-sm-12">
              <textarea class="form-control" rows="5" name="message" placeholder="Mensagem"></textarea>
            </div>
            <div class="col-md-12">
              <button id="submit" type="submit" class="form-control" name="submit">Enviar Mensagem</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@stop

@section('js')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMqMG_n4C0aAi3F8a82Q6s3hxDLrTXxe8&callback=initMap" async defer></script>
    <script src="js/gmap.js"></script>
@stop
