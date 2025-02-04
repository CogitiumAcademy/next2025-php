<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
    ?>
    <?php include("header.php"); ?>
    <h1>Bonjour</h1>
    <h2>
        <?php
            $var1 = "WORLD";
            echo "Hello " . $var1 . " !";
        ?>
    </h2>
</body>
</html>