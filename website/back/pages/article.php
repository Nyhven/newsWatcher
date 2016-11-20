<?php

require_once("/back/dao/response_article.php");
require_once("/back/dao/sources.php");
$id = null;
if (isset($_GET['id']))
    $id = $_GET['id'];
else
    echo "Error, you have to specified an id";

$articleDatas = findResponse_articleById($id);
$articleJson = json_encode($articleDatas);

$srcDatas = findSourcesByResponseArticle($id);
$srcJson = json_encode($srcDatas);
