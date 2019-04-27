<?php
// Conexao
include_once '../db_connect.php';
// Header
include_once '../ind/header.php';
session_start();
if(!isset($_SESSION['logado'])):
  header('Location: index.php');
endif;
// Select
if(isset($_GET['id'])):
  $id = mysqli_escape_string($connect, $_GET['id']);
  $sql = "SELECT * FROM usuarios WHERE id = '$id'";
  $resultado = mysqli_query($connect,$sql);
  $dados = mysqli_fetch_array($resultado);
endif;
?>
<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light"> Editar Cliente </h3>
    <form action="php_action/update.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
      <div class="input-field col s12">
        <input type="text" name="nome" id="nome" value="<?php echo $dados['nome'];?>">
        <label for="nome">Nome</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="matricula" id="matricula" value="<?php echo $dados['matricula'];?>">
        <label for="matricula">matricula</label>
      </div>
      <div class="input-field col s12">
        <input type="password" name="senha" id="senha" value="<?php echo $dados['senha'];?>">
        <label for="senha">senha</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="status" id="status" value="<?php echo $dados['status'];?>">
        <label for="status">status</label>
      </div>
      <button type="submit" name="btn-editar" class="btn"> Atualizar </button>
      <a href="../usuarios.php" class="btn green"> Lista de clientes </a>
    </form>
    
  </div>
</div>
<div class="col s6 offset-s8" align="right">
    <a href="../logout.php" align="right" class="btn - red" >Sair</a>
</div>
<?php
// Footer
include_once '../ind/footer.php';
?>