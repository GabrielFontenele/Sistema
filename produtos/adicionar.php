<?php
// Header
include_once 'includes/header.php';
?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light"> Novo Produto </h3>
    <form action="php_action/create.php" method="POST">
      <div class="input-field col s12">
        <input type="text" name="descricao" id="descricao">
        <label for="descricao">descricao</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="detalhamento" id="detalhamento">
        <label for="detalhamento">detalhamento</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="preco_vista" id="preco_vista">
        <label for="preco_vista">preco_vista</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="preco_prazo" id="preco_prazo">
        <label for="preco_prazo">preco_prazo</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="codigo_barras" id="codigo_barras">
        <label for="codigo_barras">codigo_barras</label>
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
      <a href="../produto.php" class="btn green"> Lista de Produtos </a>
    </form>
    
  </div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
