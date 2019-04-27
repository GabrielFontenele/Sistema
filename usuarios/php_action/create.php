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
	$nome = clear($_POST['nome']);
	$matricula = clear($_POST['matricula']);
	$senha = md5(clear($_POST['senha']));
	$created = clear($_POST['created']);
	$status = clear($_POST['status']);

	$sql = "INSERT INTO usuarios (nome, matricula, senha, created,status) VALUES ('$nome', '$matricula', '$senha', '$created','$status')";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso";
		header('Location: ../../usuarios.php');
	else:
		$_SESSION['mensagem'] = mysqli_error($connect);
		header('Location: ../../usuarios.php');
	endif;
endif;