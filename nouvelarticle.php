<?php
/**
 * Créé par A. Arthur
 *
 * A Pézenas
 *
 * Le 30 mai 2019
 **/

require_once("bdd.php");

$bdd=getDatabase();

/* Image */

$fichier = basename($_FILES['nomFichier']['name']);
$dossier = __DIR__ . DIRECTORY_SEPARATOR . "ressources" . DIRECTORY_SEPARATOR ;
$index =strrpos($dossier, DIRECTORY_SEPARATOR);
$dossier = substr($dossier, 0, $index +1);

$extensions = array( 'jpg' , 'jpeg' , 'gif' , 'png', 'txt', 'pdf' );
$extensionUploaded = strtolower( substr( strrchr($_FILES['nomFichier']['name'],'.') ,1) );

/* Enregistrer le fichier sur le disque */

if (isset($_FILES['nomFichier'])) {

    /* Verification erreur */
    if ($_FILES['nomFichier']['error'] > 0) {
        // Erreur
        $erreur = 'Erreur.';
    }

    /* Verifier taille fichier */
    if (filesize($_FILES['nomFichier']['tmp_name']) > 5000000) {
        // Fichier trop grand : max 5 Mo
        $erreur = 'Le fichier est trop gros. Max 5 Mo.';
    }

    /* Vérification de l'extension */
    if (!in_array($extensionUploaded, $extensions)) {
        $erreur = 'Vous devez uploader un fichier de type jpg, jpeg, gif, png, txt ou pdf.';
    }

    if (!isset ($erreur)) {

        $fichier = strtr($fichier, 'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
        $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);

           $copied = move_uploaded_file($_FILES['nomFichier']['tmp_name'], $dossier . $fichier);
           echo 'Upload effectuée avec succès !';
           var_dump(($dossier . $fichier));

           /* Texte & Image */
           $art_id = NULL;
           $dossier = "ressources" . DIRECTORY_SEPARATOR;
           $path = $dossier . $fichier;
           $nbInsert = 0;

           $stmt = $bdd->prepare("INSERT INTO pressbook(pb_id, pb_dateajout, pb_path) VALUES(:pPb_id, NOW(), :pPb_path)");
           $stmt->bindParam(':pPb_id', $art_id);
           $stmt->bindParam(':pPb_path', $path);

           $nbInsert = $stmt->execute();
           var_dump($nbInsert);
           var_dump($path);


           header("Location: actualites.php?id=" . $nbInsert);

        }

    if (isset ($erreur)) {

        echo "Echec de l'upload ! <br>";
        echo $erreur;
        var_dump($erreur);
        var_dump($_FILES['nomFichier']);
    }
}
