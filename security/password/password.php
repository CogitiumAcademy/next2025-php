<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sécurité des mots de passe</h1>

    <h2>Algos disponibles</h2>
    <?php
    var_dump(password_algos());
    ?>

    <h2>Algos anciens</h2>

    <h3>Algo MD5</h3>
    <?php
    $md5 = md5('Philippe66!');
    $md5bis = md5('123456');
    var_dump($md5);
    var_dump($md5bis);
    ?>

    <h3>Algo MD5 + Salt</h3>
    <?php
    define('SALT', 'ahqky');
    $md5 = md5('123456');
    $md5salt = md5('123456' . SALT);
    var_dump($md5);
    var_dump($md5salt);
    ?>

    <h3>Algo SHA1 + Salt</h3>
    <?php
    define('SALT2', 'abcdefgh');
    $sha1 = sha1('123456');
    $sha1salt = sha1('123456' . SALT2);
    var_dump($sha1);
    var_dump($sha1salt);
    ?>

    <h3>Algo Crypt DES</h3>
    <?php
    define('SALT3', 'abcdefgh');
    $crypt = crypt('123456', SALT3);
    $crypt2 = crypt('123456', SALT3);
    var_dump($crypt);
    var_dump($crypt2);
    ?>

    <h2>Algos actuels</h2>
    
    <h3>Algo default</h3>
    <?php
    $hash_default = password_hash('123456', PASSWORD_DEFAULT);
    $hash_default2 = password_hash('123456', PASSWORD_DEFAULT);
    var_dump($hash_default);
    var_dump($hash_default2);
    ?>

    <h3>Algo bcrypt</h3>
    <?php
    $hash_bcrypt = password_hash('123456', PASSWORD_BCRYPT);
    var_dump($hash_bcrypt);
    ?>

    <h3>Algo argon2i</h3>
    <?php
    $hash_argon2i = password_hash('123456', PASSWORD_ARGON2I);
    var_dump($hash_argon2i);
    ?>

    <h3>Algo argon2id</h3>
    <?php
    $hash_argon2id = password_hash('123456', PASSWORD_ARGON2ID);
    var_dump($hash_argon2id);
    ?>

    <h2>Informations sur un hash</h2>

    <h3>Algo default</h3>
    <?php
    var_dump(password_get_info($hash_default));
    ?>

    <h3>Algo argon2i</h3>
    <?php
    var_dump(password_get_info($hash_argon2i));
    ?>

    <h3>Algo argon2id</h3>
    <?php
    var_dump(password_get_info($hash_argon2id));
    ?>

    <h2>Vérification du mot de passe</h2>

    <h3>Algo default</h3>
    <?php
    var_dump(password_verify('123456', $hash_default));
    ?>

    <h3>Algo argon2I</h3>
    <?php
    var_dump(password_verify('123456', $hash_argon2i));
    ?>

    <h3>Algo argon2id</h3>
    <?php
    var_dump(password_verify('123456', $hash_argon2id));
    ?>

    <h2>Hashage est périmé ?</h2>

    <h3>Algo default</h3>
    <?php
    $options = ['cost' => 10];
    var_dump(password_needs_rehash($hash_default, PASSWORD_DEFAULT, $options));
    ?>
</body>
</html>