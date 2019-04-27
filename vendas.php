<?php
//conexao
include_once 'db_connect.php';
//header
include_once 'produtos/includes/header.php';
//message
include_once 'produtos/includes/message.php';
?>
<div class= "row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> venda</h3>
		<form action="vendas/create.php" method="POST">
			<div class="input-field col s12">
				<label for="matricula">matricula</label>
				<input type="text" name="matricula" id="matricula">
			</div>
			<div class = "col s8">
				<label for="produtos_id">Produto</label>	
				<select name="produtos_id" id="produtos_id">
					<?php
					$sql ="SELECT * FROM produtos";
					$resultado= mysqli_query($connect, $sql);
					if(mysqli_num_rows($resultado) > 0):
						while($dados = mysqli_fetch_array($resultado)):
							?>
							<option value=<?php echo $dados['id']; ?>><?php echo $dados['descricao']; ?></option>
							<?php 
						endwhile;
					endif;?>
				</select>
			</div>
			<div class="input-field col s4">
				<input type="number" name="quantidade" min="1" max="6">
				<label for="quantidade">quantidade</label>
			</div>
			<div class = "col s12">
				<label for="clientes_id">Cliente</label>
				<select name="clientes_id">
					<?php
					$sql ="SELECT * FROM clientes";
					$resultado= mysqli_query($connect, $sql);
					if(mysqli_num_rows($resultado) > 0):
						while($dados = mysqli_fetch_array($resultado)):
							?>
							<option value=<?php echo $dados['id']; ?>><?php echo $dados['nome']; ?></option>
							<?php 
						endwhile;
					endif;?>
				</select>
			</div>
			<div class = "col s12">
				<label for="forma_pagamento">forma_pagamento</label>
				<select name="forma_pagamento">
					<option value=DINHEIRO>DINHEIRO</option>
					<option value=CARTAO>CARTAO</option>
					<option value=CHEQUE>CHEQUE</option>
					<option value=BOLETO>BOLETO</option>
				</select>
			</div>
			<div class="input-field col s12">
				<label for="data">data</label>
				<input type="text" name="data" id="data">
			</div>
			<div class="input-field col s12">
				<label for="valor_total">valor_total</label>
				<input type="text" name="valor_total" id="valor_total">
			</div>
			<div class="input-field col s12">
				<label for="usuarios_id">usuarios_id</label>
				<input type="text" name="usuarios_id" id="usuarios_id">
			</div>
			<div class="input-field col s12">
				<label for="created">created</label>
				<input type="text" name="created" id="created">
			</div>
			<div class="input-field col s12">
				<label for="updated">updated</label>
				<input type="text" name="updated" id="updated">
			</div>
			<div class="input-field col s12">
				<label for="status">status</label>
				<input type="text" name="status" id="status">
			</div>
			<div class = "row">
			<button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
    		<a href="home.php" class="btn green"> Home </a>
			</div>	

		</form>
	</div>
</div>
<div>
	<a href="logout.php">Sair</a>
</div>
</body>
</html>
<?php
include_once 'produtos/includes/footer.php';
?>
<?php
if(isset($_POST['submit'])){
	$selected_val = $_POST['forma_pagamento'];  // Storing Selected Value In Variable
	echo "You have selected :" .$selected_val;  // Displaying Selected Value
}
?>