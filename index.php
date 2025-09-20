<?php

// Importa as classes utilitárias e de validação
use Util\RoutesUtil;
use Validator\RequestValidator;
use Controllers\UserController;

// Inclui o bootstrap para carregar configurações e autoload
include 'bootstrap.php';

try {
    // Obtém as rotas da URL e passa para o validador de requisição
    $RequestValidator = new RequestValidator(RoutesUtil::getRoutes());
} catch (Exception $exception) {
    // Em caso de erro, exibe a mensagem da exceção
    echo $exception->getMessage();
}

// Define variáveis de rotas e método
$routes = RoutesUtil::getRoutes();
$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';


// Rotas para /usuarios
if ($routes[0] === 'usuarios') {
    if ($method === 'GET') {
        UserController::show();
        exit;
    }

    if ($method === 'POST') {
        UserController::create();
        exit;
    }
    
    if ($method === 'PUT' && !empty($routes[1])) {
        UserController::update($routes[1]);
        exit;
    }

    if($method === "DELETE" && !empty($routes[1])) {
        UserController::delete($routes[1]);
        exit;
    }


// Configura erro 404
http_response_code(404);
echo json_encode(['error' => 'Rota não encontrada']);

}
