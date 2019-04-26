<?php
// Conexao
include_once '../db_connect.php';
// Header
include_once 'includes/header.php';
// Select
if(isset($_GET['id'])):
  $id = mysqli_escape_string($connect, $_GET['id']);
  $sql = "SELECT * FROM clientes WHERE id = '$id'";
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
        <input type="text" name="nome" id="nome"value="<?php echo $dados['nome'];?>">
        <label for="nome">nome</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="cpf" id="cpf"value="<?php echo $dados['cpf'];?>">
        <label for="cpf">cpf</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="rg" id="rg"value="<?php echo $dados['rg'];?>">
        <label for="rg">rg</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="endereco" id="endereco"value="<?php echo $dados['endereco'];?>">
        <label for="endereco">endereco</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="numero" id="numero"value="<?php echo $dados['numero'];?>">
        <label for="numero">numero</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="estado" id="estado"value="<?php echo $dados['estado'];?>">
        <label for="estado">estado</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="cidade" id="cidade"value="<?php echo $dados['cidade'];?>">
        <label for="cidade">cidade</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="renda" id="renda"value="<?php echo $dados['renda'];?>">
        <label for="renda">renda</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="usuarios_id" id="usuarios_id"value="<?php echo $dados['usuarios_id'];?>">
        <label for="usuarios_id">usuarios_id</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="created" id="created"value="<?php echo $dados['created'];?>">
        <label for="created">created</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="status" id="status" value="<?php echo $dados['status'];?>">
        <label for="status">status</label>
      </div>


      <button type="submit" name="btn-editar" class="btn"> Atualizar </button>
      <a href="../clientes.php" class="btn green"> Lista de clientes </a>
    </form>
    
  </div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
