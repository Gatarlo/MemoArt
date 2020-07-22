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

<div id="inscription" class="separateur">

    <!-- Titre -->
    <div>
        <h3 class="titreh3"> Inscription </h3>
    </div>


    <!-- Formulaire de Connexion -->
    <div class="blocact">
        <form action="ajoutcompte.php" method="post">
            <div>
                <label for="pseudo" class="titreform"> Identifiant </label> <br/>
                <input type="text" size="23" class="inputtexte" name="pseudo" placeholder="Entrez Votre Identifiant" required />
            </div> <br/>

            <div>
                <label for="motdepasse" class="titreform"> Mot de passe (Requis : Majuscule, Minuscule, Chiffre, 6 caractères min) </label> <br/>
                <input type="password" size="23" class="inputtexte" name="motdepasse" id="motdepasse" placeholder="Entrez Votre Mot De Passe" required />
            </div> <br/>

            <div>
                <label for="motdepasse2" class="titreform"> Répétez Mot de passe </label> <br/>
                <input type="password" size="23" class="inputtexte" name="motdepasse2" id="motdepasse2" placeholder="Entrez Votre Mot De Passe" required />
            </div> <br/>

            <div>
                <label for="mail" class="titreform"> Mail </label> <br/>
                <input type="email" size="23" class="inputtexte" name="mail" placeholder="Entrez Votre Courriel" required />
            </div> <br/>

            <input type="submit" value="S'inscrire" class="boutonconnecter" />
        </form>
    </div>


</div>

</body>

</html>