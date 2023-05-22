<?php
    // Nous allons vérifier les informations
if (isset($_POST['email']) && (isset($_POST['password']))) {
    // On mets les variables
$email = $_POST['email'];
$password = $_POST['password'];
    // Connection à la base de données
$db_host = "localhost";
$db_user = "root";
$db_password = "root";
$db_name = "site";
$con = mysqli_connect ($db_host, $db_user, $db_password, $db_name);
    // Requete
$req = mysqli_query ($con , "SELECT * FROM users WHERE email='$email' AND password='$password'");

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Page de connection administrateur</title>
</head>

<header>
    <a href="about.html" class="info" role="button">A propos de nous</a>
    <a href="admin.php" class="info" role="button">Connection</a>
    <a href="engagement.html" class="info" role="button">Nos engagements</a>
    <a href="carte.html" class="info" role="button">Notre carte</a>
    <a href="reservation.html" class="info" role="button">Réservation</a>
    <a href="accueil.html" class="info" role="button">Accueil</a>
</header>

<body>

    <div class="container">
        <div class="container-left">
            <img class="img" src="image/img3.jpg" alt="">
        </div>
        <div class="container-right" id="container">
            <div class="login" id="sign-up-container">
                <form action="" method="POST">
                    <h1 class="title">Se connecter</h1>
                    <button>Utiliser un compte gmail</button>
                    <input type="text" placeholder="Nom*">
                    <input type="email" placeholder="Email*" name="email">
                    <input type="password" placeholder="Mot de passe*" name="password">
                    <input type="checkbox" placeholder="Montrer Mot de passe*">
                    <button name="bouton-valider">Connection</button>
                </form>
                <form action="" method="POST">
                    <h1 class="title">Créer un compte</h1>
                    <button>Utiliser un compte gmail</button>
                    <input type="text" placeholder="Nom*">
                    <input type="email" placeholder="Email*" name="email">
                    <input type="password" placeholder="Mot de passe*" name="password">
                    <input type="checkbox" placeholder="Montrer Mot de passe*">
                    <button>Créer un compte</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>