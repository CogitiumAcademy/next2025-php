<?php
include("config/bootstrap.inc.php");
include("lib/pluralize.php");

if (isset($_POST['content'])) {
    //die("commentaire !");
    //die(date('Y-m-d H:i:s'));
    $content = $_POST['content'];
    $idPost = $_POST['idPost'];
    $idUser = $_SESSION['user']['id'];
    include("models/addComment.sql.php");
}

if (!isset($_GET["slug"])) {
    die("Manque slug !");
}
$slug = $_GET["slug"];

include("models/post.sql.php");
//var_dump($data); exit;

include("models/commentsForPost.sql.php");
$nbComments = count($comments);
//var_dump($comments); exit;

include("templates/post.php");
