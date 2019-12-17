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
        <div class="breadCrumb"><a href="/">Início</a> / <span>Nossa Equipe</span></div>
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
      @foreach(session('equipes') as $equipe)

          <div class="col-md-4 col-sm-6" >
            <div class="team-thumb">
              <a href="{{ route('equipe_detalhes', ['nome' => str_slug($equipe->nome), 'id' => $equipe->id]) }}">
                <div class="thumb-image"><img src="{{ asset($equipe->imagem ?? 'images/team/team-img1.jpg') }}" class="animate" alt=""></div>
                <h4>{{ $equipe->nome }}</h4>
              </a>
              <h5>{{ $equipe->cargo }}</h5>

            </div>
          </div>

      @endforeach
    </div>
  </div>
</div>

@stop
