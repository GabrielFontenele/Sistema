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
  $sql = "SELECT * FROM clientes WHERE id = '$id'";
  $resultado = mysqli_query($connect,$sql);
  $dados = mysqli_fetch_array($resultado);
endif;
?>
<div class="container">
  <h1 class="display-4"> Editar Cliente </h1>
  <div class="row justify-content-md-center">
    <dir class="col col-lg-6">
      <form action="php_action/update.php" method="POST">
        <input type="hidden" name="id" class="form-control" value="<?php echo $dados['id'];?>">
        <div class="form-group">
          <label for="nome">nome</label>
          <input type="text" name="nome" id="nome" class="form-control" value="<?php echo $dados['nome'];?>">
        </div>
        <div class="form-group">
          <label for="cpf">cpf</label>
          <input type="text" name="cpf" id="cpf" class="form-control" value="<?php echo $dados['cpf'];?>">
        </div>
        <div class="form-group">
          <label for="rg">rg</label>
          <input type="text" name="rg" id="rg" class="form-control" value="<?php echo $dados['rg'];?>">
        </div>
        <div class="form-group">
          <label for="endereco">endereco</label>
          <input type="text" name="endereco" id="endereco" class="form-control" value="<?php echo $dados['endereco'];?>">
        </div>
        <div class="form-group">
          <label for="numero">numero</label>
          <input type="text" name="numero" id="numero" class="form-control" value="<?php echo $dados['numero'];?>">
        </div>
        <div class="form-group">
          <label for="estado">estado</label>
          <input type="text" name="estado" id="estado" class="form-control" value="<?php echo $dados['estado'];?>">
        </div>
        <div class="form-group">
          <label for="cidade">cidade</label>
          <input type="text" name="cidade" id="cidade" class="form-control" value="<?php echo $dados['cidade'];?>">
        </div>
        <div class="form-group">
          <label for="renda">renda</label>
          <input type="text" name="renda" id="renda" class="form-control" value="<?php echo $dados['renda'];?>">
        </div>
        <div class="form-group">
          <label for="usuarios_id">usuarios_id</label>
          <input type="text" name="usuarios_id" id="usuarios_id" class="form-control" value="<?php echo $dados['usuarios_id'];?>">
        </div>
        <div class="form-group">
          <label for="status">status</label>
          <input type="text" name="status" id="status" class="form-control" value="<?php echo $dados['status'];?>">
        </div>


        <button type="submit" name="btn-editar" class="btn btn-primary">  Atualizar </button>
        <a href="../clientes.php" class="btn btn-success"> Lista de clientes </a>
      </form>
    </dir>
  </div>
</div>
<div class="col s6 offset-s8" align="right">
  <a href="../logout.php" align="right" class="btn - red" >Sair</a>
</div>
<?php
// Footer
include_once '../ind/footer.php';
?>
