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
        <h1 class="page-heading">Conheça a Empresa</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="/">Início</a> / <span>Conheça a Empresa</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<div class="innerpgWraper">
  <div class="container">
    <div class="about-desc">
      <div class="row">
        <div class="col-md-12">
          <p>
              A Excellenza Consultoria Empresarial nasceu da aliança fiel dos sócios José Mauro Cidral, José E. da C. Fontenelle Neto e Lucas R. G. Corrêa Cidral, que, ao vislumbrarem a necessidade de muitas empresas, de recorrerem ao Poder Judiciário para garantir a manutenção de suas atividades ou mesmo o seu encerramento, se depararam com uma carência no que tange a empresas atuantes na seara das crises empresariais.
          </p>

          <p>
            Dessa forma, foi sob a união dos conhecimentos do Sr. José Cidral, que possui MBA em Direito Empresarial e Tributário e foi responsável pela privatização, estruturação e abertura de capital – por meio de seu IPO (ingresso no mercado de balcões) – da empresa ALL – América Latina Logística, com os conhecimentos do Sr. José Neto, que possui pós-graduação em Direito Penal e Criminologia, além de ser mestrando em Ciência Jurídica pela UNIVALI e em Direito da União Europeia pela UMINHO/Portugal e professor Universitário, e do Sr. Lucas Cidral, que possui MBA Executivo em Direito Empresarial e Tributário que desde a graduação atua diretamente na área falimentar e empresarial, que nasceu a Excellenza, uma empresa que prima, sobretudo, pela excelência no exercício de seu mister.
Assim, a empresa, que tem sede em Joinville, nasce com a ideia de buscar auxiliar o Poder Judiciário no seu mister de tutelar as relações jurídicas e os princípios da função social da empresa e da propriedade, por meio de nomeações para cargo de Administrador Judicial.
          </p>

          <br />

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

      </div>
    </div>
  </div>
</div>

@stop
