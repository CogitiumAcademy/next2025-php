<?php
include("config/bootstrap.inc.php");

include("models/comments.sql.php");
$comments = comments_sql();
//var_dump($comments); exit;


include("templates/moder.php");
