<?php


    // Configurações de exibição de erros

    // ini_set(varname: 'display_errors', newvalue: 1);
    // ini_set(varname: 'display_startup_errors', newvalue: 1);
    // error_reporting(level: E_ERROR);

    // Constantes de conexão com o banco de dados
    define('HOST', 'localhost'); // Host do banco de dados
    define('DB_NAME', 'api');      // Nome do banco de dados
    define('USERNAME', 'erick');     // Usuário do banco de dados
    define('PASSWORD', '123');      // Senha do banco de dados

    // Constantes de diretórios
    define('DS', DIRECTORY_SEPARATOR);           // Separador de diretório do sistema
    define('DIR_APP', '\\laragon\\www\\api-php'); // Caminho base da aplicação

    // Inclui o autoload para carregar as classes automaticamente
    if (file_exists(filename: 'autoload.php')) {
        include 'autoload.php';
    } else {
        // Se não encontrar o autoload, exibe erro e encerra
        echo 'Erro ao incluir bootstrap';
        exit;
    }