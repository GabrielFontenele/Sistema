<?php
// Conexao
include_once '../db_connect.php';
// Header
include_once '../ind/header.php';

include_once '../ind/message.php';

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
<div class="container">
  <h1 class="display-4"> Editar Usuario </h1>
  <div class="row justify-content-md-center">
    <dir class="col col-lg-6">
      <form action="php_action/update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
        <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" name="nome"  class="form-control" id="nome" value="<?php echo $dados['nome'];?>">
        </div>
        <div class="form-group">
          <label for="matricula">matricula</label>
          <input type="text" name="matricula" class="form-control" id="matricula" value="<?php echo $dados['matricula'];?>">
        </div>
        <div class="form-group">
          <label for="senha">senha</label>
          <input type="password" name="senha" class="form-control" id="senha" value="<?php echo $dados['senha'];?>">
        </div>
        <div class="form-group">
          <label for="status">status</label>
          <input type="text" name="status" class="form-control" id="status" value="<?php echo $dados['status'];?>">
        </div>
        <button type="submit" name="btn-editar" class="btn btn-primary"> Atualizar </button>
        <a href="../usuarios.php" class="btn btn-success"> Lista de clientes </a>
      </form>
    </dir>
  </div>
</div>
<div class="col s6 offset-s8" align="right">
  <a href="../logout.php" align="right" class="btn btn-danger" > Sair </a>
</div>
<?php
// Footer
include_once '../ind/footer.php';
?>