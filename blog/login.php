<?php
include("config/bootstrap.inc.php");
//var_dump($_SESSION);

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $plainPassword = $_POST['password'];
    include("models/login.sql.php");
    //var_dump($user);
    //var_dump(md5($plainPassword));
    if (!$user) {
        header("Location: login.php?msg=email");
        exit;
    }
    if (md5($plainPassword) != $user['password']) {
        header("Location: login.php?msg=password");
        exit;
    }
    $user['password'] = '';
    $_SESSION['user'] = $user;
    header("Location: index.php");
    exit;
}

//var_dump($_POST);

include("templates/login.php");
