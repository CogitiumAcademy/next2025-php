<?php
    /********** Connexion PDO *************/
    $user = "root";
    $pass = "";
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=next_2025_blog2', $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
