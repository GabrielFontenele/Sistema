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
    $descricao = clear($_POST['descricao']);
    $detalhamento = clear($_POST['detalhamento']);
    $preco_vista = clear($_POST['preco_vista']);
    $preco_prazo = clear($_POST['preco_prazo']);
    $codigo_barras = clear($_POST['codigo_barras']);
    $usuarios_id = $_SESSION['loginId'];
    $status = clear($_POST['status']);
	$id = clear($_POST['id']);

	$sql = "UPDATE produtos SET descricao = '$descricao',	detalhamento = '$detalhamento',	preco_vista = '$preco_vista',	preco_prazo = '$preco_prazo',	codigo_barras = '$codigo_barras',	usuarios_id = '$usuarios_id',	created = '$created',	status = '$status' WHERE id = '$id'";


	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../../produtos.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../../produtos.php');
	endif;
endif;