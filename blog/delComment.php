<?php
include("config/bootstrap.inc.php");

include("models/delComment.sql.php");

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

//$id = $_GET['id'];

delComment_sql($_GET['id']);

header("Location: moder.php");
exit;
