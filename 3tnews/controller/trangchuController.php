<?php

require 'Model\PostModel.php';
require 'Model\CategoryModel.php';
class   trangchuController
{
    private $postModel;
    private $categoryModel;
    public function __construct()
    {
        $this->postModel = new PostModel();
        $this->categoryModel = new CategoryModel();
    }  
    function show()
    {
        $data_post = $this->postModel->GetAll();
        $data_cate = $this->categoryModel->GetAll();
        require_once 'View\_trangchu\trangchu.php';
    }
    function tinmoi()
    {
        $data_post = $this->postModel->GetDate();
        $data_cate = $this->categoryModel->GetAll();
        require_once 'View\_trangchu\tinmoi_list.php';
    }
    function chude()
    {
        $data_post = $this->postModel->GetAll();
        $data_cate = $this->categoryModel->GetAll();
        require_once 'View\_trangchu\chude_list.php';
    }
    
}
?>
