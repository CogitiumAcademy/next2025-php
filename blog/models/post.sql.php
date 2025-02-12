<?php
/*********** Requete SQL pour récupérer le post correspondant au slug de l'url **************/
try {
    $sql =  'SELECT title, content, image, lastName, firstName, updatedAt  
                FROM posts A
                INNER JOIN users B
                    ON A.id_users = B.id
                WHERE active = 1
                    AND slug = :slug';
    $cursor = $pdo->prepare($sql);
    $cursor->bindValue(':slug', $slug, PDO::PARAM_STR);
    $cursor->execute();

    $data = $cursor->fetch();
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
    //die("Problème rencontré !");
    //header("Location: index.php");
    //exit;
}
