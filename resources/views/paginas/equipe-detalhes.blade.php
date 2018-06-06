@extends('layout.base-page')

@section('content')

@include('layout.includes.menu')

<br/>
<br/>
<br/>
<br/>

<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">{{ $equipe->nome }}</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="/">Inicio</a> / <a href="{{ route('equipe') }}">Equipe</a></div>
      </div>
    </div>
  </div>
</div>

<div class="parallax-section">
  <div class="container">
    <div class="attorneytop">
      <div class="row">
        <div class="col-md-4 col-sm-4"><img src="{{ asset($equipe->imagem ?? 'images/team/team-img1.jpg') }}" class="lawimg" alt=""></div>
        <div class="col-md-8 col-sm-8">
          <h2>{{ $equipe->nome }}</h2>
          <h3>{{ $equipe->cargo }}</h3>
          <!--
          <ul class="address">
            <li><i class="fa fa-phone"></i>+1 123 46578</li>
            <li><i class="fa fa-envelope-o"></i><a href="#">jhon@lawfirm.com</a></li>
            <li><i class="fa fa-skype"></i>jhon.attorney</li>
            <li><i class="fa fa-globe"></i><a href="#">www.lawfirm.com</a></li>
          </ul>
          -->
          <ul class="list-inline social">
            @if($equipe->twiter)<li> <a href="javascript:void(0);" class="bg-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>@endif
            @if($equipe->facebook)<li> <a href="javascript:void(0);" class="bg-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>@endif
            @if($equipe->linkedin)<li> <a target="_blank" href="{{ $equipe->linkedin }}" class="bg-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>@endif
          </ul>
        </div>
      </div>
    </div>
    <div class="attorneydetail">
      <h1>Perfil Profissional</h1>
      {!! $equipe->descricao !!}
    </div>
    <!--
    <div class="attorneyContact">
      <h3>Contact Jhon</h3>
      <div class="contact-form">
        <form id="contact-form" class="row">
          <div class="col-md-4 col-sm-6">
            <input type="text" class="form-control" name="name" placeholder="Name">
          </div>
          <div class="col-md-4 col-sm-6">
            <input type="email" class="form-control" name="email" placeholder="Email">
          </div>
          <div class="col-md-4 col-sm-12">
            <input type="tel" class="form-control" name="phone" placeholder="Phone">
          </div>
          <div class="col-md-12 col-sm-12">
            <input type="text" class="form-control" name="phone" placeholder="Address">
          </div>
          <div class="col-md-12 col-sm-12">
            <textarea class="form-control" rows="5" name="message" placeholder="Message"></textarea>
          </div>
          <div class="col-md-12">
            <button id="submit" type="submit" class="form-control" name="submit">Send Message</button>
          </div>
        </form>
      </div>
    </div>
    -->
  </div>
</div>

@stop
