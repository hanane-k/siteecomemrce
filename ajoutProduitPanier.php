<?php
include "Template/header.php";
session_start();
// require "Template/aside.php"
?>

<?php

$id = $_GET['id'];
// $products = getProducts();
if ($product['id'] == $id) {
                    echo "Nom du produit : " . " " . $product['name'] . "<br>";
                    echo "Le Prix : " . $product['price'] . "<br>";
                    echo "La Catégorie : " . $product['category'] . "<br>";
                    echo "Fabriqué en : " . $product['made_in'] . "<br>";
}
?>

<?php
include "Template/footer.php";
?>