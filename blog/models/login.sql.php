<?php
/*********** Requete SQL pour récupérer le user avec son login **************/
try {
    $sql =  'SELECT *  
                FROM users
                WHERE email = :email';
    $cursor = $pdo->prepare($sql);
    $cursor->bindValue(':email', $email, PDO::PARAM_STR);
    $cursor->execute();

    $user = $cursor->fetch();
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
    //die("Problème rencontré !");
    //header("Location: index.php");
    //exit;
}
