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
        <h1 class="page-heading">Nossa Equipe</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="/">Inicio</a> / <span>Nossa Equipe</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<!-- Team Section -->
<div id="team" class="parallax-section">
  <div class="container">

    <!-- Dection Title -->

    <div class="row">
      <!-- team 1 -->
      <div class="col-md-3 col-sm-6" >
        <div class="team-thumb">
          <div class="thumb-image"><img src="images/team/team-img1.jpg" class="animate" alt=""></div>
          <h4>JOSE MAURO CIDRAL</h4>
          <h5>Personal Lawyer</h5>
          <ul class="list-inline social">
            <li> <a href="javascript:void(0);" class="bg-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
            <li> <a href="javascript:void(0);" class="bg-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
            <li> <a href="javascript:void(0);" class="bg-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
          </ul>
        </div>
      </div>

      <!-- team 2 -->
      <div class="col-md-3 col-sm-6" >
        <div class="team-thumb">
          <div class="thumb-image"><img src="images/team/team-img2.jpg" class="animate" alt=""></div>
          <h4>JOSÉ EDILSON DA CUNHA FONTENELLE NETO</h4>
          <h5>Criminal Lawyer</h5>
          <ul class="list-inline social">
            <li> <a href="javascript:void(0);" class="bg-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
            <li> <a href="javascript:void(0);" class="bg-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
            <li> <a href="javascript:void(0);" class="bg-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
          </ul>
        </div>
      </div>

      <!-- team 3 -->
      <div class="col-md-3 col-sm-6" >
        <div class="team-thumb">
          <div class="thumb-image"><img src="images/team/team-img3.jpg" class="animate" alt=""></div>
          <h4>LUCAS RAFAEL GONÇALVES CORRÊA CIDRAL</h4>
          <h5>Family Lawyer</h5>
          <ul class="list-inline social">
            <li> <a href="javascript:void(0);" class="bg-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
            <li> <a href="javascript:void(0);" class="bg-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
            <li> <a href="javascript:void(0);" class="bg-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
          </ul>
        </div>
      </div>

      <!-- team 4 -->
      <div class="col-md-3 col-sm-6" >
        <div class="team-thumb">
          <div class="thumb-image"><img src="images/team/team-img4.jpg" class="animate" alt=""></div>
          <h4>LUIS MÁRIO BAUMER</h4>
          <h5>Employment Lawyer</h5>
          <ul class="list-inline social">
            <li> <a href="javascript:void(0);" class="bg-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
            <li> <a href="javascript:void(0);" class="bg-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
            <li> <a href="javascript:void(0);" class="bg-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

@stop
