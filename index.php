<?php
//header
include_once 'ind/header.php';
//message
include_once 'ind/message.php';

?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light"> Login </h3>
    <form action="ind/login.php" method="POST">
      <div class="input-field col s12">
        <input type="text" name="matricula" id="matricula">
        <label for="matricula">matricula</label>
      </div>

      <div class="input-field col s12">
        <input type="password" name="password" id="password">
        <label for="password">senha</label>
      </div>

      <button type="submit" name="btn-login" class="btn"> logar </button>
    </form>
    
  </div>
</div>

<?php
// Footer
include_once 'ind/footer.php';
?>
