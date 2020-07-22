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

?>

<body>

<div id="connexion" class="separateur">

    <!-- Titre -->
    <div>
        <h3 class="titreh3"> Connexion </h3>
    </div>


    <!-- Formulaire de Connexion -->
    <div class="blocact">
        <form action="connect.php" method="POST">
            <div>
                <label for="pseudo" class="titreform"> Identifiant </label> <br/>
                <input type="text" size="23" class="inputtexte" name="pseudo" placeholder="Entrez Votre Identifiant"  />
            </div> <br/>

            <div>
                <label for="motdepasse" class="titreform"> Mot de passe </label> <br/>
                <input type="password" size="23" class="inputtexte" name="motdepasse" placeholder="Entrez Votre Mot De Passe"  />
            </div> <br/>

            <input type="submit" value="Se Connecter" class="boutonconnecter" />
        </form>
    </div>


</div>

</body>

</html>