<!-- header -->

<?php
  include "Template/header.php";
?>
<?php
    if(isset($_GET["message"])) {
    $message = $_GET["message"];
    echo "<p> Attention : $message</p>";
}
?>

<!-- formular -->
<form action="login.php" method="post">
  <div class="form-group">
    <label for="name" class="ml-3">Nom : </label>
    <input type="name" class="form-control" name="name" aria-describedby="nameHelp" placeholder="Entrer votre nom...">
  </div>
  <div class="form-group">
    <label for="password" class="ml-3">Mot de passe : </label>
    <input type="password" class="form-control" name="password" placeholder="Entrer votre mot de passe...">
  </div>
  <button type="submit" class="btn btn-primary">Valider</button>
</form>

<!-- footer -->

<?php
include "Template/footer.php";
?>
