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
    $cpf = clear($_POST['cpf']);
    $rg = clear($_POST['rg']);
    $endereco = clear($_POST['endereco']);
    $numero = clear($_POST['numero']);
    $estado = clear($_POST['estado']);
    $cidade = clear($_POST['cidade']);
    $renda = clear($_POST['renda']);
    $usuarios_id = $_SESSION['loginId'];
	$date   = new DateTime(); 
	$result = $date->format('Y-m-d-H-i-s');
    $created = $result;
    $status = "1";

	$sql = "INSERT INTO clientes ( nome , cpf , rg , endereco , numero , estado , cidade , renda , usuarios_id , created , status) VALUES ('$nome' ,'$cpf' ,'$rg' ,'$endereco' ,'$numero' ,'$estado' ,'$cidade' ,'$renda' ,'$usuarios_id' ,'$created' ,'$status')";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso";
		header('Location: ../../clientes.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../../clientes.php');
	endif;
endif;