<?php
//tratamento GET/POST ações e variaveis!
	
$txtBusca = "";
	
$SEPARADOR = "%ff";

if ($_SERVER["QUERY_STRING"]) {

    	list ($CATEGORIA, $SUBCATEGORIA) = explode($SEPARADOR, str_replace("&", "", $_SERVER["QUERY_STRING"]));

}

//validação POST do formulario de busca
if (!empty($_POST["inputBusca"])) {
		$txtBusca = trim($_POST["inputBusca"]);
	}    
?>