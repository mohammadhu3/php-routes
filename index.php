<?php
include 'fonctions.php';
$page = $_GET ['page'];

$routes = [
    'contact' => 'contact.php',
    'about' => 'about.php'
];

if (!array_key_exists($page, $routes)) {
    redirect('404.php');
}
redirect($routes[$page]);