<?php
/*********** Requete SQL pour récupérer tous les posts actifs **************/
function posts_sql() {
    global $pdo;
    try {
        $sql =  'SELECT title, LEFT(content, 150) AS content, image, slug, lastName, firstName, updatedAt  
                    FROM posts A
                    INNER JOIN users B
                        ON A.id_users = B.id
                    WHERE active = 1
                    ORDER BY createdAt DESC';
        $cursor = $pdo->query($sql);
        $data = $cursor->fetchAll();
        return $data;
    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
        //die("Problème rencontré !");
        //header("Location: index.php");
        //exit;
    }
}