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
        <h1 class="page-heading">Perguntas e Respostas</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="/">Inicio</a> / <span>Perguntas e Respostas</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<div id="faqs" class="parallax-section">
  <div class="container">
    <div class="faqs">
      <div class="panel-group" id="accordion">

        @foreach($faqs as $titulo => $faq)
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse-{{ $loop->index }}">{{ $titulo }}</a> </h4>
              </div>
              <div id="collapse-{{ $loop->index }}" class="panel-collapse collapse {{ $loop->index == 0 ? 'in' : ''}}">
                <div class="panel-body">{{ $faq }}</div>
              </div>
            </div>
        @endforeach


      </div>
    </div>
  </div>
</div>

@stop
