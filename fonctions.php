<?php 
define("PATH_PROJET", $_SERVER['DOCUMENT_ROOT'] . "/php-routes");
define("WEB_ROOT", "/php-routes");
function dg($data)
{
    echo '<pre style="background-color: #000; color: #fff; padding: 10px">';
    var_dump($data);
    echo '</pre>';
};

function dd($data)
{
    echo '<pre style="background-color: #000; color: #fff; padding: 10px">';
    var_dump($data);
    echo '</pre>';
    die();
};
function redirect($url){ 
    header("location: " . WEBROOT . $url);
    exit;

}