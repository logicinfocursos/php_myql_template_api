<?php
// src/routes/category.route.php
require_once 'src/routes/base.route.php';
require_once 'src/controllers/category.controller.php';
require_once 'src/models/repositories/category.repository.php';
class CategoryRoute extends BaseRoute
{
    public function __construct()
    {
        $repository = new CategoryRepository();
        $controller = new CategoryController($repository);

        parent::__construct($controller);
    }
}