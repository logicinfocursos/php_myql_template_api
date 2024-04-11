<?php
// src/controllers/product.controller.php
require_once 'src/controllers/base.controller.php';

class ProductController extends BaseController
{
    public function __construct($repository)
    {
        parent::__construct($repository);
    }
}

