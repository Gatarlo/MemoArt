<!DOCTYPE html>
<html>



<head>

    <title> Atelier MemoArt </title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/iconfont.css">
    <link rel="stylesheet" href="css/styleperso.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <meta name="description" content="Atelier pour tous, enfants et adultes, toutes activités artistiques." />
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>


<?php
include 'sidebar.php';
include 'session.php';
?>

<body>

<!-- Page de Garde / Page d'accueil -->
<div id="garde">

    <div class="container">
        <div class="row">

            <!-- Texte Page d'Accueil -->
            <div id="textepa">

                <!-- h1 : Titre Principal, Ne doit exister qu'en un seul exemplaire ! -->
                <h1 id="memoart">
                    Atelier MemoArt
                </h1>

                <!-- h2 : Pour les titres un peu moins importants que h1 -->
                <h2 id="soustitre">
                    Création Artistique et Culturelle
                </h2>

                <h3 class="soussoustitre">
                    17 Chemin des Aires 34600 BEDARIEUX<br/>
                    04 67 23 08 36<br/>
                    06 62 25 72 96<br/>
                    memo.art@hotmail.fr
                </h3>

            </div>

        </div>
    </div>
</div>
<!-- Fin Page de Garde -->

<!-- Début Page Présentation -->

<div id="presentation" class="separateur">

    <!-- Titre -->
    <div>
        <h3 class="titreh3"> Présentation </h3>
    </div>

    <!-- Cartes Activités -->
    <div>
        <div class="jht">
            <div>
                <div class="titrepres">
                    <p> Atelier Intergénérationnel </p>
                </div>

                <div class="contenupres">
                    <p> Un lien pour tous ! Tous âges, tout public, tous niveaux (Débutants ou confirmés)<br/> (Groupe de 10 personnes au maximum) </p>
                </div>
            </div>

            <div>
                <div class="titrepres">
                    <p> Esprit </p>
                </div>

                <div class="contenupres">
                    <p> Echange - Partage - Convivialité - Créativité </p>
                    <p class="blockquote"> La peinture est un art... une puissance qui a un but et doit servir à l'évolution et l'affinement de l'âme humaine </p>
                    <p class="auteur"> Kandisky </p>
                </div>
            </div>

            <div>
                <div class="titrepres">
                    <p> Objectifs </p>
                </div>

                <div class="contenupres">
                    <ul> Initiation aux différentes techniques pour développer sa créativité, son projet personnel. </ul>
                    <ul> Exposer son travail artistique suivant le thème annuel de l'atelier. </ul>
                    <ul> Aller à la rencontre des autres artistes. </ul>
                    <ul> S'approprier l'oeuvre de grands peintres. </ul>
                    <ul> Participer de manière créative à la vie de la cité. </ul>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Fin Page Présentation -->

<!-- Début Page Activité -->

<div id="activites" class="separateur">

    <!-- Titre -->
    <div>
        <h3 class="titreh3"> Activités </h3>
    </div>

    <!-- Cartes Activités -->
    <div class="rowact">
        <div class="column containeract imgact">
            <img src="ressources/ar.jpg" alt="Arts Créatifs">
            <div class="overlay">Arts Créatifs</div>
        </div>

        <div class="column containeract imgact">
            <img src="ressources/aquarelle.jpg" alt="Aquarelle">
            <div class="overlay">Aquarelle</div>
        </div>

        <div class="column containeract imgact">
                <img src="ressources/dessin.jpg" alt="Dessin">
                <div class="overlay">Dessin</div>
        </div>

        <div class="column containeract imgact">
            <img src="ressources/fresque.jpg" alt="Fresque">
            <div class="overlay">Fresque</div>
        </div>

        <div class="column containeract imgact">
            <img src="ressources/pastel.jpg" alt="Pastel Sec">
            <div class="overlay">Pastel Sec</div>
        </div>

        <div class="column containeract imgact">
            <img src="ressources/peinture.jpg" alt="Peinture Abstraite et Figurative">
            <div class="overlay">Peinture</div>
        </div>

        <div class="column containeract imgact">
            <img src="ressources/sculpture.jpg" alt="Sculpture">
            <div class="overlay">Sculpture</div>
        </div>

        <div class="column containeract imgact">
            <img src="ressources/stage.jpg" alt="Techniques Mixtes">
            <div class="overlay">STAGES</div>
        </div>

    </div>
</div>



</body>


</html>