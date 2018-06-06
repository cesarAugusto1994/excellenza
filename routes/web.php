<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('config')->group(function() {
    Route::get('/', function () {

        $value = session('config');

      #dd();

        return view('index');
    })->name('home');

    Route::get('/sobre-nos', function () {
        return view('paginas/empresa');
    })->name('sobre_nos');

    Route::get('/equipe', function () {
        return view('paginas/equipe');
    })->name('equipe');

    Route::get('/equipe/{nome}/{id}', function ($titulo, $id) {
        $equipe = \App\Models\Equipe::findOrFail($id);
        return view('paginas/equipe-detalhes', compact('equipe'));
    })->name('equipe_detalhes');

    Route::get('/contato', function () {
        return view('paginas/contato');
    })->name('contato');

    Route::get('/envio-documentos', function () {
        return view('paginas/envio-documentos');
    })->name('envio_documentos');

    Route::get('/processos', function () {
        return view('paginas/acompanhamento');
    })->name('processos');

    Route::get('/blog', function (\Illuminate\Http\Request $request) {

        $posts = \App\Models\Post::orderByDesc('id');

        if($request->get('categoriaId')) {
            $posts->where('categoria', $request->get('categoriaId'));
        }

        if($request->get('search')) {
            $filtro = $request->get('search');
            $posts->where('titulo', 'like', "%$filtro%");
            #$posts->where('desc1', 'like', $request->get('search'));
        }

        $posts = $posts->paginate(5);

        return view('paginas/blog', compact('posts'));

    })->name('blog');

    Route::get('/blog/{titulo}/{id}', function ($titulo, $id) {

        $post = \App\Models\Post::findOrFail($id);

        return view('paginas/blog-detalhes', compact('post'));

    })->name('blog_detalhes');


    Route::get('/faqs', function () {

        $faqs = [
          'O que é a Recuperação Judicial?' => 'A Recuperação Judicial é um instituto criado pela Lei nº 11.101/2005, que tem como intento viabilizar e regularizar a situação financeira de uma empresa, que ultrapassa uma crise econômico-financeira superável, disponibilizando opções de pagamento, dilação de prazos, formas de alienação de bens, tendo como princípio basilar o da preservação da empresa.',
          'O que é o Princípio da Preservação da Empresa?' => 'O princípio da preservação da empresa busca evitar que a empresa sofra com uma crise fatal, que poderia acarretar o fim de empregos, desabastecimento de produtos e serviços e diminuição na arrecadação de impostos. Este princípio está disposto nos artigos 170, II e 174 da Constituição Federal e no artigo 47 da Lei nº 11.101/2205.',
          'Quais créditos estão sujeitos à Recuperação Judicial?' => 'De acordo com o art. 49 da Lei nº 11.101/2005, estão sujeitos à recuperação judicial todos os créditos existentes na data do pedido, ainda que não vencidos.',
          'O que e quais são os créditos extraconcursais?' => 'Os créditos extraconcursais são todos aqueles que não estão sujeitos a Recuperação Judicial, como por exemplo:
              a) obrigações resultantes de atos jurídicos válidos praticados durante a recuperação judicial;
              b) aqueles que o credor titular da posição de proprietário fiduciário de bens móveis ou imóveis, de arrendador mercantil, de proprietário ou promitente vendedor de imóvel cujos respectivos contratos contenham cláusula de irrevogabilidade ou irretratabilidade, inclusive em incorporações imobiliárias, ou de proprietário em contrato de venda com reserva de domínio;
              c) Decorrentes de adiantamento de contrato de câmbio para exportação.',
          'O que é a Assembleia de Credores?' => 'A Assembleia de Credores é o órgão colegiado e deliberativo responsável pela manifestação do interesse ou da vontade predominante entre os que titularizam crédito perante a Recuperanda.',
          'Quais são as competências da Assembleia Geral de Credores na Recuperação Judicial?' => 'Conforme consta na art. 35, da Lei nº 11.101/2005, na Recuperação Judicial, a Assembleia Geral de Credores deliberará sobre:
              a) aprovação, rejeição ou modificação do plano de recuperação judicial apresentado pelo devedor;
              b) a constituição do Comitê de Credores, a escolha de seus membros e sua substituição;
              c) o pedido de desistência do devedor, nos termos do § 4º do art. 52 desta Lei;
              d) o nome do gestor judicial, quando do afastamento do devedor;
              f) qualquer outra matéria que possa afetar os interesses dos credores.',
          'Quais são as Classes de Credores que compõe a Assembleia Geral de Credores?' => 'A Assembleia Geral de Credores é composta pelas seguintes classes:
              a) Classe I: Titulares de créditos derivados da legislação do trabalho ou decorrentes de acidentes de trabalho;
              b) Classe II: Titulares de créditos com garantia real;
              c) Classe III: Titulares de créditos quirografários, privilégio especial, privilégio geral ou subordinados;
              d) Classe IV: Titulares de créditos enquadrados como microempresa ou empresa de pequeno porte.',
          'Qual é o quórum de instalação da Assembleia Geral de Credores?' => 'O quórum de instalação para Primeira Convocação é de mais da metade dos créditos de cada classe, computados pelo valor.
          Caso não haja quórum, a Assembleia não será instaurada em Primeira Convocação.
          Na Segunda Convocação a Assembleia se instaurará por qualquer número.',
          'O que acontece se o Plano de Recuperação Judicial for aprovado?' => 'Caso o Plano seja aprovado pelos credores, o juiz concederá a Recuperação Judicial, que perdurará até que se cumpram todas as obrigações previstas no plano que vencerem até 02 (dois) anos após a concessão da Recuperação Judicial.',
          'O que acontece se o Plano de Recuperação Judicial não for aprovado?' => 'Caso o Plano não seja aprovado pelos credores, o juiz convolará a Recuperação Judicial em Falência.',
          'Quais são as outras situações que poderão convolar a Recuperação Judicial em Falência?' => 'Além da rejeição do Plano pelos credores, as outras situações que poderão convolar a Recuperação Judicial em Falência são:
              a) O descumprimento do Plano no prazo de 02 anos após a concessão da Recuperação Judicial;
              b) A não apresentação do Plano de Recuperação Judicial no prazo determinado em lei (60 dias);
              c) A deliberação dos credores em Assembleia Geral.',
          'Quais são as hipóteses para que seja decretada a Falência da Devedora?' => 'Será decretada a Falência da devedora que:
              I - sem relevante razão de direito, não paga, no vencimento, obrigação líquida materializada em título ou títulos executivos protestados cuja soma ultrapasse o equivalente a 40 (quarenta) salários-mínimos na data do pedido de falência;
              II - executado por qualquer quantia líquida, não paga, não deposita e não nomeia à penhora bens suficientes dentro do prazo legal;
              III - pratica qualquer dos seguintes atos, exceto se fizer parte de plano de recuperação judicial:
              a) procede à liquidação precipitada de seus ativos ou lança mão de meio ruinoso ou fraudulento para realizar pagamentos;
              b) realiza ou, por atos inequívocos, tenta realizar, com o objetivo de retardar pagamentos ou fraudar credores, negócio simulado ou alienação de parte ou da totalidade de seu ativo a terceiro, credor ou não;
              c) transfere estabelecimento a terceiro, credor ou não, sem o consentimento de todos os credores e sem ficar com bens suficientes para solver seu passivo;
              d) simula a transferência de seu principal estabelecimento com o objetivo de burlar a legislação ou a fiscalização ou para prejudicar credor;
              e) dá ou reforça garantia a credor por dívida contraída anteriormente sem ficar com bens livres e desembaraçados suficientes para saldar seu passivo;
              f) ausenta-se sem deixar representante habilitado e com recursos suficientes para pagar os credores, abandona estabelecimento ou tenta ocultar-se de seu domicílio, do local de sua sede ou de seu principal estabelecimento.',
          'Qual é a ordem de recebimento dos créditos na Falência?' => 'Na falência, de acordo com o art. 83 da Lei 11.101/2005, o recebimento dos créditos respeitará a seguinte ordem:
              1º – Os créditos extraconcursais;
              2º – Os créditos derivados da legislação do trabalho, limitados a 150 (cento e cinquenta) salários-mínimos por credor, e os decorrentes de acidentes de trabalho;
              3º – Os créditos com garantia real até o limite do valor do bem gravado;
              4º – Os créditos tributários, independentemente da sua natureza e tempo de constituição, excetuadas as multas tributárias;
              5º – Os créditos com privilégio especial;
              6º – Os créditos com privilégio geral;
              7º – créditos quirografários;
              8º – as multas contratuais e as penas pecuniárias por infração das leis penais ou administrativas, inclusive as multas tributárias;
              9º – créditos subordinados;',
          'Quando se extinguem as obrigações do Falido?' => 'De acordo com o art. 158 da Lei nº 11.101/2005, extingue as obrigações do falido:
              a) o pagamento de todos os créditos;
              b) o pagamento, depois de realizado todo o ativo, de mais de 50% (cinquenta por cento) dos créditos quirografários, sendo facultado ao falido o depósito da quantia necessária para atingir essa porcentagem se para tanto não bastou a integral liquidação do ativo;
              c) o decurso do prazo de 5 (cinco) anos, contado do encerramento da falência, se o falido não tiver sido condenado por prática de crime previsto nesta Lei;
              d) o decurso do prazo de 10 (dez) anos, contado do encerramento da falência, se o falido tiver sido condenado por prática de crime falimentar.',
        ];

        return view('paginas/faqs', compact('faqs'));

    })->name('faqs');
});
