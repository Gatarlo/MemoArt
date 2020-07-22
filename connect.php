<?php
include_once ("bdd.php");
session_start();

if (isset($_POST["pseudo"])) {
    // 1 - On récupère les informations du formulaires
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $motdepasse = htmlspecialchars($_POST['motdepasse']);

    // 2 : Connexion à la BD
    $bdd = getDataBase();
    $connect = false;

    $stmt = $bdd->prepare ("SELECT * FROM comptes WHERE pseudo = :pPseudo");
    $stmt->bindParam(':pPseudo', $pseudo);
    $stmt->execute();

    $donnees = $stmt->fetch();

    // 5 - On compare le mot de passe en clair avec le mot de passe crypté grâce à la fonction password_verify
    if ($donnees && password_verify($motdepasse, $donnees["motdepasse"])) {
        $connect = true;
        // 6 - On conserve le login de l'utilisateur
        $_SESSION["utilisateur"] = $pseudo;

    } else {
        $connect = false;

    } if ($connect == false) {


        var_dump($pseudo);
        var_dump(strlen($_POST['motdepasse']));

    } else {

        header("Location: index.php");
    }
}
