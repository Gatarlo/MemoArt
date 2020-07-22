<?php

include_once ("bdd.php");
$bdd=getDatabase();

//Regex minuscules : (?=.*[a-z])
//Regex majuscules : (?=.*[A-Z])
//Regex chiffres : (?=.*[0-9])
//Regex caractères spéciaux : (?=.*\W)

//formule de conditionnement : preg_match('#^Regex.{nombres_caractères_minimum,}$#', variable_à_vérifier)

$pseudo = $_POST['pseudo'];
$motdepasse = password_hash($_POST['motdepasse'], PASSWORD_DEFAULT);
$mail = $_POST ['mail'];
$idcompte = NULL;
$nbInsert = 0;

if (isset($_POST['pseudo'], $_POST['motdepasse'], $_POST['mail'])) {

    if (strlen($_POST['pseudo']) >= 5) {

        if ($_POST['motdepasse'] == $_POST['motdepasse2']) {

            if ($_POST['motdepasse'] != $_POST['pseudo']) {

                if (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{6,}$#', $_POST['motdepasse'])) {

                    /* Ajout du compte dans la Base de Donnée */
                    $stmt = $bdd->prepare("INSERT INTO comptes(pseudo, motdepasse, mail, idcompte) VALUES(:pPseudo, :pMotdepasse, :pMail, :pIdcompte)");
                    $stmt->bindParam(':pPseudo', $pseudo);
                    $stmt->bindParam(':pMotdepasse', $motdepasse);
                    $stmt->bindParam(':pMail', $mail);
                    $stmt->bindParam(':pIdcompte', $idcompte);
                    $nbInsert = $stmt->execute();

                    var_dump($pseudo);
                    var_dump($motdepasse);
                    var_dump($mail);
                    var_dump($idcompte);

                    header("Location: connexion.php?id=" . $nbInsert);

                } else {
                    echo "Vérifiez que votre mot de passe contient 6 caractères minimum, une majuscule, une minuscle et un chiffre !";
                }

            } else {
                echo "Le pseudo doit être différent du Mot de Passe.";
            }

        } else {
            echo "Les mots de passe sont différents";
            var_dump(strlen($_POST['motdepasse']));
            var_dump(strlen($_POST['motdepasse2']));
        }

    } else {
        echo "Votre pseudo est trop court";
        var_dump($_POST['pseudo']);
    }
}