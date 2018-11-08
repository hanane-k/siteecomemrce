<?php
    session_start();
    include "Template/header.php";
    include "Template/aside.php";

?>

<?php
    require "function.php";
    $products = getProducts();
    $id = $_GET["id"];
    if (empty($_SESSION["user"])) {
        header ("location: index.php");
        exit;
    }
?>
<?php
    foreach ($products as $key => $product) {
        if ($product['id'] == $id) {
?>
<div class="col-12 col-md-6 col-lg-4 mb-5">
    <div class="card">
        <img class="card-img-top" src="tile-wide.png" alt="image du produit">
        <div class="card-body p-0 text-center">
            <p class="card-text p-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p class="card-text p-1">
            <?php
                    echo "Nom du produit : " . " " . $product['name'] . "<br>";
                    echo "Le Prix : " . $product['price'] . "<br>";
                    echo "La Catégorie : " . $product['category'] . "<br>";
                    echo "Fabriqué en : " . $product['made_in'] . "<br>";
            ?></p>
<!-- pour verifier si le produit est disponible ou non -->
            <?php
                if ($product['stock']) {
            ?>
            <h4 style="color:green"> <?php echo "disponible";?> </h4>
            <?php
                }
                else {?>
                    <h4 style="color:red"> <?php echo "non disponible";?></h4>
                <?php
                }
            ?>
            <?php
                if ($product['stock']) {
            ?>
            <a href="ajoutProduitPanier.php?id=<?php echo $id; ?>" class="btn btn-primary mb-2">Ajouter au panier</a>
            <?php
                }
            ?>
        </div>
    </div>
</div>
<?php
    }
    }
?>

<?php
    include "Template/footer.php";
?>