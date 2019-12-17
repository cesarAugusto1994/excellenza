<!-- Footer Section -->
<div class="site-footer">
  <!-- Footer Top start -->
  <div class="footer-top-area">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="footer-lwf">
            <h3 class="footer-logo">EXCELLENZA</h3>
            <ul class="footer-contact">
              <li><i class="fa fa-phone"></i> +55 {{ session('config')->telefone }}</li>
              <li><i class="fa fa-phone"></i> +55 (47) 9 9228-0772</li>
              <li><i class="fa fa-facebook"></i> <a href="https://www.facebook.com/ExcellenzaConsultoriaEmpresarial">Excellenza Consultoria Empresarial</a></li>
              <li><i class="fa fa-envelope"></i> adm.judicial@excellenza.com.br</li>
              <li><i class="fa fa-map-marker"></i>{{ session('config')->endereco }}</li>
            </ul>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="footer-lwf footer-menu">
            <h3 class="footer-lwf-title">Links</h3>
            <ul>
              <li><a href="{{ route('home') }}">Início</a></li>
              <li><a href="{{ route('sobre_nos') }}">Conheça a Empresa</a></li>
              <li><a href="{{ route('equipe') }}">Equipe</a></li>
              <li><a href="{{ route('modelos') }}">Modelos e Instruções</a></li>
              <li><a href="{{ route('contato') }}">Contato</a></li>
            </ul>
          </div>
        </div>
        <!--<div class="col-xs-12 col-sm-6 col-md-3">
          <div class="footer-lwf footer-menu">
            <h3 class="footer-lwf-title">Posts Recentes</h3>
            <ul>
              @foreach(session('posts') as $post)
                  <li><a href="{{ route('blog_detalhes', ['titulo' => str_slug($post->titulo), 'id' => $post->id]) }}">{{ $post->titulo }}</a></li>
              @endforeach
            </ul>
          </div>
        </div>
        -->
        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="footer-lwf">
            <h3 class="footer-lwf-title">Horário de Funcionamento</h3>
            <ul class="open-hours">
              <li><span>Segunda à Sexta:</span> <span class="text-right"> das 9h às 18h.</span></li>
              <li><span>Sábado e Domingo:</span> <span class="text-right">Fechado</span></li>
            </ul>
            <!--<div class="newsletter">
              <form>
                <input type="text" placeholder="Informe o seu email" value="" class="news-input">
                <button type="submit" value="" class="news-btn"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
              </form>
            </div>-->
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
        <div class="col-md-12 col-md-6">Copyright &copy; 2018 <span>Excellenza Acessoria Empresarial</span>. Direitos Reservados.</div>
        <div class="col-md-12 col-md-6 text-right">Desenvolvido para: <a href="http://nilux.com.br/" target="_blank">Nilux Tecnologia</a></div>
      </div>
    </div>
  </div>
  <!-- copyright end -->

  </div>
