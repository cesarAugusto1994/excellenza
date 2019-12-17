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
        <h1 class="page-heading">{{ $post->titulo }}</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="/">Início</a> / <span>Modelos e Instruções</span></div>
      </div>
    </div>
  </div>
</div>

<div class="listpgWraper">
  <div class="container">
    <!-- Blog start -->
    <div class="row">
      <div class="col-md-8">
        <!-- Blog List start -->
        <div class="blogWraper">
          <div class="blogList blogdetailbox">
            <div class="postimg"><img src="{{ asset('images/blog/large-1.jpg') }}" alt="Blog Title">
              <div class="date"> {{ $post->data->format('d M') }}</div>
            </div>
            <div class="post-header margin-top30">
              <h4><a href="#.">{{ $post->titulo }}</a></h4>
              <div class="postmeta"> Categoria: <a href="#.">{{ $post->categ->nome }} </a></div>
            </div>
            {!! $post->desc1 !!}
          </div>
          <!--
          <div class="comments margin-top30">
            <h4>Comentários</h4>
            <ul class="media-list">
              <li class="media">
                <div class="media-left"> <a href="#."> <img class="media-object img-responsive" src="images/coment-avatar-1.jpg" alt=""> <br>
                  </a> </div>
                <div class="media-body">
                  <h6 class="media-heading">Larsen Mortin<span> Dec 10, 2016 - 12.00 AM</span></h6>
                  <p>You would see the biggest gift would be from me and the card attached would say thank you for being a friend! Doin' it our way. Nothin's gonna turn us back now. Straight ahead. </p>
                  <a href="#." class="btn btn-yellow raply"><i class="fa fa-reply" aria-hidden="true"></i></a> </div>
              </li>
            </ul>

            <div class="commnetsfrm">
              <h4>Deixe o seu comentário</h4>
              <form>
                <ul class="row">
                  <li class="col-sm-6">
                    <label>
                      <input type="text" class="form-control" name="name" placeholder="Nome">
                    </label>
                  </li>
                  <li class="col-sm-6">
                    <label>
                      <input type="text" class="form-control" name="name" placeholder="Email">
                    </label>
                  </li>
                  <li class="col-sm-12">
                    <label>
                      <textarea class="form-control" placeholder="Mensagem"></textarea>
                    </label>
                  </li>
                  <li class="col-sm-12">
                    <button type="submit" class="btn margin-top-20">Enviar</button>
                  </li>
                </ul>
              </form>
            </div>
          </div>-->
        </div>

      </div>
      <div class="col-md-4">
        <div class="sidebar">
          <!-- Search -->
          <div class="widget">
            <h5 class="widget-title">Pesquisar</h5>
            <div class="search">
              <form method="get" action="?">
                <input type="text" name="search" class="form-control" placeholder="Digite para pesquisar">
                <button type="submit" class="btn"><i class="fa fa-search"></i></button>
              </form>
            </div>
          </div>
          <!-- Categories -->
          <div class="widget">
            <h5 class="widget-title">Categories</h5>
            <ul class="categories">
              @foreach(session('categorias') as $categoria)
                  <li><a href="/blog?categoria={{ str_slug($categoria->nome) }}&amp;categoriaId={{ $categoria->id }}">{{ $categoria->nome }}</a></li>
              @endforeach
            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

@stop
