<?php
// Header
include_once 'includes/header.php';
?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light"> Novo Usuario </h3>
    <form action="php_action/create.php" method="POST">
      <div class="input-field col s12">
        <input type="text" name="nome" id="nome">
        <label for="nome">nome</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="cpf" id="cpf">
        <label for="cpf">cpf</label>
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
      <div class="input-field col s12">
        <input type="text" name="usuarios_id" id="usuarios_id">
        <label for="usuarios_id">usuarios_id</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="created" id="created">
        <label for="created">created</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="status" id="status">
        <label for="status">status</label>
      </div>
      <button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
      <a href="../clientes.php" class="btn green"> Lista de clientes </a>
    </form>
    
  </div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
