<!-- Voici la page qui va recevoir les données du formulaire, les traiter et rediriger l'utilisateur vers la page adéquate -->

  <?php 

require "function.php";
if (!empty($_POST)){
foreach ($_POST as $key => $value) {
  $_POST[$key] = htmlspecialchars($value);
}

$users = getUsers();
foreach ($users as $key => $user) {
  if (($user["name"] === $_POST["name"]) && ($user["password"] === $_POST["password"])) {
    session_start();
    $_SESSION["user"] = $user;
    $_SESSION["panier"] = [];
    $_SESSION["total"] = 0;
    header("Location: products.php");
    exit;
  }
}
header("Location: index.php?message=Attention je ne connais pas ces identifiants, essayez une nouvelle fois");
exit;
}
?>