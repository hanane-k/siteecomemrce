<!-- voici la page qui n'est accessible que si l'utilisateur est connecté, qui affiche les produit et les informations sur l'utilisateur -->

<!-- header -->

<?php
    include "Template/header.php";
?>
<?php
    require "function.php";
    $products = getProducts();
?>

<!-- user informations -->
<div class="float text-center row p-0 m-0">
    <aside class="card mb-5 ml-auto" style="width: 18rem;">
        <img class="card-img-top mb-5" src="img/avatar.png" alt="image d'utilisateur">
        <div class="card-body">
            <p class="card-text">
                <?php
                    session_start();
                    echo "Bonjour : " . $_SESSION["user"]["name"] ."<br>";
                    echo "plus d'info : " ."<br>";
                    echo "Mot de passe : " . $_SESSION["user"]["password"] ."<br>";
                    echo "Status : " . $_SESSION["user"]["status"] ."<br>";
                    echo "Sexe : " . $_SESSION["user"]["sexe"] ."<br>";
                ?>
            </p>
        </div>
    </aside>


<!-- products -->

    <?php

    ?>
    <div class="row container m-auto">
                        <?php
                                foreach ($products as $key => $product) {
                        ?>
        <div class="col-12 col-md-6 col-lg-4 mb-5">
            <div class="card">
                <img class="card-img-top" src="tile-wide.png" alt="image du produit">
                <div class="card-body p-0 text-center">
                    <p class="card-text p-1"><?php
                                    echo "Nom du produit : " . " " . $product["name"] . "<br>";
                                    echo "Le Prix : " . $product["price"] . "<br>";
                                    echo "La Catégorie : " . $product["category"] . "<br>";
                                    echo "Fabriqué en : " . $product["made_in"] . "<br>";
                          
                        ?></p>

                    <a href="#" class="btn btn-primary mb-2">Go somewhere</a>
                </div>
            </div>
        </div>    
                        <?php
                            }
                        ?>
    </div>
</div>


<?php
    include "Template/footer.php";
?>
    