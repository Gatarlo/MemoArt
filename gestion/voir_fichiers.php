<?php

/**
* Créé par A. Arthur
*
* A Pézenas
*
* Le 6 Juin 2019
**/

//J'ai retiré les commentaires pour que ce soit plus lisible...
$adresse="../ressources/";
$dossier=Opendir($adresse);
echo '<fieldset><legend>Liste des Images</legend><br>'; //Ouverture de fieldset
while ($Fichier = readdir($dossier))
{
    if ($Fichier != "." && $Fichier != "..") // Filtre anti-point !
    {
        echo '<a href='.$adresse.$Fichier.' target="_blank">'.$Fichier.'</a><br><br>';
    }
}
echo '<br></fieldset>'; //Fermeture du fieldset.
closedir($dossier);
?>