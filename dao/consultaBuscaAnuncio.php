<?php
	// !---------------- consulta para buscar anuncio por texto ----------------!
	$sqliBD = new mysqli($servidor, $usuario, $senha, $banco);
	$sqliBD->set_charset($charset);

	$ConsultabuscarAnuncio = "SELECT DISTINCT anuncios.titulo, anuncios.texto, anuncios.datapub FROM anuncios WHERE anuncios.titulo LIKE '%$txtBusca%' GROUP BY anuncios.titulo"; 
	
	//execulta query para buscar algum anuncio!
	$excQueryBusca = $sqliBD->query($ConsultabuscarAnuncio) or die($sqliBD->error);
	$sqliBD->close();
?>