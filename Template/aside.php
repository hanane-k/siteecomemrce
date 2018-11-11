<!-- Ici démarre le code de votre aside -->
<!-- user informations -->
<div class="float text-center row p-0 m-0">
    <aside class="card mb-5 ml-auto" style="width: 18rem;">
        <img class="card-img-top mb-5" src="img/avatar.png" alt="image d'utilisateur">
        <div class="card-body">
            <p class="card-text">
                <?php
                
                    echo "Bonjour : " . $_SESSION["user"]["name"] ."<br>";
                    echo "plus d'info : " ."<br>";
                    echo "Mot de passe : " . $_SESSION["user"]["password"] ."<br>";
                    echo "Status : " . $_SESSION["user"]["status"] ."<br>";
                    echo "Sexe : " . $_SESSION["user"]["sexe"] ."<br>";
                    echo "total : " . $_SESSION["total"];
                ?>
            </p>
            <a href="logout.php"><button type="button" class="btn btn-danger">Déconnexion</button></a>
        </div>
    </aside>

