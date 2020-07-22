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
<div id="courstarifsaccès" class="separateur">

    <!-- Titre -->
    <div>
        <h3 class="titreh3"> Horaires - Tarifs </h3>
    </div>


    <div class="jht">
        <div>
            <div class="titrepres">
                <p> Jours </p>
            </div>

            <div class="contenupres">
                <p> Du Lundi au Vendredi </p>
                <p> Stages : 1 Samedi par Mois </p>
            </div>
        </div>

        <div>
            <div class="titrepres">
                <p> Horaires </p>
            </div>

            <div class="contenupres">
                <p> A la carte </p>
                <p> Contact de 8h à 22h </p>
            </div>
        </div>

        <div>
            <div class="titrepres">
                <p> Tarifs </p>
            </div>

            <div class="contenupres">
                <p> Dégressifs selon la formule choisie </p>
            </div>
        </div>
    </div>

    <div class="containercards">
        <div class="card">
            <h4 class="titreh4"> Formule à la carte </h4>

            <p class="prix"> 1h : 00 € </p>
            <p class="prix"> 2h : 00 € </p>
            <p class="prix"> 3h : 00 € </p>
        </div>

        <div class="card">
            <h4 class="titreh4"> Formule Découverte </h4>

            <p> 5 séances</p>
            <p class="prix"> 5 x 1h : 00 € </p>
            <p class="prix"> 5 x 2h : 00 € </p>
        </div>

        <div class="card">
            <h4 class="titreh4"> Formule Fidélité </h4>

            <p> Au trimestre, 10 scéances </p>
            <p class="prix"> 1h : 00 € <del class="promo"> 00 € </del> </p>
            <p class="prix"> 2h : 00 € <del class="promo"> 00 € </del> </p>
        </div>
    </div>

</div>

</body>


</html>