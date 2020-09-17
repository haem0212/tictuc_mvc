<?php

require 'Model\PostModel.php';
require 'Model\CategoryModel.php';
class   chude_viewController
{
    private $postModel;
    private $categoryModel;
    public function __construct()
    {
        $this->postModel = new PostModel();
        $this->categoryModel = new CategoryModel();
    }   
    function chitietcd()
    {
        
        $id_cate = $_GET['id_cate'];
        $category = $this->categoryModel->GetbyIdcategory($id_cate);
        $data_cate = $this->categoryModel->GetAll();
        $data_post = $this->postModel->GetAll();
        require_once 'View\_trangchu\chitietchude.php';
    }
}
?>
