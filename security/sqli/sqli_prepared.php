<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Page vulnerable</h1>

    <?php
        define("DB_HOST", "localhost");
        define("DB_NAME", "next_2025_security");
        define("DB_USER", "root");
        define("DB_PASSWORD", "");
        define("DB_CHARSET", "utf8");

        try {
            $dns = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
            $options = array(
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES " . DB_CHARSET,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
            $pdo = new PDO($dns, DB_USER, DB_PASSWORD, $options);
        } catch (Exception $e) {
            die("Connexion impossible : " . $e->getMessage());
        }

        var_dump($_POST);

        try {
            $query = "SELECT u.login, a.type, a.amount FROM accounts AS a LEFT JOIN users AS u ON a.id_users = u.id WHERE u.login = :login AND u.pass = :password ORDER BY 1,3";

            var_dump($query);

            $curseur = $pdo->prepare($query);
            $curseur->bindParam(':login', $_POST['login'], PDO::PARAM_STR);
            $curseur->bindParam(':password', $_POST['password'], PDO::PARAM_STR);
            $curseur->execute();

            $data = $curseur->fetchAll();
            //var_dump($data);
            echo '<h2>Le résultat</h2>';
            echo '<table border="1">';
            echo '<tr><th>Login</th><th>Type compte</th><th>Montant</th></tr>';
            foreach ($data as $onedata) {
                echo '<tr>';
                echo '<td>' . $onedata[0] . '</td>';
                echo '<td>' . $onedata[1] . '</td>';
                echo '<td>' . $onedata[2] . '</td>';
                echo '</tr>';
            }
            echo '</table>';

        } catch (Exception $e) {
            die("Erreur Mysql : " . $e->getMessage());
        }

    ?>
   
</body>
</html>