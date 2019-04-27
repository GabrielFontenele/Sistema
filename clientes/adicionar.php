<?php
// Header
include_once '../ind/header.php';
session_start();
if(!isset($_SESSION['logado'])):
  header('Location: index.php');
endif;
?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light"> Novo Clientes </h3>
    <form action="php_action/create.php" method="POST">
      <div class="input-field col s12">
        <input type="text" name="nome" id="nome">
        <label for="nome">nome</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="cpf" id="cpf">
        <label for="cpf" >cpf</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="rg" id="rg">
        <label for="rg">rg</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="endereco" id="endereco">
        <label for="endereco">endereco</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="numero" id="numero">
        <label for="numero">numero</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="estado" id="estado">
        <label for="estado">estado</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="cidade" id="cidade">
        <label for="cidade">cidade</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="renda" id="renda">
        <label for="renda">renda</label>
      </div>
      <button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
      <a href="../clientes.php" class="btn green"> Lista de clientes </a>
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