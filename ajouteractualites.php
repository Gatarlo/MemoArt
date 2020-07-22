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
<div id="actualites" class="separateur">

    <!-- Titre -->
    <div>
        <h3 class="titreh3"> Nouvelles Actualités </h3>
    </div>

    <!-- Insertion d'Articles -->
    <div class="blocact">
        <form action="insertion.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="titre" class="titreform"> Titre : </label> <br/>
                <input type="text" size="50" class="inputtexte" name="titre" placeholder="Titre" required>
            </div> <br/>

            <div>
                <label for="contenu" class="titreform"> Contenu : </label> <br/>
                <textarea type="text" rows="10" cols="50" class="inputtexte" name="contenu" placeholder="Entrer ici le contenu principal." required></textarea>
            </div> <br/>

            <div>
                <label for="nomFichier" class="titreform"> Choisissez la photo : </label> <br/>
                <input type="file" name="nomFichier" placeholder="Entrez le fichier"/>
            </div> <br/>

            <div>
                <input type="submit" value="Poster !" class="boutoncommun" style="margin-bottom: 1em">
            </div>
        </form>

    </div>

</div>

</body>


</html>