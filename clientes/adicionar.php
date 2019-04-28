<?php
// Header
include_once '../ind/header.php';

include_once '../ind/message.php';

if(!isset($_SESSION['logado'])):
  header('Location: ../index.php');
endif;

?>
<div class= "container">
  <h1 class="display-4"> Novo Cliente </h1>
  <div class="row justify-content-md-center">
    <dir class="col col-lg-6">
      <form action="php_action/create.php" method="POST">
        <div class="form-group">
          <label for="nome">nome</label>
          <input type="text" name="nome" class="form-control" id="nome">
        </div>
        <div class="form-group">
          <label for="cpf">cpf</label>
          <input type="text" name="cpf" class="form-control" id="cpf">
        </div>
        <div class="form-group">
          <label for="rg">rg</label>
          <input type="text" name="rg" class="form-control" id="rg">
        </div>
        <div class="form-group">
          <label for="endereco">endereco</label>
          <input type="text" name="endereco" class="form-control" id="endereco">
        </div>
        <div class="form-group">
          <label for="numero">numero</label>
          <input type="text" name="numero" class="form-control" id="numero">
        </div>
        <div class="form-group">
          <label for="estado">estado</label>
          <input type="text" name="estado" class="form-control" id="estado">
        </div>
        <div class="form-group">
          <label for="cidade">cidade</label>
          <input type="text" name="cidade" class="form-control" id="cidade">
        </div>
        <div class="form-group">
          <label for="renda">renda</label>
          <input type="text" name="renda" class="form-control" id="renda">
        </div>
        <button type="submit" name="btn-cadastrar" class="btn btn-primary">Cadastrar </button>
        <a href="../clientes.php" class="btn btn-success"> Lista de clientes </a>
      </form>
    </div>
  </div>
  <div class="col s6 offset-s8" align="right">
    <a href="../logout.php" align="right" class="btn btn-danger" >Sair</a>
  </div>
  <?php
// Footer
  include_once '../ind/footer.php';
  ?>