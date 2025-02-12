<?php
/*********** Requete SQL pour insérer un commentaire **************/
try {
    $sql =  'INSERT INTO comments 
                (content, createdAt, id_users, id_posts) 
            VALUES 
                (:content, :createdAt, :idUser, :idPost)';
    $cursor = $pdo->prepare($sql);
    $cursor->bindValue(':content', $content, PDO::PARAM_STR);
    $cursor->bindValue(':createdAt', date('Y-m-d H:i:s'), PDO::PARAM_STR);
    $cursor->bindValue(':idUser', $idUser, PDO::PARAM_INT);
    $cursor->bindValue(':idPost', $idPost, PDO::PARAM_INT);
    $cursor->execute();
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
    //die("Problème rencontré !");
    //header("Location: index.php");
    //exit;
}
