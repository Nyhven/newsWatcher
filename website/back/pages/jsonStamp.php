<?php
require_once("/back/dao/response_article.php");
$id = null;
if (isset($_GET['id']))
    $id = $_GET['id'];

$datas = findResponse_articleById($id);
$arrayForJson['title'] = $datas['title'];
$arrayForJson['grade'] = $datas['grade'];
$arrayForJson['arg1'] = $datas['arg1'];
$arrayForJson['arg2'] = $datas['arg2'];
$json = json_encode($arrayForJson);
?>