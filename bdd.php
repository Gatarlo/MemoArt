<?php
/**
 * Créé par A. Arthur
 *
 * A Pézenas
 *
 * Le 30 mai 2019
 **/


function getDatabase()
{
    $host = "localhost";
    $dbname = "actualites";
    $login = "root";
    $password = "";

    try {
        //Création de l'objet $bdd de type Pdo avec affichage des erreurs
        $bdd = new PDO ('mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8',
            $login, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch (Exception $e) {
        $bdd = null;
    }
    return $bdd;
}
