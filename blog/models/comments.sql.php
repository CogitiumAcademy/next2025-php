<?php
/*********** Requete SQL pour récupérer tous les posts actifs **************/
function comments_sql() {
    global $pdo;
    try {
        $sql =  'SELECT A.id, A.content, A.createdAt, B.firstName, B.lastName 
                    FROM comments A
                    INNER JOIN users B
                        ON A.id_users = B.id
                    ORDER BY createdAt DESC';
        $cursor = $pdo->query($sql);
        $comments = $cursor->fetchAll();
        return $comments;
    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
        //die("Problème rencontré !");
        //header("Location: index.php");
        //exit;
    }
}