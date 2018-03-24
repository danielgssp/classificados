<!-- Importados php -->
<?php
include("../dao/mySQL/conexao.php");
include("../dao/consultaMotos.php");
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

    <title>Classificados - Motos</title>

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
            <h3>Motos -
                <?php
                if(!empty($sub) && !empty($id)){
                    echo $sub;
                }
                ?></h3>
        </div>
    </div>
</div>
<div class="container mtb">
    <div class="row">
        <div class="col-md-8">
            <?php
            while($dadosAnuncio = $excQueryAnuncio-> fetch_array()){?>
                <h3 class="ctitle">
                    <?php echo $dadosAnuncio["titulo"];?>
                </h3>
                <p>
                    <csmall>Post:
                        <?php
                        $dataFormatada = new DateTime($dadosAnuncio['datapub']);
                        echo $dataFormatada->format("d/m/Y");
                        ?>.</csmall> |
                    <csmall2>Folha da Região</csmall2>
                </p>
                <p>
                    <?php
                    $textoAnuncio = $dadosAnuncio["texto"];
                    echo $textoAnuncio;
                    ?>
                </p>
                <div class="hline"></div>
            <?php }
            if (empty($textoAnuncio) || empty($id)) {
                echo $msgCategoriaVazia;
            }
            ?>
        </div>
        <div class="spacing"></div>
        <!-- Buscar -->
        <div class="col-md-4" />
        <h4>Buscar</h4>
        <div class="hline"></div>
        <p>
        <form action="busca.php" method="POST" name="Form_buscar">
            <div class="input-group">
                <input name="inputBusca" type="text" class="form-control" placeholder="Buscar por Anuncio...">
                <span class="input-group-btn">
                            <button class="btn btn-secondary" type="button" onclick="Form_buscar.submit()">ir!</button>
                        </span>
            </div>
        </form>
        </p>

        <div class="spacing"></div>

        <div class="col-md-12" />
        <h4>Categorias</h4>
        <?php while($dadosSubCat = $excQuerySubCategoria-> fetch_array()){?>
            <div class="hline"></div>
            <p id="subCategoria" class="p_sub_cat"><a href="motos.php?id=<?php echo($dadosSubCat["id_secao"]);?>&sub=<?php echo($dadosSubCat["descricao"]);?>">
                    <i class="fa fa-angle-right"></i><?php echo $dadosSubCat["descricao"];?></a></p>
        <?php } ?>
    </div>
</div>
</div>
</div>

<!-- Inicio do footer -->
<?php include("fragmentos/footer.php"); ?>
<!-- Fim do footer -->

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