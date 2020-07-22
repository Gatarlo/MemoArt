<?php
/**
 * Créé par A. Arthur
 *
 * A Pézenas
 *
 * Le 02 juin 2019
 **/
?>
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
?>

<body>

<!-- Début Page Actualité -->
<div id="pressbook" class="separateur">

    <!-- Titre -->
    <div>
        <h3 class="titreh3"> Nouvel Article </h3>
    </div>

    <!-- Insertion d'Articles -->
    <div class="blocact">
        <form action="nouvelarticle.php" method="post" enctype="multipart/form-data">

            <div>
                <label for="nomFichier" class="titreform" style="margin-bottom: 1em"> Choisissez la photo : </label> <br/>
                <input type="file" name="nomFichier" placeholder="Entrez le fichier" required/>
            </div> <br/>

            <div>
                <input type="submit" value="Poster !" class="boutoncommun" style="margin-bottom: 1em">
            </div>
        </form>

    </div>



</div>

</body>


</html>