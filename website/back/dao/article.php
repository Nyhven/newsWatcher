<?php

require_once('connectDB.php');

/* ###################### TROUVE TOUS LES ARTICLE ########################### */
function    findArticles() {
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

/* ##################### TROUVE UN ARTICLE SELON URL ######################## */
function    findArticleByURL($url) {
    try {
        $bdd = connectDB();
        $stmt = $bdd->prepare('SELECT * FROM article WHERE url_src = ?');
        $stmt->bindValue(1, $url, PDO::PARAM_STR);
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

/* ########################## AJOUTE UN ARTICLE ############################# */
function    addArticle($src, $response) {
    try {
        $bdd = connectDB();
        $stmt = $bdd->prepare('INSERT INTO article (url_src, id_resp) VALUES(?, ?)');
        $stmt->bindValue(1, $src, PDO::PARAM_STR);
        $stmt->bindValue(2, $response, PDO::PARAM_INT);
        return ($stmt->execute());
    }
    catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    return (FALSE);
}

/* ######################### EFFACE UN ARTICLE ############################## */
function    deleteArticle($src) {
    try {
        $bdd = connectDB();
        $stmt = $bdd->prepare('DELETE FROM article WHERE url_src = ?');
        $stmt->bindValue(1, $nom, PDO::PARAM_STR);
        return ($stmt->execute());
    } catch (Exception $ex) {
        die('Erreur : ' . $ex->getMessage());
    }
    return (FALSE);
}

/* ####################### METS A JOUR UN ARTICLE ########################### */
function    updateArticle($newSrc, $oldSrc, $dest) {
    try {
        $bdd = connectDB();
        $stmt = $bdd->prepare('UPDATE article SET url_src = ?, id_resp = ? WHERE url_src = ?');
        $stmt->bindValue(1, $newSrc, PDO::PARAM_STR);
        $stmt->bindValue(2, $dest, PDO::PARAM_INT);
        $stmt->bindValue(3, $oldSrc, PDO::PARAM_STR);
        return ($stmt->execute());
    } catch (Exception $ex) {
        die('Erreur : ' . $ex->getMessage());
    }
    return (FALSE);
}

/* ################ METS A JOUR LA REPONSE A UN ARTICLE ##################### */
function    updateArticleOnResponse($src, $dest) {
    try {
        $bdd = connectDB();
        $stmt = $bdd->prepare('UPDATE article SET url_src = ?, id_resp = ? WHERE url_src = ?');
        $stmt->bindValue(1, $src, PDO::PARAM_STR);
        $stmt->bindValue(2, $dest, PDO::PARAM_INT);
        $stmt->bindValue(3, $src, PDO::PARAM_STR);
        return ($stmt->execute());
    } catch (Exception $ex) {
        die('Erreur : ' . $ex->getMessage());
    }
    return (FALSE);
}

?>
