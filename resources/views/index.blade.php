@extends('layout.base')

@section('content')

<!-- PRE LOADER -->
<div class="preloader">
  <div class="cssload-dots">
    <div class="cssload-dot"></div>
    <div class="cssload-dot"></div>
    <div class="cssload-dot"></div>
    <div class="cssload-dot"></div>
    <div class="cssload-dot"></div>
  </div>
</div>

<!-- Navigation Section -->
<div class="navbar custom-navbar wow fadeInDown" data-wow-duration="2s" role="navigation" id="header">
  <div class="container">

    <!-- NAVBAR HEADER -->
    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon icon-bar"></span> <span class="icon icon-bar"></span> <span class="icon icon-bar"></span> </button>
      <!-- lOGO TEXT HERE -->
      <!--<a href="index.html" class="navbar-brand"><img src="images/logo.png" class="whtlogo" alt="" /> <img src="images/logo-color.png" class="logocolor" alt=""></a> </div>-->

        <a href="index.html" class="navbar-brand">EXCELLENZA</a>
    </div>

    <!-- NAVIGATION LINKS -->
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="{{ route('home') }}">Inicio </a>
        </li>
        <li><a href="{{ route('sobre_nos') }}">Conheça a Empresa</a></li>

        <li><a href="{{ route('sobre_nos') }}">Equipe</a></li>

        <li><a href="#" class="dropdown">Serviços <span class="caret"></span></a>
          <!-- dropdown start -->
          <ul class="dropdown-menu">
            <li><a href="blog-list.html">Envio de Documentos</a></li>
            <li><a href="blog-list2.html">Acompanhamento Processual</a></li>
            <li><a href="blog-detail.html">Modelos e Instruções</a></li>
            <li><a href="blog-detail.html">Perguntas e Respostas</a></li>
          </ul>
        </li>

        <li><a href="services.html">Blog</a></li>

        <li><a href="{{ route('contato') }}">Contato</a></li>
        <li><span class="calltxt"><i class="fa fa-phone" aria-hidden="true"></i> +55 (47) 3439-1259</span></li>
      </ul>
    </div>
  </div>
</div>

<!-- Home Section -->
<div id="home2" class="parallax-section">
  <!--     <div class="overlay"></div>-->
  <div class="container">
    <div class="slide-text">
      <h3>O que podemos fazer? <a href="" class="typewrite" data-period="2000" data-type='[ "Consultoria Empresarial", "Acessoria Juridica" ]'> <span class="wrap"></span> </a> </h3>
      <h1>EXCELLENZA</h1>
      <p>Consultoria Empresarial</p>
      <a href="#about" class="btn btn-default section-btn">Saiba mais</a> </div>
  </div>
</div>

<!-- About section -->
<div class="parallax-section" id="about">
  <div class="container">

    <!-- title start -->
    <div class="section-title "><h3>Bem vindo à <span>Excellenza</span></h3></div>

      <p>
          A Excellenza Consultoria Empresarial nasceu da aliança fiel dos sócios José Mauro Cidral, José E. da C. Fontenelle Neto e Lucas R. G. Corrêa Cidral, que, ao vislumbrarem a necessidade de muitas empresas, de recorrerem ao Poder Judiciário para garantir a manutenção de suas atividades ou mesmo o seu encerramento, se depararam com uma carência no que tange a empresas atuantes na seara das crises empresariais.
      </p>
      <p>
        Dessa forma, foi sob a união dos conhecimentos do Sr. José Cidral, que possui MBA em Direito Empresarial e Tributário e foi responsável pela privatização, estruturação e abertura de capital – por meio de seu IPO (ingresso no mercado de balcões) – da empresa ALL – América Latina Logística, com os conhecimentos do Sr. José Neto, que possui pós-graduação em Direito Penal e Criminologia, além de ser mestrando em Ciência Jurídica pela UNIVALI e em Direito da União Europeia pela UMINHO/Portugal e professor Universitário, e do Sr. Lucas Cidral, que possui MBA Executivo em Direito Empresarial e Tributário que desde a graduação atua diretamente na área falimentar e empresarial, que nasceu a Excellenza, uma empresa que prima, sobretudo, pela excelência no exercício de seu mister.
        Assim, a empresa, que tem sede em Joinville, nasce com a ideia de buscar auxiliar o Poder Judiciário no seu mister de tutelar as relações jurídicas e os princípios da função social da empresa e da propriedade, por meio de nomeações para cargo de Administrador Judicial.
      </p>
      <br/>
    <!-- title end -->

    <ul class="howlist">
      <!--step 1-->
      <li>
        <div class="howbox">
          <div class="iconcircle"><i class="fa fa-university" aria-hidden="true"></i></div>
          <h4>MISSÃO</h4>
          <p>Auxiliar o Poder Judiciário na prestação da tutela jurisdicional nos momentos de crises empresariais (Recuperação Judicial e Falência), com fim de viabilizar o cumprimento da função social das propriedades empresariais.</p>
        </div>
      </li>
      <!--step 1 end-->

      <!--step 2-->
      <li>
        <div class="howbox">
          <div class="iconcircle"><i class="fa fa-handshake-o" aria-hidden="true"></i></div>
          <h4>VISÃO</h4>
          <p>Ser um modelo de excelência no auxílio ao Poder Judiciário, na busca de soluções adequadas para situações de crises empresariais, por meio de aprimoramento constante.</p>
        </div>
      </li>
      <!--step 2 end-->

      <!--step 3-->
      <li>
        <div class="howbox">
          <div class="iconcircle"><i class="fa fa-male" aria-hidden="true"></i></div>
          <h4>VALORES</h4>
          <p>Excelência; Aprimoramento Constante; Diligência; Confiança; Valorização Profissional.</p>
        </div>
      </li>
      <!--step 3 end-->
    </ul>
  </div>
  <div class="clearfix"></div>
</div>

<!-- Counter Section -->
<div id="counter">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
        <div class="counterbox">
          <div class="counter-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
          <span class="counter-number" data-from="1" data-to="999" data-speed="1000"></span> <span class="counter-text">Trusted Client</span> </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
        <div class="counterbox">
          <div class="counter-icon"><i class="fa fa-university" aria-hidden="true"></i></div>
          <span class="counter-number" data-from="1" data-to="1512" data-speed="2000"></span> <span class="counter-text">Success Cases</span> </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
        <div class="counterbox">
          <div class="counter-icon"><i class="fa fa-laptop" aria-hidden="true"></i></div>
          <span class="counter-number" data-from="1" data-to="1756" data-speed="3000"></span> <span class="counter-text">Case Study</span> </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
        <div class="counterbox">
          <div class="counter-icon"><i class="fa fa-trophy" aria-hidden="true"></i></div>
          <span class="counter-number" data-from="1" data-to="101" data-speed="4000"></span> <span class="counter-text">Awards</span> </div>
      </div>
    </div>
  </div>
</div>

<!-- Practice Areas section -->
<div id="practicearea" class="parallax-section">
  <div class="container">
    <!-- Section Title -->
    <div class="section-title">
      <h3>Areas de <span>Atuação</span></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet, massa ac ornare feugiat, nunc dui auctor ipsum, sed posuere eros sapien id quam.</p>
    </div>
    <div class="row">
      <!-- Service 1 -->
      <div class="col-md-4 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-img"><img src="images/lawyer/1.jpg" class="animate" alt=""></div>
          <h4>Divorce Law</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
        </div>
      </div>

      <!-- Service 2 -->
      <div class="col-md-4 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-img"><img src="images/lawyer/2.jpg" class="animate" alt=""></div>
          <h4>Litigation</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
        </div>
      </div>

      <!-- Service 3 -->
      <div class="col-md-4 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-img"><img src="images/lawyer/3.jpg" class="animate" alt=""></div>
          <h4>Accident Law</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
        </div>
      </div>

      <!-- Service 4 -->
      <div class="col-md-4 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-img"><img src="images/lawyer/4.jpg" class="animate" alt=""></div>
          <h4>Drug Law</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
        </div>
      </div>

      <!-- Service 5 -->
      <div class="col-md-4 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-img"><img src="images/lawyer/5.jpg" class="animate" alt=""></div>
          <h4>Personal Law</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
        </div>
      </div>

      <!-- Service 6 -->
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

<!-- Tagline -->
<div class="servicesbox bg1">
  <div class="container">
    <div class="section-title">
      <h3>Personal Injury Lawyers</h3>
    </div>
    <div class="ctoggle">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tincidunt mauris est, in faucibus dui viverra et. Aliquam finibus vestibulum elit, at pharetra nisl congue vel. Nunc pretium posuere justo pretium fringilla. Sed volutpat risus non rhoncus convallis. Sed fermentum est at hendrerit pellentesque. Mauris nec leo euismod, sagittis mauris in, posuere est...</p>
      <a href="#" class="readmore">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
  </div>
</div>

<!-- Team Section -->
<div id="team" class="parallax-section">
  <div class="container">

    <!-- Dection Title -->
    <div class="section-title" >
      <h3>Nossa <span>Equipe</span></h3>
      <p>SÓCIOS FUNDADORES</p>
    </div>
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

<!-- Tagline Section -->
<div class="taglinewrap">
  <div class="container">
    <h2>Fale Conosco</h2>
    <h3>+55 (47) 3439-1259</h3>
    <p>Sed sed neque laoreet, rhoncus libero id, pharetra est. Sed ut neque est. Maecenas et est sagittis, mollis risus dignissim, mattis dolor. </p>
    <a href="#"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us Now</a> </div>
</div>

<!-- Blog Section -->
<div id="blog">
  <div class="container">
    <!-- SECTION TITLE -->
    <div class="section-title" >
      <h3>Latest From <span>Blog</span></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <ul class="blogGrid">
      <li class="item">
        <div class="int">
          <!-- Blog Image -->
          <div class="postimg"> <img src="images/blog/1.jpg" alt="Blog Title"></div>
          <!-- Blog info -->
          <div class="post-header">
            <div class="date"><i class="fa fa-calendar" aria-hidden="true"></i> Sep 25, 2017</div>
            <h4><a href="#.">Duis ultricies aliquet mauris</a></h4>
            <div class="postmeta">By : <span>Jhon Doe </span> Category : <a href="#.">Job Search </a></div>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus maecenas quis sem ...</p>
          <a href="#." class="readmore">Read More</a> </div>
      </li>
      <li class="item">
        <div class="int">
          <!-- Blog Image -->
          <div class="postimg"> <img src="images/blog/2.jpg" alt="Blog Title"></div>
          <!-- Blog info -->
          <div class="post-header">
            <div class="date"><i class="fa fa-calendar" aria-hidden="true"></i> Sep 25, 2017</div>
            <h4><a href="#.">Duis ultricies aliquet mauris</a></h4>
            <div class="postmeta">By : <span>Jhon Doe </span> Category : <a href="#.">Job Search </a></div>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus maecenas quis sem ...</p>
          <a href="#." class="readmore">Read More</a> </div>
      </li>
      <li class="item">
        <div class="int">
          <!-- Blog Image -->
          <div class="postimg"> <img src="images/blog/3.jpg" alt="Blog Title"></div>
          <!-- Blog info -->
          <div class="post-header">
            <div class="date"><i class="fa fa-calendar" aria-hidden="true"></i> Sep 25, 2017</div>
            <h4><a href="#.">Duis ultricies aliquet mauris</a></h4>
            <div class="postmeta">By : <span>Jhon Doe </span> Category : <a href="#.">Job Search </a></div>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus maecenas quis sem ...</p>
          <a href="#." class="readmore">Read More</a> </div>
      </li>
      <li class="item">
        <div class="int">
          <!-- Blog Image -->
          <div class="postimg"> <img src="images/blog/4.jpg" alt="Blog Title"></div>
          <!-- Blog info -->
          <div class="post-header">
            <div class="date"><i class="fa fa-calendar" aria-hidden="true"></i> Sep 25, 2017</div>
            <h4><a href="#.">Duis ultricies aliquet mauris</a></h4>
            <div class="postmeta">By : <span>Jhon Doe </span> Category : <a href="#.">Job Search </a></div>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus maecenas quis sem ...</p>
          <a href="#." class="readmore">Read More</a> </div>
      </li>
    </ul>
  </div>
</div>

<div id="map"></div>

<div id="contact" class="parallax-section">
  <div class="container">

    <!-- SECTION TITLE -->
    <div class="section-title">
      <h3>Nosso Endereço</h3>
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
          <form id="contact-form" class="row">
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

<!-- Footer Section -->
<div class="site-footer">
  <!-- Footer Top start -->
  <div class="footer-top-area">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="footer-lwf">
            <h3 class="footer-logo"><img src="images/logo.png" alt="LawFirm"></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet, massa ac ornare feugiat, nunc dui auctor ipsum, sed posuere eros sapien id quam. </p>
            <ul class="footer-contact">
              <li><i class="fa fa-phone"></i> +1 1234 456789</li>
              <li><i class="fa fa-envelope"></i> info@companyname.com</li>
              <li><i class="fa fa-fax"></i> +1 123 123456</li>
            </ul>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="footer-lwf footer-menu">
            <h3 class="footer-lwf-title">Quick Links</h3>
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="about.html">About Company</a></li>
              <li><a href="services.html">Our Services</a></li>
              <li><a href="blog-list.html">Blog</a></li>
              <li><a href="contact-us.html">Contact Us</a></li>
              <li><a href="gallery.html">Gallery</a></li>
            </ul>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="footer-lwf footer-menu">
            <h3 class="footer-lwf-title">About Lawyer</h3>
            <ul>
              <li><a href="practice-areas.html">Practice Areas List</a></li>
              <li><a href="practice-area-detail.html">Practice Areas Detail</a></li>
              <li><a href="attorney-list.html">Attorney List</a></li>
              <li><a href="attorney.html">Attorney Detail</a></li>
              <li><a href="faq.html">FAQs</a></li>
              <li><a href="testimonials.html">Testimonials</a></li>
            </ul>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="footer-lwf">
            <h3 class="footer-lwf-title">Opening Hours</h3>
            <ul class="open-hours">
              <li><span>Segunda à sexta-feira:</span> <span class="text-right"> das 8h às 18h.</span></li>
              <li><span>Sabado e Domingo:</span> <span class="text-right">Fechado</span></li>
            </ul>
            <div class="newsletter">
              <form>
                <input type="text" placeholder="Informe o seu email" value="" class="news-input">
                <button type="submit" value="" class="news-btn"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer top end -->

  <!-- copyright start -->
  <div class="footer-bottom-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-md-6">Copyright &copy; 2017 <span>LawFirm</span>. All Rights Reserved</div>
        <div class="col-md-12 col-md-6 text-right">Design &amp; Development By: <a href="http://sharjeelanjum.com/" target="_blank">Sharjeel Anjum</a></div>
      </div>
    </div>
  </div>
  <!-- copyright end -->
</div>

@stop
