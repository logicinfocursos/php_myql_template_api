<?php
// src/routes/ibase.route.php  - (created by: logicinfo.com.br/ael)
interface IBaseRoute
{
    public function __construct($controller);
    public function getAll();
    public function getById($id);
    public function getListByKey($key, $field);
    public function create($data);
    public function update($id, $data);
    public function erase($id);
    public function setupRoutes($url);
}
