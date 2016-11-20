<?php

function    article_plugin_json($responseArticle) {
    $json['grade'] = $responseArticle['grade'];
    $json['arg1'] = $responseArticle['arg1'];
    $json['arg2'] = $responseArticle['arg2'];
    return (json_encode($json));
}

// Not finished actually
function    article_website($responseArticle){
    $json['title'] = $responseArticle['title'];
    $json['text'] =  $responseArticle['text'];
    $json['stamp'] =  article_plugin_json();
    $json['sources'] = findSourcesById();
    return (json_encode($json));
}

?>
