<?php
include 'fonctions.php';
require 'routes.php';

$pageFiltre = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_SPECIAL_CHARS);
$page = $pageFiltre?? 'home';

$routes = [
    'home' => 'home.php',
    'contact' => 'contact.php',
    'about' => 'about.php'
];

if (!array_key_exists($page, $routes)) {
    redirect('404.php');
}

redirect($routes[$page]);

/*
http://localhost/php-routes/index.php?page=contact
http://localhost/php-routes/index.php?page=about
http://localhost/php-routes/index.php?page=prix
http://localhost/php-routes/?page=edit&id=45 => edit.php?id=45

*/