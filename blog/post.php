<?php
include("config/pdo.inc.php");
// var_dump($pdo);

include("lib/pluralize.php");

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
