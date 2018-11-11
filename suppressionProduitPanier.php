<?php 
session_start();
require "function.php";
?>

<?php
// recupérer l'key du l'url
$key = $_GET['key'];

unset($_SESSION['panier'][$key]);
header("location: panier.php");
exit;

 ?>