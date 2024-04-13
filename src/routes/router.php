<?php
// src/routes/router.php - (created by: logicinfo.com.br/ael)
require_once 'src/routes/product.route.php';
require_once 'src/routes/category.route.php';
require_once 'src/controllers/category.controller.php';
require_once 'src/controllers/product.controller.php';



// Obtém a URL da requisição
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$__ROUTES__ = $_SESSION["configurations"]["routes"];

$the_route_was_found = false;

foreach ($__ROUTES__ as $route) {
  
    if ($route['status'] === 1) {

        $requestRoute = '/' . $route['url'];

        // Verifica se a URL da requisição começa com a rota da requisição
        if (strpos($url, $requestRoute) === 0) {

            $routeClass = $route['route'];

            $the_route_was_found = true;

            if (class_exists($routeClass)) {

                $routeInstance = new $routeClass();
                $routeInstance->setupRoutes($url);

                break;

            } else {

                http_response_code(500);
                echo json_encode(['error' => "Classe da rota '$routeClass' não encontrada"]);

                break;
            }
        }
    }
}

if (!$the_route_was_found) {

    http_response_code(404);
    echo json_encode(['error' => 'Rota não encontrada']);
}
