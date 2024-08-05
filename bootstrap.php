<?php

ini_set(varname: 'display_errors', newvalue: 1);
ini_set(varname: 'display_startup_errors', newvalue: 1);
error_reporting(level: E_ERROR);

define(HOST, 'localhost');
define(BANCO, 'api');
define(USER, 'erick');
define(SENHA, '123');

define(DS, DIRECTORY_SEPARATOR);
define(DIR_APP, 'api');

if (file_exists(filename: 'autoload.php')) {
    include 'autoload.php';
} else {
    echo 'Erro ao incluir bootstrap';
    exit;
}
