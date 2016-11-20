<?php

require_once('connectDB.php');


/* ####### TROUVE DES ARTICLE-REPONSE ENTRE UN MINIMUM ET UN MAXIMUM ######## */
function    findResponse_articles($min, $max) {
    try {
        $bdd = connectDB();
        $stmt = $bdd->prepare('SELECT * FROM response_article ORDER BY id_resp LIMIT ?, ?');
        $stmt->bindValue(1, $min, PDO::PARAM_INT);
        $stmt->bindValue(2, $max, PDO::PARAM_INT);
        $success = $stmt->execute();
        if ($success) {
            $res = null;
            while ($line = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $res[] = $line;
            }
            return($res);
        }else{
            echo"Error on reading DB";
        }
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    return (null);
}

/* ##################### TROUVE UN ARTICLE-REPONSE SELON ID ######################## */
function    findResponse_articleById($id) {
    try {
        $bdd = connectDB();
        $stmt = $bdd->prepare('SELECT * FROM response_article WHERE id_resp = ?');
        $stmt->bindValue(1, $id, PDO::PARAM_INT);
        $success = $stmt->execute();
        if ($success) {
            $res = $stmt->fetch(PDO::FETCH_ASSOC);
            $stmt->closeCursor();
            return ($res);
        }
        else {
            return (FALSE);
        }
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    return (FALSE);
}

/* ############### TROUVE UN ARTICLE-REPONSE SELON ID ARTICLE ############### */
function    findResponse_articleByArticle($id_article) {
    try {
        $bdd = connectDB();
        $stmt = $bdd->prepare('SELECT * FROM response_article INNER JOIN article
            ON article.id_resp = response_article.id_resp WHERE response_article.id_resp = ?');
        $stmt->bindValue(1, $id_article, PDO::PARAM_STR);
        $success = $stmt->execute();
        if ($success) {
            $res = $stmt->fetch(PDO::FETCH_ASSOC);
            $stmt->closeCursor();
            return ($res);
        }
        else {
            return (FALSE);
        }
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    return (FALSE);
}

/* ####################### AJOUTE UN ARTICLE-REPONSE ######################## */
function    addResponse_article($title, $content, $grade, $arg1, $arg2) {
    try {
        $bdd = connectDB();
        $stmt = $bdd->prepare('INSERT INTO response_article (title, content, grade, arg1, arg2)
            VALUES(?, ?, ?, ?, ?)');
        $stmt->bindValue(1, $title, PDO::PARAM_STR);
        $stmt->bindValue(2, $content, PDO::PARAM_STR);
        $stmt->bindValue(3, $grade, PDO::PARAM_INT);
        $stmt->bindValue(4, $arg1, PDO::PARAM_STR);
        $stmt->bindValue(5, $arg2, PDO::PARAM_STR);
        if ($stmt->execute()) {
            return ($bdd->lastInsertId());
        }
    }
    catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    return (FALSE);
}

/* #################### EFFACE UN ARTICLE-REPONSE ########################### */
function    deleteResponse_article($id) {
    try {
        $bdd = connectDB();
        $stmt = $bdd->prepare('DELETE FROM response_article WHERE id_resp = ?');
        $stmt->bindValue(1, $id, PDO::PARAM_INT);
        return ($stmt->execute());
    } catch (Exception $ex) {
        die('Erreur : ' . $ex->getMessage());
    }
    return (FALSE);
}

/* ################### METS A JOUR UN ARTICLE-REPONSE ####################### */
function    updateResponse_article($id, $title, $content, $grade, $arg1, $arg2) {
    try {
        $bdd = connectDB();
        $stmt = $bdd->prepare('UPDATE response_article SET title = ?, content = ?,
             grade = ?, arg1 = ?, arg2 = ? WHERE id_resp = ?');
             $stmt->bindValue(1, $title, PDO::PARAM_STR);
             $stmt->bindValue(2, $content, PDO::PARAM_STR);
             $stmt->bindValue(3, $grade, PDO::PARAM_INT);
             $stmt->bindValue(4, $arg1, PDO::PARAM_STR);
             $stmt->bindValue(5, $arg2, PDO::PARAM_STR);
             $stmt->bindValue(6, $id, PDO::PARAM_INT);
        return ($stmt->execute());
    } catch (Exception $ex) {
        die('Erreur : ' . $ex->getMessage());
    }
    return (FALSE);
}

