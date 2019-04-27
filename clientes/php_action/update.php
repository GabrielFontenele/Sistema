<?php
// sessao
session_start();
// Conexão
require_once '../../db_connect.php';
function clear($input) {
	global $connect;
	// sql
	$var = mysqli_escape_string($connect, $input);
	// xss
	$var = htmlspecialchars($var);
	return $var;
}

if(isset($_POST['btn-editar'])):
	$_POST['btn-editar'] = " ";
	foreach ($_POST as $key => $value) {
		if(empty($value)):
			$erros .= "O campo ".$key." esta vazio. ";
		endif;
	}
	if(!empty($erros)):
		$_SESSION['mensagem'] .= clear($erros);
		header('Location: ../editar.php?id='.$_POST['id']);
	else:
		$nome = clear($_POST['nome']);
		$cpf = clear($_POST['cpf']);
		$rg = clear($_POST['rg']);
		$endereco = clear($_POST['endereco']);
		$numero = clear($_POST['numero']);
		$estado = clear($_POST['estado']);
		$cidade = clear($_POST['cidade']);
		$renda = clear($_POST['renda']);
		$usuarios_id = $_SESSION['loginId'];
		$status = clear($_POST['status']);
		$id = clear($_POST['id']);
		$sql = "UPDATE clientes SET nome = '$nome', cpf = '$cpf', rg = '$rg', endereco = '$endereco', numero = '$numero', estado = '$estado', cidade = '$cidade', renda = '$renda', usuarios_id = '$usuarios_id', created = '$created', status = '$status' WHERE id = '$id'";


		if(mysqli_query($connect, $sql)):
			$_SESSION['mensagem'] = "Atualizado com sucesso!";
			header('Location: ../../clientes.php');
		else:
			$_SESSION['mensagem'] = "Erro ao atualizar";
			header('Location: ../../clientes.php');
		endif;
	endif;
endif;