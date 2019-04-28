<?php
//header
include_once 'ind/header.php';
//message
include_once 'ind/message.php';

?>

<div class= "container">
  <h3 class="light"> Login </h3>
  <div class="row justify-content-md-center">
    <dir class="col col-lg-6">
      <form action="ind/login.php" method="POST">
        <div class="form-group">

          <label for="matricula">matricula</label>
          <input type="text" name="matricula" id="matricula"class="form-control">
        </div>

        <div class="form-group">
          <label for="password">senha</label>
          <input type="password" name="password" id="password"class="form-control">
        </div>
        <button type="submit" name="btn-login" class="btn btn-success"> logar </button>
      </form>
    </div>
  </div>
</div>

<?php
// Footer
include_once 'ind/footer.php';
?>
