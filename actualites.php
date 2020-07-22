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
    $articles=$bdd->query('SELECT * FROM articles ORDER BY datepublication DESC');
?>

<body>

<!-- Début Page Actualité -->
<div id="actualites" class="separateur">

    <!-- Titre -->
    <div>
        <h3 class="titreh3"> Actualités </h3>
    </div>

    <?php
    if (isset($_SESSION["utilisateur"]) && !empty(["utilisateur"] && $_SESSION["utilisateur"] == "MemoArt")) {
    ?>

        <a href="./ajouteractualites.php" class="boutoncommun" id="boutonannonceposition"> Ajouter une Annonce </a>
    <?php } else {} ?>

    <!-- Affichage des Articles -->
    <?php while ($article = $articles->fetch()) { ?>
            <div class="blocact">

                <?php if ( isset ($article['path']) != NULL) { ?>
                    <a href ="<?= $article['path']; ?>">
                        <img src="<?= $article['path'] ?>" class="colonne" id="imagearticle" alt="Voir"/>
                    </a>
                <?php } ?>

                <div class="titreact"> <?= $article['titre'] ?> </div>
                <div class="contenuact"> <?= $article['contenu'] ?> </div>
                <div class="dateact" > <?= $article['datepublication'] ?> </div>
            </div>
    <?php } ?>



</div>

</body>


</html>