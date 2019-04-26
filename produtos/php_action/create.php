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
    $descricao = clear($_POST['descricao']);
    $detalhamento = clear($_POST['detalhamento']);
    $preco_vista = clear($_POST['preco_vista']);
    $preco_prazo = clear($_POST['preco_prazo']);
    $codigo_barras = clear($_POST['codigo_barras']);
    $usuarios_id = clear($_POST['usuarios_id']);
    $created = clear($_POST['created']);
    $status = clear($_POST['status']);

	$sql = "INSERT INTO produtos (descricao, detalhamento, preco_vista, preco_prazo, codigo_barras, usuarios_id, created, status) VALUES ( '$descricao', '$detalhamento', '$preco_vista', '$preco_prazo', '$codigo_barras', '$usuarios_id', '$created', '$status')";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso";
		header('Location: ../../produtos.php');
	else:
		$_SESSION['mensagem'] = mysqli_error($connect);
		header('Location: ../../produtos.php');
	endif;
endif;