<?php
require("back/dao/response_article.php");
$step = 10;
if(isset($_GET['page']))
    $page = $_GET['page'];
else
    $page = 0;
$datas = findResponse_articles($page*$step, ($page+1)*$step);
$json = json_encode($datas);


?>
