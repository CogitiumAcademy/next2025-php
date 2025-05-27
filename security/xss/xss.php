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
    <h1>Faille XSS</h1>

    <?php
    if (isset($_POST["keyword"]) && !empty($_POST["keyword"])) {
        echo "<h2>Site non sécurisé</h2>";
        echo "Résultat(s) pour le mot clé : " . $_POST["keyword"];
    }
    ?>

    <h2>Non sécurisé</h2>
    <form action="" method="post">
        <input type="text" name="keyword" size="100">
        <input type="submit" value="Rechercher">
    </form>
</body>
</html>