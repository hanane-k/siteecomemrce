<!-- voici la page qui n'est accessible que si l'utilisateur est connecté, qui affiche les produit et les informations sur l'utilisateur -->

<!-- header -->

<?php
    // demarrage de la session
    session_start();
    // charger le header
    include "Template/header.php";
    // charger le aside
    include "Template/aside.php";
    // charger le header
    require "function.php";

    $products = getProducts();
    if(!isset($_SESSION["user"])) {
        header ("location: index.php");
        exit;
    }
                 

?>

<!-- products -->

    <div class="row container m-auto">
        <!-- afficher tout les produits -->
        <?php
                foreach ($products as $key => $product) {
        ?>
        <div class="col-12 col-md-6 col-lg-4 mb-5">
            <div class="card">
                <img class="card-img-top" src="tile-wide.png" alt="image du produit">
                <div class="card-body p-0 text-center">
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
        <!-- pour lier l'affichage du détail avec le produit correspend -->
                    <?php echo "<a class='btn btn-primary mb-2' href='single.php?id=" . $product['id'] . "' >plus de détail</a>";?>
                </div>
            </div>
        </div>    
                    <?php
                        }
                    ?>
    </div>
</div>

    <!-- charger le footer -->
<?php
    include "Template/footer.php";
?>
    