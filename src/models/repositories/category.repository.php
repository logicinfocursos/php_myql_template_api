<?php
// src/models/repositories/category.repository.php - (created by: logicinfo.com.br/ael)
require_once 'src/models/repositories/base.repository.php';



class CategoryRepository extends BaseRepository
{
    public function __construct($table)
    {

        parent::__construct('categories');
        
    }
}