<?php
//conexao
include_once 'db_connect.php';
//header
include_once 'ind/header.php';
//message
include_once 'ind/message.php';
// Verificação

if(!isset($_SESSION['logado'])):
	header('Location: index.php');
endif;
?>	
<div class= "container" align="center">
	<div class="span12 pagination-centered">
		<h1 class="display-4">Home</h1>
		<a href="usuarios.php" type="button" class="btn btn-primary">Usuários</a>
		<a href="clientes.php" type="button" class="btn btn-primary">Clientes</a>
		<a href="produtos.php" type="button" class="btn btn-primary">Produtos</a>
		<a href="vendas.php" type="button" class="btn btn-primary">Vendas</a>
	</div>
</div>
<div class="d-flex flex-row-reverse" >
	<a href="logout.php" type="button" class="btn btn-danger" >Sair</a>
</div>


</body>
</html>
<?php
include_once 'ind/footer.php';
?>
