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
<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light"> Editar Produto </h3>
    <form action="php_action/update.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
      <div class="input-field col s12">
        <input type="text" name="descricao" id="descricao"value="<?php echo $dados['descricao'];?>">
        <label for="descricao">descricao</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="detalhamento" id="detalhamento"value="<?php echo $dados['detalhamento'];?>">
        <label for="detalhamento">detalhamento</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="preco_vista" id="preco_vista"value="<?php echo $dados['preco_vista'];?>">
        <label for="preco_vista">preco_vista</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="preco_prazo" id="preco_prazo"value="<?php echo $dados['preco_prazo'];?>">
        <label for="preco_prazo">preco_prazo</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="codigo_barras" id="codigo_barras"value="<?php echo $dados['codigo_barras'];?>">
        <label for="codigo_barras">codigo_barras</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="status" id="status" value="<?php echo $dados['status'];?>">
        <label for="status">status</label>
      </div>

      <button type="submit" name="btn-editar" class="btn"> Atualizar </button>
      <a href="../produtos.php" class="btn green"> Lista de produtos </a>
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
