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
<div class= "container-fluid">
  <div class="container-fluid">
    <h1 class="display-4">Clientes</h3>
    <table class="table table-dark table-hover">
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

          <td><a href="clientes/editar.php?id=<?php echo $dados['id']; ?>" class="btn btn-warning"><i class="material-icons">edit</i></a></td>
          <td><a href="#modal<?php echo $dados['id']; ?>" class="btn btn-danger modal-trigger"><i class="material-icons">delete</i></a></td>

          <!-- Modal Structure -->
          <div id="modal<?php echo $dados['id']; ?>" class="modal">
            <div class="alert alert-danger" role="alert">
              <h4>Opa!</h4>
              <p>Tem certeza que deseja excluir esse cliente?</p>
              <form action="clientes/php_action/delete.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
                <button type="submit" name="btn-deletar" type="button" class="btn btn-danger">Sim, quero deletar</button>
                <a href="#!" class="modal-action modal-close waves-effect btn btn-secondary">Cancelar</a>
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
    <a href="clientes/adicionar.php" class="btn btn-primary">Adicionar cliente</a>
    <a href="home.php" class="btn btn-success"> Home </a>
  </div>
</div>
<div class="col s6 offset-s8" align="right">
    <a href="logout.php" align="right" class="btn btn-danger" >Sair</a>
</div>
</body>
</html>
<?php
include_once 'ind/footer.php';
?>
