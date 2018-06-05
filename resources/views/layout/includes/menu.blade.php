<!-- Navigation Section -->
<div class="navbar custom-navbar wow fadeInDown" data-wow-duration="2s" role="navigation" id="header">
  <div class="container">

    <!-- NAVBAR HEADER -->
    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon icon-bar"></span> <span class="icon icon-bar"></span> <span class="icon icon-bar"></span> </button>
      <!-- lOGO TEXT HERE -->
      <!--<a href="index.html" class="navbar-brand"><img src="images/logo.png" class="whtlogo" alt="" /> <img src="images/logo-color.png" class="logocolor" alt=""></a> </div>-->
        <a href="{{ route('home') }}" class="navbar-brand">EXCELLENZA</a>
    </div>

    <!-- NAVIGATION LINKS -->
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="{{ route('home') }}">Inicio </a>
        </li>
        <li><a href="{{ route('sobre_nos') }}">Conheça a Empresa</a></li>

        <li><a href="{{ route('equipe') }}">Equipe</a></li>

        <li><a href="#" class="dropdown">Serviços <span class="caret"></span></a>
          <!-- dropdown start -->
          <ul class="dropdown-menu">
            <li><a href="{{ route('envio_documentos') }}">Envio de Documentos</a></li>
            <li><a href="{{ route('processos') }}">Acompanhamento Processual</a></li>
            <li><a href="{{ route('blog') }}">Modelos e Instruções</a></li>
            <li><a href="{{ route('faqs') }}">Perguntas e Respostas</a></li>
          </ul>
        </li>

        <li><a href="{{ route('contato') }}">Contato</a></li>
        <li><span class="calltxt"><i class="fa fa-phone" aria-hidden="true"></i> +55 (47) 3439-1259</span></li>
      </ul>
    </div>
  </div>
</div>
