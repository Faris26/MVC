<?php 

class App {
    public function __construct(){
        var_dump($_GET);
    }
    public function parseURL(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            return $url;
        }
    }
}
