<?php

function    connectDB() {
    return (new PDO('mysql:host=127.0.0.1;dbname=news_watcher;charset=utf8', 'root', ''));
}

?>
