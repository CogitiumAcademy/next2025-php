<?php
/*********** Requete SQL pour récupérer tous les posts actifs **************/
try {
    $sql =  'SELECT A.id, A.content, A.createdAt, B.firstName, B.lastName 
                FROM comments A
                INNER JOIN users B
                    ON A.id_users = B.id
                ORDER BY createdAt DESC';
    $cursor = $pdo->query($sql);
    $comments = $cursor->fetchAll();
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
    //die("Problème rencontré !");
    //header("Location: index.php");
    //exit;
}
