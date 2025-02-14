<?php
/*********** Requete SQL pour récupérer le user avec son login **************/
function delComment_sql(int $id) {
    global $pdo;
    try {
        $sql =  'DELETE FROM comments 
                    WHERE id = :id';
        $cursor = $pdo->prepare($sql);
        $cursor->bindValue(':id', $id, PDO::PARAM_INT);
        $cursor->execute();
        return true;

    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
        //die("Problème rencontré !");
        //header("Location: index.php");
        //exit;
    }
}