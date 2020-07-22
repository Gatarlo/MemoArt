<?php

session_start();

if (isset($_SESSION["utilisateur"]) && !empty(["utilisateur"])) {
    ?>

    <a href="./deconnexion.php" class="connexion_session"> Déconnexion </a>

    <?php
} else {
    ?>

    <a href="./choixconnexioninscription.php" class="connexion_session"> Connexion / Inscription </a>

<?php }
?>