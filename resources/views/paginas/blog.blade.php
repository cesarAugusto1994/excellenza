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
        <div class="breadCrumb"><a href="/">Início</a> / <span>Modelos e Instruções</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<div class="listpgWraper">
  <div class="container">
    <!-- Blog start -->
    <div class="row">
      <div class="col-md-8">
        <!-- Blog List start -->
        <div class="blogWraper">
          <ul class="blogList">
            @foreach($posts as $post)
            <li>
              <div class="row">
                <div class="col-md-5">
                  <div class="postimg"><img src="{{ asset('images/blog/1.jpg') }}" alt="Blog Title">
                    <div class="date"> {{ $post->data->format('d M') }}</div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="post-header">
                    <h4><a href="{{ route('blog_detalhes', ['titulo' => str_slug($post->titulo), 'id' => $post->id]) }}">{{ $post->titulo }}</a></h4>
                    <div class="postmeta">Categoria : <a href="/blog?categoria={{ str_slug($post->categ->nome) }}&amp;categoriaId={{ $post->categ->id }}">{{ $post->categ->nome }} </a></div>
                  </div>
                  <p>{!! substr(strip_tags($post->desc1), 0, 120) !!}...</p>
                  <a href="{{ route('blog_detalhes', ['titulo' => str_slug($post->titulo), 'id' => $post->id]) }}" class="readmore">Saber mais</a> </div>
              </div>
            </li>
            @endforeach
          </ul>
        </div>

        <!-- Pagination -->
        <div class="pagiWrap">
          <div class="row text-center">
            {{ $posts->links() }}
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <!-- Side Bar -->
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
                  <li><a href="?categoria={{ str_slug($categoria->nome) }}&amp;categoriaId={{ $categoria->id }}">{{ $categoria->nome }}</a></li>
              @endforeach
            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

@stop
