<?php include('menu.php'); 
/*session_start();

if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true){
    header("location: index.php");
    /* No welcome troque pelo nome da pagina principal do projeto // EX: index.html(php) 
    exit;*/
?>
<!DOCTYPE html>
<html lang="pt">

<head>
  <title>Click Escola</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anônimo">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anônimo"></script>
  <!-- FONT AWESONME -->
  <script src="https://kit.fontawesome.com/74e138c6b6.js" crossorigin="anônimo"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />
  <!-- CSS -->
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/principal.css" />
  <link rel="stylesheet" tipo="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
</head>

<body>
  <div style="margin-top:6rem;" class="estatuto container">
  <h2 class="title text-center">ESTATUTO DA ASSOCIAÇÃO DE PAIS E PROFESSORES DA E.E.B.M ANTONIO STUART</h2>
  <h3 style="margin-top:3rem;" class="title text-center">DA CONSTITUIÇÃO E SUAS FINALIDADES</h3>

  <h4 style="margin-top:2rem; margin-bottom:2rem;"class="title text-center">CAPÍTULO I</h4>

<b>Art. 1º</b>- A Associação de Pais e Professores (APP), fundada em 18 de outubro de 1977 na Escola Básica Municipal Antonio Stuart, órgão estrutural e deliberativo junto à Direção, é Entidade Civil, com sede na rua Learcino João Pereira, nº 346, bairro Retiro da União no município de Sombrio, Estado de Santa Catarina, de fins não lucrativos, de duração indeterminada, de existência obrigatória e será regida pelo presente estatuto.<br>

<br><b>Parágrafo único</b> – A associação de pais e professores se compõe de todos os pais ou responsáveis pelos alunos matriculados e professores deste estabelecimento de ensino, nos termos do Art. 12 deste estatuto.<br>
<br>
<br><b>Art. 2º</b> - Constitui finalidade específica da Associação de país e professores a integração escola-comunidade em termos de conjugação de esforços, articulação de objetos e harmonia de procedimento, o que se caracteriza principalmente pôr:
<br><b>a)</b> Estimular a transformação da Escola em Centro de Integração e Desenvolvimento comunitário, por meio da participação da família na escola e da escola na comunidade;
<br><b>b)</b> Promover a aproximação e cooperação entre pais e professores de modo a interessarmos membros da comunidade pelas atividades escolares e a escola pelas atividades comunitárias;
<br><b>c)</b> Interessar a Direção do estabelecimento na promoção bem como participação no funcionamento de cursos de interesse e necessidades comunitárias, inclusive à orientação pré-escolar;
<br><b>d)</b> Promover atividades culturais tais como: palestras, slides e todas as demais que não sejam privativas da escola ou de outras entidades;
<br><b>e)</b> Participar na solução de problemas de frequência, higiene, disciplina dos alunos e ainda programas que se refiram a horários e períodos de aulas, tarefas escolares, trabalhos em equipe, uniforme, livros, transporte, etc., sempre dentro da harmonia que deve marcar a convivência de pais, professores e alunos;
<br><b>f)</b> Cooperar na conservação e recuperação do prédio e equipamentos da escola;
<br><b>g)</b> Administrar, de acordo com o Regimento interno da Associação de pais e professores e as normas baixadas pelo conselho fiscal, os recursos constitutivos do Fundo escolar.
<br>
<br><b>Art. 3º</b> - A Associação de país e Professores será composta por uma diretoria e um conselho fiscal.

<h4 style="margin-top:2rem; margin-bottom:2rem;" class="title text-center">CAPÍTULO II <br> DAS ELEIÇÕES</h4>

<b>Art.4º</b> - A eleição da diretoria da Associação de Pais e Professores dar-se-á após o vencimento de dois anos da mesma e a posse deverá ocorrer dentro de (30) trinta dias subsequentes.
<br><b>§1º</b> - Somente poderão votar e ser votados pais e responsáveis de alunos, e todos os professores do estabelecimento.
<br><b>§2º</b> - O representante dos professores na diretoria será indicado pelos mesmos e representarão as diversas séries da escola.

<h4 style="margin-top:2rem; margin-bottom:2rem;" class="title text-center">CAPÍTULO III <br> DA DIRETORIA</h4>


<b>Art. 5º</b> - A diretoria da associação de pais e professores será composta de: Presidente, Vice-presidente, 1º Secretário, 2º Secretário, 1º Tesoureiro, 2º Tesoureiro, e obrigatoriamente um representante do corpo docente, todos com um mandato de dois anos, não podendo ser reeleitos para a mesma função da gestão procedente.<br>

<br><b>Art. 6º</b> - Compete a Diretoria:
<br><b>a)</b> Estimular a formação de comissões de caráter interino para realização de tarefas específicas e transitórias, orientando quando necessário o trabalho das mesmas;
<br><b>b)</b> Assumir a responsabilidade que lhe cabe na administração do fundo escolar;
<br><b>c)</b> Convocar e presidir reuniões administrativas e gerais;
<br><b>d)</b> Apresentar ao Serviço Integração Escola-Comunidade, à Coordenadoria regional de Educação e estimular a formação de comissões de caráter interino para realizações de tarefas específicas à comissão comunitária Municipal de Educação, no final do respectivo mandato, relatório no qual resumirá conforme registro na alínea “j' deste artigo, as atividades da associação de pais e professores em gestão;
<br><b>e)</b> Elaborar e encaminhar ao conselho fiscal, orçamento e programa de trabalho para o período no mínimo seis meses;
<br><b>f)</b> Propor ao conselho fiscal alteração no orçamento e no programa de | trabalho sempre acompanhada de exposição de motivos; 
<br><b>g)</b> Executar o orçamento e o programa de trabalho apropriado pelo Conselho fiscal;
<br><b>h)</b> Realizar despesas e autorizar pagamentos de acordo com as normas estabelecidas no regimento interno e de conformidade com o orçamento de trabalho aprovados pelo Conselho fiscal;
<br><b>i)</b> Apresentar trimestralmente, ao conselho fiscal, balancete financeiro e orçamentário, no qual se evidencie o cumprimento do que foi programado e os compromissos financeiros da Associação;
<br><b>j)</b> Proceder os registros das reuniões em atas e do movimento patrimonial e financeiro, nos livros especiais para este fim.
<br><b>k)</b> Exercer as demais atividades necessárias ao alcance dos objetivos da Associação, respeitadas as normas estatutárias ou regimentais.
<br>
<br><b>Art. 7º</b> - Compete privativamente ao presidente:
<br><b>a)</b> Representar a associação ativa e passiva, judicial e extrajudicialmente;
<br><b>b)</b> Cumprir e fazer cumprir este estatuto;
<br><b>c)</b> Convocar e presidir a assembleia geral;
<br><b>d)</b> Convocar e presidir as reuniões da diretoria;
<br><b>e)</b> Assinar com o tesoureiro todos os cheques, ordens de pagamento e títulos que representem obrigações financeiras da associação.
<br>
<br><b>Art. 8º</b> - Compete ao vice-presidente:
<br><b>a)</b> Substituir o presidente em suas eventuais ausências e impedimentos;
<br><b>b)</b> Assumir a função de presidente, em caso de vacância, até o término do mandato;
<br><b>c)</b> Atender e desempenhar funções especiais que lhe forem atribuídas pelo presidente.
<br><b>Art. 9º</b> - Compete ao primeiro secretário:
<br><b>a)</b> Dirigir e organizar os serviços de secretaria e de administração de pessoal;
<br><b>b)</b> Secretariar e lavrar as atas de reuniões da diretoria e assembleia geral;
<br><b>c)</b> Elaborar os editais e as pautas das reuniões das diretorias e assembleia geral;
<br><b>d)</b> Organizar e manter os arquivos de documentos da associação.
<br>
<br><b>Art.10º</b> - Compete ao segundo secretário:
<br><b>a)</b> Substituir o secretário em suas eventuais ausências e impedimentos;
<br><b>b)</b> Assumir a função de secretário, em caso de vacância, até o término do mandato;
<br><b>c)</b> Atender e desempenhar funções que lhes forem atribuídas. 
<br>
<br><b>Art.11º</b> - Compete ao primeiro Tesoureiro: 
<br><b>a)</b> Orientar, analisar e fiscalizar a contabilidade da associação; 
<br><b>b)</b> Arrecadar e contabilizar as contribuições, rendas, auxílios e donativos, mantendo em dia a escrituração;
<br><b>c)</b> Pagar as contas autorizadas pelo presidente;
<br><b>d)</b> Apresentar relatório financeiro para ser submetido a assembleia geral;
<br><b>e)</b> Assinar juntamente com o presidente, os documentos necessários para pagamentos e remessas de valores;
<br><b>f)</b> Apresentar relatório de receita e despesas sempre que forem solicitados;
<br><b>g)</b> Conservar sob sua guarda e responsabilidade os documentos relativos a tesouraria;
<br><b>h)</b> Apresentar semestralmente o balancete ao conselho fiscal.
<br>
<br><b>Art.12º</b> - Compete ao segundo tesoureiro:
<br><b>a)</b> Substituir o primeiro tesoureiro em suas faltas ou impedimentos;
<br><b>b)</b> Assumir o mandato do primeiro tesoureiro em caso de vacância, até o seu término;
<br><b>c)</b> Prestar de modo geral, a sua colaboração ao primeiro tesoureiro. 
<br>
<br><b>Art.13º</b> - Os fundos e demais valores da APP, são movimentados pelo presidente da diretoria, ou na ausência pelo vice-presidente, juntamente com o tesoureiro.
<br>
<br><b>Art. 13º</b> - sobre a utilização e movimentação dos recursos financeiros: os recursos financeiros depositados em contas bancárias desta Unidade Executora Própria deverão ser movimentados em conformidade com o disposto nas alíneas “a” e “b” deste Artigo.
<br><b>a)</b> Os recursos financeiros mencionados no caput deste Artigo deverão ser movimentados por meio de cheques nominais, assinados pelo Presidente e Pelo Tesoureiro da Unidade Executora (UEx), ou por meio eletrônico, inclusive, por meio de cartão magnético.
<br><b>b)</b> Na hipótese de a movimentação dos recursos efetivar-se por meio eletrônico, inclusive, por meio de cartão magnético, fica autorizado ao Presidente ou ao Tesoureiro a utilização desses meios de pagamento de forma individual e isolada, podendo realizar pagamentos, transferências, saques, emitir extratos, enfim, todas as operações financeiras necessárias.
<br>
<br><b>Art. 14º</b> - As comissões na alínea “a” do art.13 têm por objetivo sistematizar as atitudes espontâneas e colaboradores da comunidade escolar, compreender principalmente:
<br><b>a)</b> Comissão de matrícula e distribuição de vagas;
<br><b>b)</b> Comissão de conservação do prédio e limpeza;
<br><b>c)</b> Comissão de integração comunitária;
<br><b>d)</b> Comissão de alimentação escolar;
<br><b>e)</b> Comissão de relações públicas;
<br><b>f)</b> Comissão de material escolar e vestuário;
<br><b>g)</b> Comissão de educação de base;
<br><b>h)</b> Comissão de higiene e saúde;
<br><b>i)</b> Outras de acordo com as necessidades comunitárias.

<br><h4 style="margin-top:2rem; margin-bottom:2rem;" class="title text-center">CAPÍTULO IV <br> DO CONSELHO FISCAL</h4>

<b>Art.15º</b> - O conselho fiscal é órgão de controle, fiscalização, avaliação da associação de pais e professores, e deliberará presente a maioria absoluta de seus membros.
<br><b>§1º</b> - O conselho fiscal será composto de cinco elementos: Presidente, dois professores, dois pais ou responsáveis de alunos.
<br><b>§2º</b> - O diretor do Estabelecimento é Presidente nato do conselho fiscal.
<br>
<br><b>Art. 16º</b> - Compete ao Conselho Fiscal
<br><b>a)</b> Examinar e aprovar o orçamento e programa de trabalho bem como alterações necessárias, propostas pela diretoria;
<br><b>b)</b> Examinar e aprovar os balancetes mensais apresentados pela diretoria;
<br><b>c)</b> Fiscalizar os registros do movimento financeiro e os demais referidos na alínea “j” do artigo 6º deste estatuto;
<br><b>d)</b> Analisar e emitir pareceres sobre relatório anual referido na alínea “d” do artigo 6º deste estatuto;
<br><b>e)</b> Solicitar a diretoria sempre que julgar necessário, esclarecimentos e ou/documentos comprobatórios de despesas ou receita;
<br><b>f)</b> Os fundos e demais valores da APP serão movimentados pelo Presidente da APP e o Tesoureiro;
<br><b>g)</b> O Presidente e o Tesoureiro deverão assinar os cheques, recibos e balancetes.
<br>
<br><b>Art.17º</b> - Do conselho fiscal será eleito a cada dois anos, seguindo-se para isso o mesmo critério adotado para a eleição da diretoria, conforme artigo 5º deste estatuto.
<br>
<br><b>PARÁGRAFO ÚNICO:</b> os conselheiros não poderão ser reeleitos nem ter parentes de 1º grau na diretoria da associação, exceto de Presidente a que se refere alínea “a” do §1º do artigo 9º.

<h4 style="margin-top:2rem; margin-bottom:2rem;" class="title text-center">CAPÍTULO V <br> DOS SÓCIOS</h4>


<b>Art. 18º</b> - São considerados sócios da Associação de Pais e Professores todos os pais e responsáveis legais dos alunos, todos os professores do estabelecimento e, ainda outras pessoas da comunidade quando tiverem sua admissão aprovada pela diretoria.
<br>
<br><b>Art. 19º</b> - Constituem-se direitos dos sócios da Associação de Pais e Professores:
<br><b>a)</b> Participar de todas as atividades sociais, assistências e culturais da escola;
<br><b>b)</b> Votar e ser votado dentro das disposições deste estatuto.
<br>
<br><b>Art. 20º</b> - Constituem deveres dos sócios da Associação de Pais e Professores:
<br><b>a)</b> Comparecer as reuniões e encontros e atender as convocações de pais e professores;
<br><b>b)</b> Colaborar com as Iniciativas e promoções da escola e da associação de pais e professores;
<br><b>c)</b> Procurar desempenhar os encargos que lhe forem atribuídos;
<br><b>d)</b> Requerer convocação de reunião geral, quando julgar necessário, por meio de documentos escritos, fundamentando a atitude, desde que conte com a maioria absoluta dos sócios;
<br><b>e)</b> Contribuir com todos os meios ao seu alcance, para que o processo educativo da escola seja eficiente e produtivo.

<h4 style="margin-top:2rem; margin-bottom:2rem;" class="title text-center">CAPÍTULO VI <br> DAS REUNIÕES</h4>

<b>Art. 21º</b> - Haverá três reuniões:
<br><b>a)</b> Reuniões administrativas de que participará somente a diretoria convocada pelo seu presidente e ou Conselho fiscal da Associação Pais e Professores;
<br><b>b)</b> Reuniões gerais que participarão todos os associados;
<br><b>c)</b> Reunião simples de que participarão apenas os pais ou responsáveis de alunos e professores de determinada série ou classe.
<br>
<br><b>Art. 22º</b> - Os professores devem ser convidados a participar das reuniões da Associação de Pais e Professores.
<br>
<br><b>Art. 23º</b> - Os assuntos apresentados nas reuniões só serão aprovados quando contar com voto da maioria dos sócios presentes, cabendo ao presidente o voto de desempate.

<h4 style="margin-top:2rem; margin-bottom:2rem;" class="title text-center">CAPÍTULO VII <br> DO PATRIMÔNIO E SUA APLICAÇÃO</h4>

<b>Art. 24º</b> - O patrimônio da APP é constituído:
<br><b>a)</b> Das contribuições pecuniárias facultativas dos sócios;
<br><b>b)</b> Doações e legados;
<br><b>c)</b> Das subvenções consignadas pelo poder público;
<br><b>d)</b> De qualquer outra espécie de renda resultante de atividades sociais não compreendidas nas alíneas anteriores;
<br><b>e)</b> De todos os bens móveis que pertencem ou venham a pertencer a APP.
<br>
<br><b>Parágrafo único</b> - Todos os recursos destinados a instituição, que venham do Governo Federal, serão aplicados conforme o que rege o programa, obedecendo o valor de custeio e capital, sendo o Banco e a conta direcionados pelo governo. A APP, compete apenas a aplicação e a fiscalização dos recursos.

<h4 style="margin-top:2rem; margin-bottom:2rem;" class="title text-center">CAPÍTULO VIII <br> DA REFORMA DO ESTATUTO</h4>


<b>Art. 25º</b> - O presente estatuto poderá ser modificado através da votação da maioria absoluta dos associados, em reunião convocada especialmente para esta finalidade.


<h4 style="margin-top:2rem; margin-bottom:2rem;" class="title text-center">CAPÍTULO IX <br> DA DISSOLUÇÃO</h4>


<b>Art. 26º</b> - A associação poderá ser dissolvida por ato do(a) Secretario(a) da Educação, Cultura e Esportes do Município e, em caso de extinção do estabelecimento de ensino que sedia ou de desvirtuamento de suas finalidades.
<br><b>§1º</b> - Em caso de dissolução da associação, força de extinção do estabelecimento de ensino que sedia, o patrimônio reverterá em benefício da Secretaria Municipal de Educação, Cultura e Esportes.
<br><b>§2º</b> - Em caso da dissolução da Associação por desvirtuamento de suas finalidades, patrimônio reverterá em benefício do estabelecimento de ensino que sedia a associação.

<h4 style="margin-top:2rem; margin-bottom:2rem;" class="title text-center">CAPÍTULO X <br> DAS DISPOSIÇÕES GERAIS</h4>

<br><b>Art. 27º</b> - Todas as funções previstas neste estatuto serão exercidas gratuitamente.
<br>
<br><b>Art. 28º</b> - Os casos omissos nesse estatuto serão resolvidos em reunião geral “ad-referendus" do(a) Secretario(a) Municipal de Educação, Cultura e Esporte.
<br>
<br><b>Art. 29º</b> - Os sócios não respondem subsidiariamente pelas obrigações da sociedade.
<br>
<br><b>Art. 30º</b> - Não poderão exercer cargos eletivos os sócios que não estiverem no gozo de seus direitos.
<br>
<br><b>Art. 31º</b> - O presente Estatuto está registrado no Cartório de Registro de pessoa Jurídica da Comarca de Sombrio do Estado de Santa Catarina, Sombrio, 27 de outubro de 2021

<br>
<br>

Presidente: _____________________________________________________
             Samuel Pacheco Turatti

<br>
<br>
1º Secretário: ___________________________________________________
                  Mariana Da Silva Clezar

</div>

<div>
    <footer class="footer mt-auto py-3">
      <div class="container fluid">
        <span class="text-muted">Coloque o conteúdo do sticky footer aqui.</span>
      </div>
    </footer>
</div>
</body>
</html>