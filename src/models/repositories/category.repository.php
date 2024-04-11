<?php
// Path: src/models/repositories/category.repository.php
require_once 'src/models/repositories/base.repository.php';

class CategoryRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct('categories');
    }
}