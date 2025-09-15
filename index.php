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


$routes = RoutesUtil::getRoutes();
$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

if ($routes[0] === 'usuarios') {
    if ($method === 'GET') {
        UserController::list();
        exit;
    }

    if ($method === 'POST') {
        UserController::create();
        exit;
    }
}
