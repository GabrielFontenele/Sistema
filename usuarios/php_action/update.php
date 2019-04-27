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
		$matricula = clear($_POST['matricula']);
		$senha = clear($_POST['senha']);
		$status = clear($_POST['status']);
		$id = clear($_POST['id']);
		$sql = "UPDATE usuarios SET nome = '$nome' , matricula = '$matricula', senha = '$senha', status = '$status' WHERE id = '$id'";


		if(mysqli_query($connect, $sql)):
			$_SESSION['mensagem'] = "Atualizado com sucesso!";
			header('Location: ../../usuarios.php');
		else:
			$_SESSION['mensagem'] = "Erro ao atualizar";
			header('Location: ../../usuarios.php');
		endif;
	endif;
endif;