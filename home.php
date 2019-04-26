<?php
//conexao
include_once 'db_connect.php';
//header
include_once 'usuarios/includes/header.php';
//message
include_once 'usuarios/includes/message.php';
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
<a href="logout.php">Sair</a>
</body>
</html>
<?php
include_once 'usuarios/includes/footer.php';
?>
