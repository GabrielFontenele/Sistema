<?php
// Header
include_once '../ind/header.php';

include_once '../ind/message.php';

if(!isset($_SESSION['logado'])):
  header('Location: index.php');
endif;
?>
<div class= "container">
  <h1 class="display-4"> Novo Usuario </h1>
  <div class="row justify-content-md-center">
    <dir class="col col-lg-6">
      <form action="php_action/create.php" method="POST">
        <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" class="form-control" name="nome" id="nome">
        </div>
        <div class="form-group">
          <label for="matricula">matricula</label>
          <input type="text" class="form-control" name="matricula" id="matricula">
        </div>
        <div class="form-group">
          <label for="senha">senha</label>
          <input type="password" class="form-control" name="senha" id="senha">
        </div>
        <button type="submit" name="btn-cadastrar" class="btn btn-primary"> Cadastrar </button>
        <a href="../usuarios.php" class="btn btn-success"> Lista de usuarios </a>
      </form>
    </dir>
  </div>
</div>
<div class="col s6 offset-s8" align="right">
  <a href="../logout.php" align="right" class="btn btn-danger"> Sair </a>
</div>
<?php
// Footer
include_once '../ind/footer.php';
?>