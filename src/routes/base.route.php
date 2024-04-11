<?php
// src/routes/base.route.php - (created by: logicinfo.com.br/ael)
require_once 'src/routes/ibase.route.php';	
abstract class BaseRoute implements IBaseRoute
{
    protected $controller;

    public function __construct($controller)
    {
        $this->controller = $controller;
    }

    public function getAll()
    {
        $this->controller->getAll();
    }

    public function getById($id)
    {
        $this->controller->getById($id);
    }

    public function getListByKey($key, $field)
    {
        $this->controller->getListByKey($key, $field);
    }

    public function create($data)
    {
        $this->controller->create($data);
    }

    public function update($id, $data)
    {
        $this->controller->update($id, $data);
    }

    public function erase($id)
    {
        $this->controller->erase($id);
    }

    public function setupRoutes($url)
    {

        $urlParts = explode('/', $url);

        switch ($_SERVER['REQUEST_METHOD']) {

            case 'GET':
                // se existirem 2 paramentros na URL, executa o getListByKey
                if (isset($urlParts[2]) && isset($urlParts[3])) {

                    $key = $urlParts[2];
                    $field = $urlParts[3];
                    $this->getListByKey($key, $field);

                  // Se houver um ID na URL, executa o getById
                } else if (isset($urlParts[2]) && is_numeric($urlParts[2])) {
                    $id = $urlParts[2];
                    $this->getById($id);
               
                    // se não existirem parametros, executa o getAll
                } else {
                    $this->getAll();
                }
                break;

            case 'POST':
                $data = json_decode(file_get_contents('php://input'), true);
                $this->create($data);
                break;

            case 'PUT':
                $id = $urlParts[2];
                $data = json_decode(file_get_contents('php://input'), true);
                $this->update($id, $data);
                break;

            case 'PATCH':
                $id = $urlParts[2];
                $data = json_decode(file_get_contents('php://input'), true);
                $this->update($id, $data);
                break;

            case 'DELETE':
                $id = $urlParts[2];
                $this->erase($id);
                break;
        }
    }
}