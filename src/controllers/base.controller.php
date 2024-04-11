<?php
// src/controllers/base.controller.php
require_once 'src/controllers/ibase.controller.php';
abstract class BaseController implements IBaseController
{
    protected $repository;

    public function __construct($repository)
    {
        $this->repository = $repository;
    }
    
    public function getAll()
    {     
        try {
            $data = $this->repository->getAll();
    
            http_response_code(200);
            header('Content-Type: application/json');
    
            echo json_encode($data);
        } catch (Exception $e) {
           
            http_response_code(500);
            header('Content-Type: application/json');
    
            echo json_encode(['error' => $e->getMessage()]);
        }
    }

    public function getById($id)
    {
        try {
            $data = $this->repository->getById($id);
    
            http_response_code(200);
            header('Content-Type: application/json');
    
            echo json_encode($data);
        } catch (Exception $e) {
           
            http_response_code(500);
            header('Content-Type: application/json');
    
            echo json_encode(['error' => $e->getMessage()]);
        }        
    }

    public function getListByKey($key, $field)
    {
        
        
        try {
            $data = $this->repository->getListByKey($key, $field);
    
            http_response_code(200);
            header('Content-Type: application/json');
    
            echo json_encode($data);
        } catch (Exception $e) {
           
            http_response_code(500);
            header('Content-Type: application/json');
    
            echo json_encode(['error' => $e->getMessage()]);
        }
    }

    public function create($data)
    {

        try {
            $data = $this->repository->create($data);
    
            http_response_code(201);
            header('Content-Type: application/json');
    
            echo json_encode($data);

        } catch (Exception $e) {
           
            http_response_code(500);
            header('Content-Type: application/json');
    
            echo json_encode(['error' => $e->getMessage()]);
        }
    }

    public function update($id, $data)
    {
        try {
            $data = $this->repository->update($id, $data);
    
            http_response_code(200);
            header('Content-Type: application/json');
    
            echo json_encode($data);

        } catch (Exception $e) {
           
            http_response_code(500);
            header('Content-Type: application/json');
    
            echo json_encode(['error' => $e->getMessage()]);
        }
    }

    public function erase($id)
    {
        try {
            $data = $this->repository->erase($id);
    
            http_response_code(200);
            header('Content-Type: application/json');
    
            echo json_encode($data);

        } catch (Exception $e) {
           
            http_response_code(500);
            header('Content-Type: application/json');
    
            echo json_encode(['error' => $e->getMessage()]);
        }
    }
}