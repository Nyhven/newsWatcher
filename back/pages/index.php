<?php
require("/back/dao/response_article.php");
function getArticles($page){
    $datas = getArticlesByPages($page);
    json_encode($datas);
}

?>