<?php

require 'Model\PostModel.php';

class PostController
{
    private $postModel;
    public function __construct()
    {
        $this->postModel = new PostModel();
    }
    function list()
    {
        $data = $this->postModel->GetAll();
        require_once 'View\Post\list.php';
    }
    function add()
    {
        require_once 'View\Post\add.php';
    }
    function save()
    {
        $id_post = $_POST['id_post'];
        $id_cate = $_POST['id_cate'];
        $title = $_POST['title'];
        $intro = $_POST['intro'];
        $content = $_POST['content'];
        $image = $_POST['image'];
        $tag = $_POST['tag'];
        $description = $_POST['description'];
        $count_comment = $_POST['count_comment'];

        $post = new Post($id_post, $id_cate, $title, $intro, $content, $image, $tag, $description, $count_comment);
        $result = $this->postModel->Add($post);
        if ($result == true)
            header('location: index.php?c=post&a=list&r=1');
        else header('location: index.php?c=post&a=list&r=0');
    }
    function fix()
    {
        $id_post = $_GET['id_post'];
        $post = $this->postModel->GetbyIdpost($id_post);
        require_once 'View\Post\fix.php';
    }
    function update()
    {
        $id_post = $_POST['id_post'];
        $id_cate = $_POST['id_cate'];
        $title = $_POST['title'];
        $intro = $_POST['intro'];
        $content = $_POST['content'];
        $image = $_POST['image'];
        $tag = $_POST['tag'];
        $description = $_POST['description'];
        $count_comment = $_POST['count_comment'];
        
        $post = new Post($id_post, $id_cate, $title, $intro, $content, $image, $tag, $description, $count_comment);
        $result = $this->postModel->Update($post);
        if ($result == true)
            header('location: index.php?c=post&a=list&r=1');
        else header('location: index.php?c=post&a=list&r=0');
    }
}
?>