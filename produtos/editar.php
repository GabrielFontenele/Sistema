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
  $sql = "SELECT * FROM produtos WHERE id = '$id'";
  $resultado = mysqli_query($connect,$sql);
  $dados = mysqli_fetch_array($resultado);
endif;
?>
<div class="container">
  <h1 class="display-4"> Editar Produto </h1>
  <div class="row justify-content-md-center">
    <dir class="col col-lg-6">
      <form action="php_action/update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
        <div class="form-group">
          <label for="descricao">descricao</label>
          <input type="text" name="descricao" class="form-control" id="descricao"value="<?php echo $dados['descricao'];?>">
        </div>
        <div class="form-group">
          <label for="detalhamento">detalhamento</label>
          <input type="text" name="detalhamento" class="form-control" id="detalhamento"value="<?php echo $dados['detalhamento'];?>">
        </div>
        <div class="form-group">
          <label for="preco_vista">preco_vista</label>
          <input type="text" name="preco_vista" class="form-control" id="preco_vista"value="<?php echo $dados['preco_vista'];?>">
        </div>
        <div class="form-group">
          <label for="preco_prazo">preco_prazo</label>
          <input type="text" name="preco_prazo" class="form-control" id="preco_prazo"value="<?php echo $dados['preco_prazo'];?>">
        </div>
        <div class="form-group">  
          <label for="codigo_barras">codigo_barras</label>
          <input type="text" name="codigo_barras" class="form-control" id="codigo_barras"value="<?php echo $dados['codigo_barras'];?>">
        </div>
        <div class="form-group">
          <label for="status">status</label>
          <input type="text" name="status" class="form-control" id="status" value="<?php echo $dados['status'];?>">
        </div>

        <button type="submit" name="btn-editar" class="btn btn-primary"> Atualizar </button>
        <a href="../produtos.php" class="btn btn-success"> Lista de produtos </a>
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
