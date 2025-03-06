<?php
namespace app;

require_once("helper.php");

use helper\Display as Hdisplay;

class Display{
    public static function getPosts(){
        echo "getting posts from app.php";
    }
}

Hdisplay::getPosts();
Display::getPosts();

?>