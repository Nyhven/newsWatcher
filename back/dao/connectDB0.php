<?php

function    connectDB() {
    return (new PDO('mysql:host=127.0.0.1;dbname=newswatchers;charset=utf8', 'root', ''));
}

?>
