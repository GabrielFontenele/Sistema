<?php
session_start();
// Conexão
require_once '../db_connect.php';
// Clear
function clear($input) {
	global $connect;
	// sql
	$var = mysqli_escape_string($connect, $input);
	// xss
	$var = htmlspecialchars($var);
	return $var;
}
if(isset($_POST['btn-login'])):
	$matricula = clear($_POST['matricula']);
	$senha = clear($_POST['password']);
	if(empty($matricula) or empty($senha)):
		$erros .= "<li> O campo matricula/senha precisa ser preenchido </li>";
	else:
		$sql = "SELECT matricula FROM usuarios WHERE matricula = '$matricula'";
		$resultado = mysqli_query($connect, $sql);		

		if(mysqli_num_rows($resultado) > 0):
		$senha = md5($senha);     	
		$sql = "SELECT * FROM usuarios WHERE matricula = '$matricula' AND senha = '$senha'";
		
		$resultado = mysqli_query($connect, $sql);
			if(mysqli_num_rows($resultado) == 1):
				$dados = mysqli_fetch_array($resultado);
				mysqli_close($connect);
				$_SESSION['logado'] = true;
				$_SESSION['matricula'] = $matricula;
			else:
				$erros .=  "<li> Usuário e senha não conferem </li>";
			endif;
		else:
			$erros .= "<li> Usuário inexistente </li>";
		endif;

	endif;
	if(empty($erros)):	
		$_SESSION['mensagem'] .= $erros;
		header('Location: ../home.php');
	else:
		$_SESSION['mensagem'] .= $erros;
		header('Location: ../index.php');
	endif;
endif;