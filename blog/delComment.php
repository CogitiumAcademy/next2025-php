<?php
include("config/bootstrap.inc.php");
//var_dump($_SESSION);

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

if ($_SESSION['user']['role'] != 'ROLE_MODER') {
    die('Droits insuffisant !');
}

if (!isset($_GET['id'])) {
    die("Paramètre manquant !");
}

$id = $_GET['id'];

include("models/delComment.sql.php");

header("Location: moder.php");
exit;
