<?php
//conexao
include_once 'db_connect.php';
//header
include_once 'clientes/includes/header.php';
//message
include_once 'clientes/includes/message.php';
?>
<div class= "row">
  <div class="col s12 m6 push-m3">
    <h3 class="light"> Clientes</h3>
    <table class="striped">
      <thead>
        <th>id:</th>
        <th>nome:</th>
        <th>cpf:</th>
        <th>rg:</th>
        <th>endereco:</th>        
        <th>numero:</th>
        <th>estado:</th>
        <th>cidade:</th>
        <th>renda:</th>
        <th>usuarios_id:</th>     
        <th>created:</th>
        <th>status:</th>
      </thead>
      <tbody>
        <?php
        $sql ="SELECT * FROM clientes";
        $resultado= mysqli_query($connect, $sql);
        if(mysqli_num_rows($resultado) > 0):

        while($dados = mysqli_fetch_array($resultado)):
        ?>
        <tr>
          <td><?php echo $dados['id']; ?></td>
          <td><?php echo $dados['nome']; ?></td>  
          <td><?php echo $dados['cpf']; ?></td>  
          <td><?php echo $dados['rg']; ?></td>  
          <td><?php echo $dados['endereco']; ?></td>
          <td><?php echo $dados['numero']; ?></td>  
          <td><?php echo $dados['estado']; ?></td>  
          <td><?php echo $dados['cidade']; ?></td>  
          <td><?php echo $dados['renda']; ?></td>  
          <td><?php echo $dados['usuarios_id']; ?></td>  
          <td><?php echo $dados['created']; ?></td>  
          <td><?php echo $dados['status']; ?></td>  

          <td><a href="clientes/editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
          <td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

          <!-- Modal Structure -->
          <div id="modal<?php echo $dados['id']; ?>" class="modal">
            <div class="modal-content">
              <h4>Opa!</h4>
              <p>Tem certeza que deseja excluir esse cliente?</p>
            </div>
            <div class="modal-footer">
              <form action="clientes/php_action/delete.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
                <button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
              </form>
            </div>
          </div>
        </tr>
      <?php 
      endwhile;
      else: ?>
        <tr>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
        </tr>
      <?php  
      endif;
      ?>
      </tbody>
    </table>
    <br>
    <a href="clientes/adicionar.php" class="btn">Adicionar cliente</a>
    <a href="home.php" class="btn green"> Home </a>
  </div>
</div>
<a href="logout.php">Sair</a>
</body>
</html>
<?php
include_once 'clientes/includes/footer.php';
?>
