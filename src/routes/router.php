<?php
// Path: src/routes/router.php
require_once 'src/routes/product.route.php';
require_once 'src/routes/category.route.php';


// Define o cabeçalho para JSON
header('Content-Type: application/json');

// Obtém a URL da requisição
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


if (strpos($url, '/product') === 0) {
    $route = new ProductRoute();
    $route->setupRoutes($url);
    
}

if (strpos($url, '/category') === 0) {
    $route = new CategoryRoute();
    $route->setupRoutes($url);
}

// retornar erro 404
http_response_code(404);


