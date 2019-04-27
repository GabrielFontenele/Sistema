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
		$nome = clear($_POST['nome']);
		$matricula = clear($_POST['matricula']);
		$senha = md5(clear($_POST['senha']));
		$date   = new DateTime(); 
		$created = $date->format('Y-m-d-H-i-s');
		$status = "1";

		$sql = "INSERT INTO usuarios (nome, matricula, senha, created,status) VALUES ('$nome', '$matricula', '$senha', '$created','$status')";

		if(mysqli_query($connect, $sql)):
			$_SESSION['mensagem'] = "Cadastrado com sucesso";
			header('Location: ../../usuarios.php');
		else:
			$_SESSION['mensagem'] = mysqli_error($connect);
			header('Location: ../../usuarios.php');
		endif;
	endif;
endif;