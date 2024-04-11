<?php
// src/routes/category.route.php
require_once 'src/routes/base.route.php';
require_once 'src/controllers/product.controller.php';
require_once 'src/models/repositories/product.repository.php';
class ProductRoute extends BaseRoute
{
    public function __construct()
    {
        $repository = new ProductRepository();
        $controller = new ProductController($repository);

        parent::__construct($controller);
    }
}