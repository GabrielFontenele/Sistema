<?php
//conexao
include_once 'db_connect.php';
//header
include_once 'ind/header.php';
//message
include_once 'ind/message.php';
if(!isset($_SESSION['logado'])):
	header('Location: index.php');
endif;

?>
<div class= "row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> venda</h3>
		<form action="vendas/create.php" method="POST">
			<div class = "col s8">
				<label for="produtos_id">Produto</label>	
				<select name="produtos_id" id="produtos_id">
					<option value="" disabled selected>Escolha um Produto</option>
					<?php
					$sql ="SELECT * FROM produtos";
					$resultadoP= mysqli_query($connect, $sql);
					if(mysqli_num_rows($resultadoP) > 0):
						while($dados = mysqli_fetch_array($resultadoP)):
							$prodinfo[$dados['id']] = $dados;
							?>
							<option value=<?php echo $dados['id']; ?>><?php echo $dados['descricao']; ?></option>
							<?php 
						endwhile;
					endif;?>
				</select>
			</div>
			<div class="input-field col s4">
				<input type="number" name="quantidade" min="1" max="99" value="1">
				<label for="quantidade">quantidade</label>
			</div>
			<div class = "col s12">
				<label for="clientes_id">Cliente</label>
				<select name="clientes_id">
					<option value="" disabled selected>Escolha um Cliente</option>
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
				<select name="forma_pagamento" id="forma_pagamento">
					<option value="" disabled selected>Forma de pagamento</option>
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
				<span class="blue-text text-darken-2">valor total:</span>
				<span  id="valor_totall"></span>
				<input type="hidden" id="valor_total" name="valor_total"><!– TODO back end –> 
			</div>
			<div class = "row">
				<button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
				<a href="home.php" class="btn green"> Home </a>
			</div>	
			<div id="dropdown-result" style="display: none;"></div>
		</form>
	</div>
</div>

<div class="col s6 offset-s8" align="right">
    <a href="logout.php" align="right" class="btn - red" >Sair</a>
</div>
</body>
</html>
<?php
include_once 'ind/footer.php';
?>

<script>
	var quantidade = 1;
	var forma_pagamento;
	var produtos_id;
	var valor_total;
	var prodinfo = <?php echo json_encode($prodinfo) ?>;

	document.getElementsByName('quantidade')[0].addEventListener('change',function(){
		quantidade = this.value;
		valor_totalUp();
	},false);
	document.getElementById('forma_pagamento').addEventListener('change', function(){
		forma_pagamento = this.value;
		valor_totalUp();
	}, false);
	document.getElementsByName('produtos_id')[0].addEventListener('change',update_text,false);
	function update_text(evt){
		var first_element = evt.target;
		var selection = first_element.options[first_element.selectedIndex].value;
    //do math:
    produtos_id = +selection; //this cast selection as number and not as String
    valor_totalUp();
};

function valor_totalUp(){
	var retn;
	if(typeof quantidade !== "undefined" && typeof produtos_id !== "undefined" && typeof forma_pagamento !== "undefined" )
	{
		if(forma_pagamento ==="DINHEIRO"){
			retn =parseFloat(quantidade)*parseFloat(prodinfo[produtos_id][3]);
		}else{
			retn =parseFloat(quantidade)*parseFloat(prodinfo[produtos_id][4	]);
		}
		document.getElementById("valor_total").value = retn;
		document.getElementById("valor_totall").innerHTML = retn;
	} 
}
</script>
