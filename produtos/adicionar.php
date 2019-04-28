<?php
// Header
include_once '../ind/header.php';

include_once '../ind/message.php';

if(!isset($_SESSION['logado'])):
  header('Location: ../index.php');
endif;
?>
<div class= "container">
  <h1 class="display-4"> Novo Produto </h1>
  <div class="row justify-content-md-center">
    <dir class="col col-lg-6">
      <form action="php_action/create.php" method="POST">
        <div class="form-group">
          <label for="descricao">descricao</label>
          <input type="text" name="descricao" class="form-control" id="descricao">
        </div>
        <div class="form-group">
          <label for="detalhamento">detalhamento</label>
          <input type="text" name="detalhamento" class="form-control" id="detalhamento">
        </div>
        <div class="form-group">
          <label for="preco_vista">preco_vista</label>
          <input type="text" name="preco_vista" class="form-control" id="preco_vista">
        </div>
        <div class="form-group">
          <label for="preco_prazo">preco_prazo</label>
          <input type="text" name="preco_prazo" class="form-control" id="preco_prazo">
        </div>
        <div class="form-group">
          <label for="codigo_barras">codigo_barras</label>
          <input type="text" name="codigo_barras" class="form-control" id="codigo_barras">
        </div>
        <button type="submit" name="btn-cadastrar" class="btn btn-primary"> Cadastrar </button>
        <a href="../produtos.php" class="btn btn-success"> Lista de Produtos </a>
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
