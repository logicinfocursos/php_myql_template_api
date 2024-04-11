<?php
// src/controllers/ibase.controller.php  - (created by: logicinfo.com.br/ael)
interface IBaseController
{
    public function __construct($repository);
    public function getAll();
    public function getById($id);
    public function getListByKey($key, $field);
    public function create($data);
    public function update($id, $data);
    public function erase($id);
}