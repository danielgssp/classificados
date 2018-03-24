<?php 
	// !----------- consulta p/ realizar listagem de anuncios -----------!
	$sqliBD = new mysqli($servidor, $usuario, $senha, $banco);
	$sqliBD->set_charset($charset);

	$consultaAnuncio = "SELECT DISTINCT  anuncios.titulo, anuncios.texto, anuncios.datapub FROM anuncios WHERE anuncios.categoria='$CATEGORIA' GROUP BY anuncios.titulo";

	// execulta query anuncios veiculos
	$excQueryAnuncio = $sqliBD->query($consultaAnuncio) or die($sqliBD->error);
	$sqliBD->close();
?>