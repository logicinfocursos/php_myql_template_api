<?php
// src/models/repositories/product.repository.php - (created by: logicinfo.com.br/ael)
require_once 'src/models/repositories/base.repository.php';



class ProductRepository extends BaseRepository
{
    public function __construct($table)
    {   

        parent::__construct('products');
        
    }
}