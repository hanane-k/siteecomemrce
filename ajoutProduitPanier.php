<?php
session_start();
require "function.php";
?>

<?php
// recupérer l'id du l'url
$id = $_GET['id'];
$products = getProducts();
// si le id entrer dans l'url correspend à l'id du produit ce dernier s'affiche
// function totalPrix() {
foreach ($products as $key => $value) {
   if ($id == $value['id']) {
       $product = $value;
       array_push($_SESSION['panier'], $product);
       function totalPrix() {
        $_SESSION["total"] = $_SESSION["panier"]['price'] + $_SESSION["total"];
        return $_SESSION["total"];
        }
       header("location: panier.php");
       exit;
   }
}
?>
