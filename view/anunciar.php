<!-- Importados php -->
<?php 
    include("../dao/mySQL/conexao.php");
    include("../dao/consultaVeiculos.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../assets/img/fr_ic.jpg" />

    <title>Classificados - Como Anunciar</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="../assets/js/modernizr.js"></script>
</head>

<body>
    <!-- Inicio do menu (topo) -->
      <?php include("fragmentos/menu.php"); ?>
      <!-- Fim do menu -->

    <!-- header tittle category-->
    <div id="blue">
        <div class="container">
            <div class="row">
                <h3>Anuncie Conosco</h3>
            </div>
        </div>
    </div>
    <div class="container mtb">
    <div class="row">
        <h1 class="ctitle" >Tabela de Preços</h1>
        <div class="hline"></div>
        <div class="spacing"></div>
        <!-- Tabela com valores de publicações-->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th></th>
                    <th>Modelo A</th>
                    <th>Modelo B</th>
                    <th>Modelo C</th>
                </tr>
                   
            </thead>
            <tbody>
                <tr>
                    <th scope="row"></th>
                    <td><img src="../assets/img/modelo-a.png"></td>
                    <td><img src="../assets/img/modelo-b.png"></td>
                    <td><img src="../assets/img/modelo-c.png"></td>
                </tr>
                <tr>
                    <th scope="row">Terça a Sábado <p>(mínimo: título + 2 linhas)</p></th>
                    <td>R$ 7,50</td>
                    <td>R$ 8,25</td>
                    <td>R$ 11,00</td>
                </tr>
                <tr>
                    <th scope="row">Terça a Sábado <p>(Linha Adcional)</p></th>
                    <td>R$ 2,50</td>
                    <td>R$ 2,93</td>
                    <td>R$ 3,25</td>
                </tr>
                <tr>
                    <th scope="row">Domingo <p>(mínimo: título + 2 linhas)</p></th>
                    <td>R$ 8,25</td>
                    <td>R$ 9,80</td>
                    <td>R$ 12,90</td>
                </tr>
                <tr>
                    <th scope="row">Domingo <p>(Linha Adcional)</p></th>
                    <td>R$ 3,20</td>
                    <td>R$ 3,23</td>
                    <td>R$ 4,10</td>
                </tr>
                <tr>
                    <th>Publicação na Internet</th>
                    <td colspan="3"><p>R$ 1,00</p></td>
                </tr>
            </tbody>
            </table><br/><br/>

        <h1 class="ctitle" >Formas de Pagamento</h1>
        <div class="hline"></div><br/><br/>

        <!-- tabela com locais e formas de pagamento-->
        <table class="table table-hover">
            <tr>
                <th colspan="5">Locais conforme os tipos de pagamentos</th>
            </tr>
            <tr>
            <th>Balcões de Atendimento</th>
                <td><img src="../assets/img/pagamento/mastercard.png"></td>
                <td><img src="../assets/img/pagamento/amex.png"></td>
                <td><img src="../assets/img/pagamento/visa.png"></td>
                <td><img src="../assets/img/pagamento/elo.png"></td>
            </tr>
            <tr>
                <th>Sob Consulta</th>
                <td><img src="../assets/img/pagamento/boleto.png"></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>

        <br/><br/>
        <h1 class="ctitle">Contatos</h1>
         <div class="hline"></div>
         <div class="spacing"></div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="../assets/img/Telemarketing.png" alt="...">
                <div class="caption">
                    <h3>TELEFOLHA - (18) 3636-7778</h3>
                    <p>Horário de atendimento <strong>8h00 as 20h00 de segunda a sexta-feira.</strong>
                    ( ! ) Para anunciar via TELEFOLHA nas edições de terça a sábado, faça seu anúncio até as 20h do dia anterior. Para anunciar nas edições de domingo faça seu anúncio até as 20h da sexta-feira.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="../assets/img/Pessoal.jpg" alt="...">
                <div class="caption">
                    <h3>PESSOALMENTE</h3>
                    <p>
                        <p>Em nossos balcões de anúncio autorizados: <br/>Araçatuba - Rua Afonso Pena, 638 - Centro
                        <strong>segunda a sexta das 8:30h as 18h sábados das 8:30h as 12h.</strong></p>
                        <p>Andradina - Rua Dom Bosco, 645 - Centro <strong>Informações: (18) 3722-7445. </strong></p> Penápolis Rua Anchieta, 151 - Centro Informações: (18) 3652.5454 Penápolis Rua <strong>Anchieta, 151 - Centro Informações: (18) 3652-5454.</strong>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="../assets/img/email.png" alt="...">
                <div class="caption">
                    <h3>VIA INTERNET</h3>
                    <p>Horário de atendimento <strong>8h as 17h.</strong>
                    ( ! ) Para anunciar via INTERNET / E-MAIL nas edições de terça a sábado, faça seu anúncio até as 17h do dia anterior. Para anunciar nas edições de domingo faça seu anúncio até as 17h da sexta-feira. <p></p>Email: <strong>classificados@folhadaregiao.com.br</strong></p>
                </div>
            </div>
        </div>
        
    </div>
    </div>
    
    <!-- Inicio do footer -->
      <?php include("fragmentos/footer.php"); ?>
      <!-- Fim do footer -->

    </div>
    <!-- Bootstrap core JavaScript-->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/retina-1.1.0.js"></script>
    <script src="../assets/js/jquery.hoverdir.js"></script>
    <script src="../assets/js/jquery.hoverex.min.js"></script>
    <script src="../assets/js/jquery.prettyPhoto.js"></script>
    <script src="../assets/js/jquery.isotope.min.js"></script>
    <script src="../assets/js/custom.js"></script>
</body>

</html>