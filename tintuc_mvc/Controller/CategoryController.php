<?php

require 'Model\CategoryModel.php';

class CategoryController
{
    private $categoryModel;
    public function __construct()
    {
        $this->categoryModel = new CategoryModel();
    }
    function list()
    {
        $data = $this->categoryModel->GetAll();
        require_once 'View\Category\list.php';
    }
    function add()
    {
        require_once 'View\Category\add.php';
    }
    function save()
    {
        $id_cate = $_POST['id_cate'];
        $name = $_POST['name'];
        $tag = $_POST['tag'];
        $description = $_POST['description'];
        $icon = $_POST['icon'];
        $slug = $_POST['slug'];
        $active = $_POST['active'];
        $category = new Category($id_cate, $name, $tag, $description, $icon, $slug, $active);
        $result = $this->categoryModel->Add($category);
        if ($result == true)
            header('location: index.php?c=category&a=list&r=1');
        else header('location: index.php?c=category&a=list&r=0');
    }
    function fix()
    {
        $id_cate = $_GET['id_cate'];
        $category = $this->categoryModel->GetbyIdcategory($id_cate);
        require_once 'View\Category\fix.php';
    }
    function update()
    {
        $id_cate = $_POST['id_cate'];
        $name = $_POST['name'];
        $tag = $_POST['tag'];
        $description = $_POST['description'];
        $icon = $_POST['icon'];
        $slug = $_POST['slug'];
        $active = $_POST['active'];
        $category = new Category($id_cate, $name, $tag, $description, $icon, $slug, $active);
        $result = $this->categoryModel->Update($category);
        if ($result == true)
            header('location: index.php?c=category&a=list&r=1');
        else header('location: index.php?c=category&a=list&r=0');
    }
    function delete()
    {
        $Id_cate = $_GET['id_cate'];
        $result = $this->categoryModel->delete($Id_cate);   
        if ($result == true)
            header('location: index.php?c=category&a=list&r=1');
        else  header('location: index.php?c=category&a=list&r=0');
    }
}
?>