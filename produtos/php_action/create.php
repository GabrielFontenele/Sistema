<?php
session_start();
// Conexão
require_once '../../db_connect.php';
// Clear
function clear($input) {
	global $connect;
	// sql_regcase(string)
	$var = mysqli_escape_string($connect, $input);
	// xss
	$var = htmlspecialchars($var);
	return $var;
}
if(isset($_POST['btn-cadastrar'])):
	$_POST['btn-cadastrar'] = " ";
	foreach ($_POST as $key => $value) {
		if(empty($value)):
			$erros .= "O campo ".$key." esta vazio. ";
		endif;
	}
	if(!empty($erros)):
		$_SESSION['mensagem'] .= clear($erros);
		header('Location: ../adicionar.php');
	else:
		$descricao = clear($_POST['descricao']);
		$detalhamento = clear($_POST['detalhamento']);
		$preco_vista = clear($_POST['preco_vista']);
		$preco_prazo = clear($_POST['preco_prazo']);
		$codigo_barras = clear($_POST['codigo_barras']);
		$usuarios_id = $_SESSION['loginId'];
		$date   = new DateTime(); 
		$created = $date->format('Y-m-d-H-i-s');
		$status = "1";


		$sql = "INSERT INTO produtos (descricao, detalhamento, preco_vista, preco_prazo, codigo_barras, usuarios_id, created, status) VALUES ( '$descricao', '$detalhamento', '$preco_vista', '$preco_prazo', '$codigo_barras', '$usuarios_id', '$created', '$status')";

		if(mysqli_query($connect, $sql)):
			$_SESSION['mensagem'] .= clear(mysqli_error($connect));
			header('Location: ../../produtos.php');
		else:
			$_SESSION['mensagem'] = clear(mysqli_error($connect));
			header('Location: ../../produtos.php');
		endif;
	endif;
endif;