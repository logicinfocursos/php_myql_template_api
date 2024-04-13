<?php
// src/routes/category.route.php  - (created by: logicinfo.com.br/ael)
require_once 'src/routes/base.route.php';
require_once 'src/controllers/category.controller.php';
require_once 'src/models/repositories/category.repository.php';



class CategoryRoute extends BaseRoute
{
    public function __construct()
    {
        $repository = new CategoryRepository('categories');
        $controller = new CategoryController($repository);

        parent::__construct($controller);
    }
}