@extends('layout.base')

@section('content')

@include('layout.includes.menu')

@section('css')

  <style type="text/css">

    #home2 {
      background: url('{{ asset("excellenza/excellenza_06.png") }}') no-repeat top;
    }

  </style>

@stop



<!-- Home Section -->
<div id="home2" class="parallax-section">
  <!--     <div class="overlay"></div>-->
  <div class="container">
    <div class="slide-text">
      <h3>O que podemos fazer por você? <a href="" class="typewrite" data-period="2000" data-type='[ "Consultoria Empresarial", "Acessoria Juridica" ]'> <span class="wrap"></span> </a> </h3>
      <!--<h1>{{ session('config')->titulo }}</h1>
      <p>{{ session('config')->mascara }}</p>
      <a href="#about" class="btn btn-default section-btn">Saiba mais</a>-->
    </div>
  </div>
</div>
@if(session('pagina_empresa'))
    <!-- About section -->
    <div class="parallax-section" id="about">
      <div class="container">

        <!-- title start -->
        <div class="section-title "><h3>{{ session('pagina_empresa')->pagina }}</h3></div>

          @if(session('empresa')->bloco1)
              {!! session('empresa')->bloco1 !!}
          @endif

          @if(session('empresa')->bloco2)
              {!! session('empresa')->bloco2 !!}
          @endif

          @if(session('empresa')->bloco3)
              {!! session('empresa')->bloco3 !!}
          @endif

          <!--
          <ul class="howlist">
            <li>
              <div class="howbox">
                <div class="iconcircle"><i class="fa fa-university" aria-hidden="true"></i></div>
                <h4>MISSÃO</h4>
                <p>Auxiliar o Poder Judiciário na prestação da tutela jurisdicional nos momentos de crises empresariais (Recuperação Judicial e Falência), com fim de viabilizar o cumprimento da função social das propriedades empresariais.</p>
              </div>
            </li>
            <li>
              <div class="howbox">
                <div class="iconcircle"><i class="fa fa-handshake-o" aria-hidden="true"></i></div>
                <h4>VISÃO</h4>
                <p>Ser um modelo de excelência no auxílio ao Poder Judiciário, na busca de soluções adequadas para situações de crises empresariais, por meio de aprimoramento constante.</p>
              </div>
            </li>
            <li>
              <div class="howbox">
                <div class="iconcircle"><i class="fa fa-male" aria-hidden="true"></i></div>
                <h4>VALORES</h4>
                <p>Excelência; Aprimoramento Constante; Diligência; Confiança; Valorização Profissional.</p>
              </div>
            </li>
          </ul>
          -->
      </div>
      <div class="clearfix"></div>
    </div>
@endif

<!--
<div class="servicesbox bg1">
  <div class="container">

  </div>
</div>

<div id="practicearea" class="parallax-section">
  <div class="container">
    <div class="section-title">
      <h3>Areas de <span>Atuação</span></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet, massa ac ornare feugiat, nunc dui auctor ipsum, sed posuere eros sapien id quam.</p>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-img"><img src="images/lawyer/1.jpg" class="animate" alt=""></div>
          <h4>Divorce Law</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-img"><img src="images/lawyer/2.jpg" class="animate" alt=""></div>
          <h4>Litigation</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-img"><img src="images/lawyer/3.jpg" class="animate" alt=""></div>
          <h4>Accident Law</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-img"><img src="images/lawyer/4.jpg" class="animate" alt=""></div>
          <h4>Drug Law</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-img"><img src="images/lawyer/5.jpg" class="animate" alt=""></div>
          <h4>Personal Law</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-img"><img src="images/lawyer/6.jpg" class="animate" alt=""></div>
          <h4>Criminal Law</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
        </div>
      </div>
    </div>
  </div>
</div>
-->
<!-- Tagline -->
<div class="servicesbox bg1">
  <div class="container">

  </div>
</div>

<!-- Team Section -->
<div id="team" class="parallax-section">
  <div class="container">

    <!-- Dection Title -->
    <div class="section-title" >
      <h3>{{ session('pagina_clientes')->pagina }}</h3>
      <p>SÓCIOS FUNDADORES E COLABORADORES</p>
    </div>
    <div class="row">
      <!-- team 1 -->
      @foreach(session('equipes') as $equipe)

          <div class="col-md-3 col-sm-6" >
            <div class="team-thumb">
              <a href="{{ route('equipe_detalhes', ['nome' => str_slug($equipe->nome), 'id' => $equipe->id]) }}">
                <div class="thumb-image"><img src="{{ asset($equipe->imagem ?? 'images/team/team-img1.jpg') }}" class="animate" alt=""></div>
                <h4>{{ $equipe->nome }}</h4>
              </a>
              <h5>{{ $equipe->cargo }}</h5>
              <ul class="list-inline social">
                @if($equipe->twiter)<li> <a href="javascript:void(0);" class="bg-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>@endif
                @if($equipe->facebook)<li> <a href="javascript:void(0);" class="bg-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>@endif
                @if($equipe->linkedin)<li> <a target="_blank" href="{{ $equipe->linkedin }}" class="bg-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>@endif
              </ul>
            </div>
          </div>

      @endforeach

    </div>
  </div>
</div>

<!-- Tagline Section -->
<div class="taglinewrap">
  <div class="container">
    <h2>FALE CONOSCO</h2>
    <h3>+55 {{ session('config')->telefone }}</h3>
    <a href="#"><i class="fa fa-phone" aria-hidden="true"></i> Ligue Agora</a> </div>
</div>

<!--
<div id="blog">
  <div class="container">
    <div class="section-title" >
      <h3>Noticias do <span>Blog</span></h3>
      <p>...</p>
    </div>
    <ul class="blogGrid">
      @foreach(session('posts') as $post)
      <li class="item">
        <div class="int">
          <div class="postimg"> <img src="{{ asset('images/team/team-img1.jpg') }}" alt="Titulo do Blog"></div>
          <div class="post-header">
            <div class="date"><i class="fa fa-calendar" aria-hidden="true"></i> {{ $post->data->format('d M Y') }}</div>
            <h4><a href="{{ route('blog_detalhes', ['titulo' => str_slug($post->titulo), 'id' => $post->id]) }}">{{ $post->titulo }}</a></h4>
            <div class="postmeta">Categoria : <a href="#.">{{ $post->categ->nome }} </a></div>
          </div>
          <p>{!! substr(strip_tags($post->desc1), 0, 120) !!}...</p>
          <a href="#." class="readmore">Saber mais</a> </div>
      </li>
      @endforeach
    </ul>
  </div>
</div>
-->
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
          @if(session('config')->endereco)
          <div class="contact"> <span><i class="fa fa-home"></i></span>
            <div class="information"> <strong>Endereço:</strong>
              <p>{{ session('config')->endereco }}</p>
            </div>
          </div>
          @endif
          @if(session('config')->email)
          <!-- Contact Info -->
          <div class="contact"> <span><i class="fa fa-envelope"></i></span>
            <div class="information"> <strong>Email:</strong>
              <p>{{ session('config')->email }}</p>
            </div>
          </div>
          @endif
          @if(session('config')->telefone)
          <!-- Contact Info -->
          <div class="contact"> <span><i class="fa fa-phone"></i></span>
            <div class="information"> <strong>Telefone:</strong>
              <p>+55 {{ session('config')->telefone }}</p>
            </div>
          </div>
          <!-- Contact Info -->
          @endif
        </div>
      </div>
      <div class="col-md-8">
        <!-- CONTACT FORM HERE -->
        <div class="contact-form">
          <form id="contact-form" class="row">
            <div class="col-md-4 col-sm-6">
              <input type="text" class="form-control" name="nomec" placeholder="Nome">
            </div>
            <div class="col-md-4 col-sm-6">
              <input type="email" class="form-control" name="emailc" placeholder="Email">
            </div>
            <div class="col-md-4 col-sm-12">
              <input type="tel" class="form-control" name="telefonec" placeholder="Telefone">
            </div>
            <div class="col-md-12 col-sm-12">
              <input type="text" class="form-control" name="localc" placeholder="Endereço">
            </div>
            <div class="col-md-12 col-sm-12">
              <textarea class="form-control" rows="5" name="mensagemc" placeholder="Mensagem"></textarea>
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

<!-- Clients Logo-->
<div class="our-clients">
  <div class="container">
    <div class="owl-clients">
      <div class="item"> <img src="images/client-logo4.png" alt=""> </div>
      <div class="item"> <img src="images/client-logo.png" alt=""> </div>
      <div class="item"> <img src="images/client-logo2.png" alt=""> </div>
      <div class="item"> <img src="images/client-logo3.png" alt=""> </div>
      <div class="item"> <img src="images/client-logo.png" alt=""> </div>
      <div class="item"> <img src="images/client-logo3.png" alt=""> </div>
      <div class="item"> <img src="images/client-logo2.png" alt=""> </div>
      <div class="item"> <img src="images/client-logo3.png" alt=""> </div>
      <div class="item"> <img src="images/client-logo.png" alt=""> </div>
      <div class="item"> <img src="images/client-logo3.png" alt=""> </div>
      <div class="item"> <img src="images/client-logo2.png" alt=""> </div>
    </div>
  </div>
</div>
<!-- Clients Logo end-->

</div>

@stop

@section('js')

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMqMG_n4C0aAi3F8a82Q6s3hxDLrTXxe8&callback=initMap" async defer></script>
    <script src="js/gmap.js"></script>

@stop
