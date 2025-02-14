<?php
include("config/bootstrap.inc.php");

include("models/posts.sql.php");
$data = posts_sql();
// var_dump($data);

include("templates/index.php");
