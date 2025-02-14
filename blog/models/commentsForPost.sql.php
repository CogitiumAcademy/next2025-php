<?php
/*********** Requete SQL pour récupérer les commentaires d'un post correspondant au slug de l'url **************/
function commentsForPost_sql(string $slug) {
    global $pdo;
    try {
        $sql =  'SELECT A.content, A.createdAt, firstName, lastName  
                    FROM comments A
                    INNER JOIN posts B
                        ON A.id_posts = B.id
                    INNER JOIN users C
                        ON A.id_users = C.id
                    WHERE active = 1
                        AND slug = :slug
                    ORDER BY A.createdAt DESC';
        $cursor = $pdo->prepare($sql);
        $cursor->bindValue(':slug', $slug, PDO::PARAM_STR);
        $cursor->execute();

        $comments = $cursor->fetchAll();
        return $comments;
    } catch (PDOException $e) {
        //die("Erreur : " . $e->getMessage());
        //die("Problème rencontré !");
        header("Location: index.php");
        exit;
    }
}