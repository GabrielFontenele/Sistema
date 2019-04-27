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
<div class= "row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Home</h3>
		<a href="usuarios.php" class="btn">usuários</a>
		<a href="clientes.php" class="btn">clientes</a>
		<a href="produtos.php" class="btn">produtos</a>
		<a href="vendas.php" class="btn">vendas</a>
	</div>
</div>

<div class="col s6 offset-s8" align="right">
    <a href="logout.php" align="right" class="btn - red" >Sair</a>
</div>

</body>
</html>
<?php
include_once 'ind/footer.php';
?>
