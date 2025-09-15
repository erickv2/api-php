<?php

namespace Controllers;

class UserController extends Controller
{
    public static function list()
    {
        $usuarios = [
            ['id' => 1, 'nome' => 'João'],
            ['id' => 2, 'nome' => 'Maria'],
            ['id' => 3, 'nome' => 'Pedro']
        ];

        header('Content-Type: application/json');
        echo json_encode($usuarios);
    }

    public static function create() {

        $data = json_decode((file_get_contents(('php://input'))), true);

        echo json_encode(['message' => 'Usuário criado com sucesso!', 'data' => $data]);
    }
}


