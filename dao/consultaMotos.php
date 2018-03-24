<?php
	include ("../model/error/msgError.php");
	include ("../model/controller/TratamentoURL.php");
	include ("../dao/consultaBuscaAnuncio.php");
	include ("../dao/consultaAnuncios.php");

	// !----------------------- consulta p/ menu subcategoria -----------------------!
	$sqliBD = new mysqli($servidor, $usuario, $senha, $banco);
	$sqliBD->set_charset($charset);

	$consultaSubCategoria = "SELECT subcategorias.descricao, subcategorias.id_secao FROM subcategorias, categorias WHERE categorias.secao = 'motos' AND subcategorias.id_subcategoria = 20";

	// execulta query descricao das subcategoria
	$excQuerySubCategoria = $sqliBD->query($consultaSubCategoria) or die($sqliBD->error);
	$sqliBD->close();

