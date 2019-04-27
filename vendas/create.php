<?php
session_start();
// Conexão
require_once '../db_connect.php';
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

	$produtos_id = clear($_POST['produtos_id']);
	$clientes_id = clear($_POST['clientes_id']);
	$quantidade = clear($_POST['quantidade']);
	$forma_pagamento = clear($_POST['forma_pagamento']);
	$data = clear($_POST['data']);
	$valor_total = clear($_POST['valor_total']);
	$usuarios_id = clear($_POST['usuarios_id']);
	$created = clear($_POST['created']);
	$updated = clear($_POST['updated']);
	$status = clear($_POST['status']);

	$sql = "INSERT INTO vendas (produtos_id, clientes_id, quantidade, forma_pagamento, data, valor_total, usuarios_id, created, updated, status) VALUES ('$produtos_id', '$clientes_id', '$quantidade', '$forma_pagamento', '$data', '$valor_total', '$usuarios_id', '$created', '$updated', '$status')";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso";
	header('Location: ../vendas.php');
	else:
		$_SESSION['mensagem'] = mysqli_error($connect);
	header('Location: ../vendas.php');
	endif;
endif;