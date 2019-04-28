<?php
// Header
include_once '../ind/header.php';

include_once '../ind/message.php';

if(!isset($_SESSION['logado'])):
  header('Location: index.php');
endif;
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
      <button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
      <a href="../usuarios.php" class="btn green"> Lista de usuarios </a>
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