<!-- voici la page qui n'est accessible que si l'utilisateur est connecté, qui affiche les produit et les informations sur l'utilisateur -->

<!-- header -->

<?php
    include "Template/header.php";
?>
<?php
require "Model/function.php";
?>
<!-- user informations -->
<div class="float text-center row p-0 m-0">
    <aside class="card" style="width: 18rem;">
        <img class="card-img-top" src="img/avatar.png" alt="Card image cap">
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

    <div class="row container m-auto">
        <div class="col-12 col-md-6 col-lg-4 mb-5">
            <div class="card">
                <img class="card-img-top" src="tile-wide.png" alt="Card image cap">
                <div class="card-body p-0 text-center">
                    <p class="card-text p-2">
                        <?php
                            session_start();
                            echo "nom : " .$_SESSION["product"]["name"];
                            echo $_SESSION["product"]["price"];
                            echo $_SESSION["product"]["category"];
                            echo $_SESSION["product"]["made_in"];
                        ?>
                    </p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-5">
            <div class="card">
                <img class="card-img-top" src="tile-wide.png" alt="Card image cap">
                <div class="card-body p-0 text-center">
                    <p class="card-text p-2">
                        <?php
                            session_start();
                            echo "nom : " .$_SESSION["product"]["name"];
                            echo $_SESSION["product"]["price"];
                            echo $_SESSION["product"]["category"];
                            echo $_SESSION["product"]["made_in"];
                        ?>
                    </p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-5">
            <div class="card">
                <img class="card-img-top" src="tile-wide.png" alt="Card image cap">
                <div class="card-body p-0 text-center">
                    <p class="card-text p-2">
                        <?php
                            session_start();
                            echo "nom : " .$_SESSION["product"]["name"];
                            echo $_SESSION["product"]["price"];
                            echo $_SESSION["product"]["category"];
                            echo $_SESSION["product"]["made_in"];
                        ?>

                    </p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-5">
            <div class="card">
                <img class="card-img-top" src="tile-wide.png" alt="Card image cap">
                <div class="card-body p-0 text-center">
                    <p class="card-text p-2">
                        <?php
                            session_start();
                            echo "nom : " .$_SESSION["product"]["name"];
                            echo $_SESSION["product"]["price"];
                            echo $_SESSION["product"]["category"];
                            echo $_SESSION["product"]["made_in"];
                        ?>

                    </p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-5">
            <div class="card">
                <img class="card-img-top" src="tile-wide.png" alt="Card image cap">
                <div class="card-body p-0 text-center">
                    <p class="card-text p-2">
                        <?php
                            session_start();
                            echo "nom : " .$_SESSION["product"]["name"];
                            echo $_SESSION["product"]["price"];
                            echo $_SESSION["product"]["category"];
                            echo $_SESSION["product"]["made_in"];
                        ?>

                    </p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-5">
            <div class="card">
                <img class="card-img-top" src="tile-wide.png" alt="Card image cap">
                <div class="card-body p-0 text-center">
                    <p class="card-text p-2">
                        <?php
                            session_start();
                            echo "nom : " .$_SESSION["product"]["name"];
                            echo $_SESSION["product"]["price"];
                            echo $_SESSION["product"]["category"];
                            echo $_SESSION["product"]["made_in"];
                        ?>

                    </p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
    include "Template/footer.php";
?>
    