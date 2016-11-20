<?php
    require_once("/back/dao/response_article.php");
    echo $_SERVER['REQUEST_URI'];
    function getStamp($idResponse){
        $datas = findResponse_articleById($idResponse);
        $json['title'] = $datas['title'];
        $json['grade'] = $datas['grade'];
        $json['arg1'] = $datas['arg1'];
        $json['arg2'] = $datas['arg2'];

        echo json_encode($json);
    }
?>