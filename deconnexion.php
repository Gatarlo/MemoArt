<?php
session_start();
session_destroy();

if (isset($_SESSION["utilisateur"])) {
    unset($_SESSION["utilisateur"]);
}

header("Location: index.php");
