<?php

require_once('connectDB.php');

/* ###################### TROUVE TOUTES LES SOURCES ######################### */
function    findSources() {
    try {
        $bdd = connectDB();
        $stmt = $bdd->prepare('SELECT * FROM sources');
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
function    findSourceById($id) {
    try {
        $bdd = connectDB();
        $stmt = $bdd->prepare('SELECT * FROM sources WHERE id_src = ?');
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

/* ##### TROUVE TOUTES LES SOURCES ET ARTICLE SELON UN ARTICLE-REPONSE ###### */
function    findSourcesByResponseArticle($id_resp) {
    try {
        $bdd = connectDB();
        $stmt = $bdd->prepare('SELECT url_src_specific, url, grade, nom FROM link_response_src
            INNER JOIN sources ON sources.id_src = link_response_src.id_src
            WHERE link_response_src.id_resp = ?');
        $stmt->bindValue(1, $id_resp, PDO::PARAM_INT);
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

/* ########################## AJOUTE UN ARTICLE ############################# */
function    addSource($url, $grade, $name) {
    try {
        $bdd = connectDB();
        $stmt = $bdd->prepare('INSERT INTO sources (url, grade, nom) VALUES(?, ?, ?)');
        $stmt->bindValue(1, $url, PDO::PARAM_STR);
        $stmt->bindValue(2, $grade, PDO::PARAM_INT);
        $stmt->bindValue(3, $name, PDO::PARAM_STR);
        if ($stmt->execute()) {
            return ($bdd->lastInsertId());
        }
    }
    catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    return (FALSE);
}

/* ######################### EFFACE UN ARTICLE ############################## */
function    deleteSource($id) {
    try {
        $bdd = connectDB();
        $stmt = $bdd->prepare('DELETE FROM sources WHERE id_src = ?');
        $stmt->bindValue(1, $id, PDO::PARAM_INT);
        return ($stmt->execute());
    } catch (Exception $ex) {
        die('Erreur : ' . $ex->getMessage());
    }
    return (FALSE);
}

/* ####################### METS A JOUR UNE SOURCE ########################### */
function    updateSource($id, $url, $grade, $name) {
    try {
        $bdd = connectDB();
        $stmt = $bdd->prepare('UPDATE sources SET url = ?, grade = ?, nom = ? WHERE id_src = ?');
        $stmt->bindValue(1, $url, PDO::PARAM_STR);
        $stmt->bindValue(2, $grade, PDO::PARAM_INT);
        $stmt->bindValue(3, $name, PDO::PARAM_STR);
        $stmt->bindValue(4, $id, PDO::PARAM_INT);
        return ($stmt->execute());
    } catch (Exception $ex) {
        die('Erreur : ' . $ex->getMessage());
    }
    return (FALSE);
}

 ?>
