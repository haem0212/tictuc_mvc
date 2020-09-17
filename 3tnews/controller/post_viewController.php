<?php

require 'Model\PostModel.php';
require 'Model\CategoryModel.php';
class   post_viewController
{
    private $postModel;
    private $categoryModel;
    public function __construct()
    {
        $this->postModel = new PostModel();
        $this->categoryModel = new CategoryModel();
    }   
    function chitiet()
    {
        
        $id_post = $_GET['id_post'];
        $data_post1 = $this->postModel->GetbyIdpost($id_post);
        // $data_cate1 = $this->postModel->GetbyIdpost($id_cate);
        $data_cate = $this->categoryModel->GetAll();
        $data_post = $this->postModel->GetAll();
        require_once 'View\_trangchu\content.php';
    }
}
?>
