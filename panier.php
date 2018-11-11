<?php
session_start();
include "Template/header.php";
include "Template/aside.php";?>
        <?php
        foreach ($_SESSION["panier"] as $key => $product) {
        ?>
            <div class="col-12 col-md-6 col-lg-4 mr-0">
                <div class="card">
                    <img class="card-img-top" src="tile.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product["name"] ?></h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Prix : <?php echo $product["price"] ?></li>
                            <li class="list-group-item">Fabriqué en : <?php echo $product["made_in"] ?></li>
                            <li class="list-group-item">Catégorie : <?php echo $product["category"] ?></li>
                            <a href="suppressionProduitPanier.php?key=<?php echo $key;?>" class='btn btn-primary'> Retirer du panier</a>
                        </ul>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
<?php
include "Template/footer.php";
?>