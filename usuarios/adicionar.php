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
        <label for="nome">Nome</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="matricula" id="matricula">
        <label for="matricula">matricula</label>
      </div>

      <div class="input-field col s12">
        <input type="password" name="senha" id="senha">
        <label for="senha">senha</label>
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
      <a href="../usuarios.php" class="btn green"> Lista de usuarios </a>
    </form>
    
  </div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>