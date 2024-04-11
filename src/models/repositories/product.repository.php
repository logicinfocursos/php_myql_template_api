<?php
// Path: src/models/repositories/product.repository.php
require_once 'src/models/repositories/base.repository.php';


class ProductRepository extends BaseRepository
{
    protected $entity;
    public function __construct()
    {   
        parent::__construct('products');
    }
}