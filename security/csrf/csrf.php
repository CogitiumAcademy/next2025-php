<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Faille CSRF</h1>
    <?php 
    $_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(6));
    var_dump($_SESSION); 
    ?>

    <a href="csrf_delete.php?id=12">Supprimer l'enregistrement 12 (sans token)</a><br>
    <a href="csrf_delete.php?id=12&token=<?= $_SESSION['token'] ?>">Supprimer l'enregistrement 12 (avec token)</a>
</body>
</html>