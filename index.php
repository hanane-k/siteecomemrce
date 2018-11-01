<!-- header -->

<?php
  include "Template/header.php";
?>
<h4 class="text-danger text-center mt-5 mb-5">
  <?php
      if(isset($_GET["message"])) {
      $message = $_GET["message"];
      echo "<p> Attention : $message</p>";
    }
  ?>
</h4>
<!-- formular -->
<div class="col-10 col-md-8 col-lg-6 m-auto">
  <form action="login.php" method="post">
    <div class="form-group mt-5">
      <label for="name" class="ml-3">Nom : </label>
      <input type="name" class="form-control" name="name" aria-describedby="nameHelp" placeholder="Entrer votre nom...">
    </div>
    <div class="form-group">
      <label for="password" class="ml-3">Mot de passe : </label>
      <input type="password" class="form-control" name="password" placeholder="Entrer votre mot de passe...">
    </div>
    <button type="submit" class="btn btn-primary mb-5">Valider</button>
  </form>
</div>
<!-- footer -->

<?php
include "Template/footer.php";
?>
