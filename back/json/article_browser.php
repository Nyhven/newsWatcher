<?php

function    article_plugin_json($article) {
    $json['grade'] = $article['grade'];
    $json['arg1'] = $article['arg1'];
    $json['arg2'] = $article['arg2'];
    return (json_encode($json));
}

// Not finished actually
function    article_website($article){
    $json['grade'] = $article['grade'];
    $json['grade'] = $article['grade'];
    $json['grade'] = $article['grade'];
    $json['arg1'] = $article['arg1'];
    $json['arg2'] = $article['arg2'];
    return (json_encode($json));
}

?>
