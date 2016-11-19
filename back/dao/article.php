<?php

require_once('connectDB.php');

/* ###################### TROUVE TOUS LES ARTICLE ############################ */
function    findArticle() {
    try {
        $bdd = connectDB();
        $stmt = $bdd->prepare('SELECT * FROM article');
        $success = $stmt->execute();
        if ($success) {
            $res = null;
            while ($line = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $res[] = $line;
            }
            return($res);
        }
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    return (null);
}

/* ########################## TROUVE UN ARTICLE ############################### */
function    findArticleByID($id) {
    try {
        $bdd = connectDB();
        $stmt = $bdd->prepare('SELECT * FROM article WHERE id_art = ?');
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

/* ########################## AJOUTE UN ARTICLE ############################### */
function    addArticle($src, $dest, $grade, $arg1, $arg2) {
    try {
        $bdd = connectDB();
        $stmt = $bdd->prepare('INSERT INTO article (url_src, url_dest, grade, arg1, arg2)
            VALUES(?, ?, ?, ?, ?)');
        $stmt->bindValue(1, $src, PDO::PARAM_STR);
        $stmt->bindValue(2, $dest, PDO::PARAM_STR);
        $stmt->bindValue(3, $grade, PDO::PARAM_STR);
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

/* ######################### EFFACE UN ARTICLE ################################ */
function    deleteArticle($id) {
    try {
        $bdd = connectDB();
        $stmt = $bdd->prepare('DELETE FROM article WHERE id_art = ?');
        $stmt->bindValue(1, $nom, PDO::PARAM_INT);
        return ($stmt->execute());
    } catch (Exception $ex) {
        die('Erreur : ' . $ex->getMessage());
    }
    return (FALSE);
}

/* ###################### METS UN JOUR UN ARTICLE ########################### */
function    updateArticle($src, $dest, $grade, $arg1, $arg2, $id) {
    try {
        $bdd = connectDB();
        $stmt = $bdd->prepare('UPDATE article SET url_src = ?, url_dest = ?, grade = ?,
                arg1 = ?, arg2 = ? WHERE id_art = ?');
        $stmt->bindValue(1, $src, PDO::PARAM_STR);
        $stmt->bindValue(2, $dest, PDO::PARAM_STR);
        $stmt->bindValue(3, $grade, PDO::PARAM_STR);
        $stmt->bindValue(4, $arg1, PDO::PARAM_STR);
        $stmt->bindValue(5, $arg2, PDO::PARAM_STR);
        $stmt->bindValue(6, $id, PDO::PARAM_INT);
        return ($stmt->execute());
    } catch (Exception $ex) {
        die('Erreur : ' . $ex->getMessage());
    }
    return (FALSE);
}

?>
