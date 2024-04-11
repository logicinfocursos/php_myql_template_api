<?php
// src/models/repositories/ibase.repository.php  - (created by: logicinfo.com.br/ael)
interface IBaseRepository
{
    public function __construct($table);
    public function getAll();
    public function getById($id);
    public function getListByKey($key, $field);
    public function create($data);
    public function update($id, $data);
    public function erase($id);
}
?>