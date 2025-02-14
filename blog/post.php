<?php
include("config/bootstrap.inc.php");
include("lib/pluralize.php");

include("models/addComment.sql.php");
include("models/post.sql.php");
include("models/commentsForPost.sql.php");

if (isset($_POST['content'])) {
    //die("commentaire !");
    //die(date('Y-m-d H:i:s'));
    //$content = $_POST['content'];
    //$idPost = $_POST['idPost'];
    //$idUser = $_SESSION['user']['id'];
    addComment_sql($_POST['content'], $_SESSION['user']['id'], $_POST['idPost']);
}

if (!isset($_GET["slug"])) {
    die("Manque slug !");
}
//$slug = $_GET["slug"];

$data = post_sql($_GET["slug"]);
//var_dump($data); exit;

$comments = commentsForPost_sql($_GET["slug"]);
$nbComments = count($comments);
//var_dump($comments); exit;

include("templates/post.php");
