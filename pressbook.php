<!DOCTYPE html>
<html>



<head>

    <title> Atelier MemoArt </title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/iconfont.css">
    <link rel="stylesheet" href="css/styleperso.css">

    <meta name="description" content="Atelier pour tous, enfants et adultes, toutes activités artistiques." />
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<?php
include 'sidebar.php';
include 'session.php';

$host = "localhost";
$dbname = "actualites";
$login = "root";
$password = "";

$bdd = new PDO ('mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8',
    $login, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$articles=$bdd->query('SELECT * FROM pressbook ORDER BY pb_dateajout DESC');
?>

<body>

<!-- Début Page Actualité -->
<div id="pressbook" class="separateur">

    <!-- Titre -->
    <div>
        <h3 class="titreh3"> PressBook </h3>
    </div>

    <?php
    if (isset($_SESSION["utilisateur"]) && !empty(["utilisateur"] && $_SESSION["utilisateur"] == "MemoArt")) {
        ?>

        <a href="./ajouterpressbook.php" class="boutoncommun" id="boutonannonceposition"> Ajouter une article de presse </a>
    <?php } else {} ?>

    <!-- Affichage des Articles -->
    <?php while ($article = $articles->fetch()) { ?>
        <div class="blocact">

            <?php if ( isset ($article['pb_path']) != NULL) { ?>
                <a href ="<?= $article['pb_path']; ?>">
                    <img src="<?= $article['pb_path'] ?>" class="colonne" id="imagepressbook" alt="Voir"/>
                </a>
            <?php } ?>

        </div>
    <?php } ?>



</div>

</body>


</html>