<?php

if (isset($_GET['login'], $_GET['password'])) {
    echo "ok";
} else {
    echo "Form vide";
}

var_dump($_GET);