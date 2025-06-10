<?php
session_start();
if ($_SESSION['role'] != 'admin') {
    die("Interdit!");
}
if (!isset($_GET['token'])) {
    die("Token CSRF absent !");
}
if ($_GET["token"] != $_SESSION["token"]) {
    die("Token invalide !");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>La page vulnérable sans token</h1>

    <h2>L'enregistrement numéro <?= $_GET["id"] ?> est supprimé ! </h2>
</body>
</html>