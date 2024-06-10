<?php

 require __DIR__ . 'vendor/autoload.php';
// Create Router instance
$router = new \Bramus\Router\Router();

// Define routes
$router->get ('/',function(){
    echo "Trang Chủ";
});

$router->get('/about', function(){
    echo "Trang Giới thiệu";
});

// Run it!
$router->run();
