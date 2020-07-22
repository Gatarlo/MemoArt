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
/**
 * Créé par A. Arthur
 *
 * A Pézenas
 *
 * Le 25 juin 2019
 **/
include 'sidebar.php';
include 'session.php';
?>

<body>

<!-- Début Page Actualité -->
<div id="contact" class="separateur">

    <!-- Titre -->
    <div>
        <h3 class="titreh3"> Contact </h3>
    </div>

    <div class="blocact">
        <form action="contactmail.php" method="POST">
            <div>
                <label for="name" class="titreform"> Nom </label> <br>
                <input type="text" size="50" class="inputtexte" name="name" placeholder="Nom - Prénom" required />

            </div> <br/>

            <div>
                <label for="mail" class="titreform"> Mail </label> <br>
                <input type="email" size="50" class="inputtexte" name="mail" placeholder="Mail" required />
            </div> <br/>

            <div>
                <label for="subject" class="titreform"> Objet </label> <br>
                <input type="text" size="50" class="inputtexte" name="subject" placeholder="Objet" required />
            </div> <br/>

            <div>
                <label for="message" class="titreform"> Sujet </label> <br>
                <textarea type="text" rows="5" cols="50" class="inputtexte" name="message" placeholder="Message." required></textarea>

            </div> <br/>

            <input type="submit" value="Envoyer" class="boutonconnecter" />
        </form>
    </div>

</div>

</body>


</html>