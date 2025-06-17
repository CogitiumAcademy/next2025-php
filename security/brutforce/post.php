<?php
session_start();

if (isset($_GET['login'], $_GET['password'])) {
    //echo "ok";
    if (($_GET['login'] == 'user') && ($_GET['password'] == 'pass')) {
        die('Utilisateur authentifié ');
    } else {
        // Tracking de l'adresse IP
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        //var_dump($ip);

        $time = time();

        $_SESSION['ip'][] = array(
            'ip' => $ip,
            'time' => $time
        );
        //var_dump($_SESSION);

        // Détecter 2 requètes trop rapides
        $newTime = $time;
        if(isset($_SESSION['time'])) {
            $previousTime = $_SESSION['time'];
            if (($newTime - $previousTime) < 5) {
                die('<h3>Blocage attaque force brute, trop rapide !</h3>');
            }
        }
        $_SESSION['time'] = $newTime;

        // Détecter trop de requètes
        if (!isset($_SESSION['brutforce'])) {
            $_SESSION['brutforce'] = 1;
        } else {
            $_SESSION['brutforce']++;
            if ($_SESSION['brutforce'] > 3) {
                die('<h3>Blocage attaque force brute, trop de tentatives !</h3>');
            }
        }

        var_dump($_SESSION);

        //die('Login NOK !');
        header('Location:login.php');
        exit;
    }
} else {
    echo "Form vide";
}

var_dump($_GET);