<?php

require 'Model\CommentModel.php';

class CommentController
{
    private $commentModel;
    public function __construct()
    {
        $this->commentModel = new CommentModel();
    }
    function list()
    {
        $data = $this->commentModel->GetAll();
        require_once 'View\Comment\list.php';
    }
    function add()
    {
        require_once 'View\Comment\add.php';
    }
    function save()
    {
        $id_cmt = $_POST['id_cmt'];
        $id_user = $_POST['id_user'];
        $id_post = $_POST['id_post'];
        $content = $_POST['content'];
        $status = $_POST['status'];
        $active = $_POST['active'];
        $comment = new Comment($id_cmt, $id_user, $id_post, $content, $status, $active);
        $result = $this->commentModel->Add($comment);
        if ($result == true)
            header('location: index.php?c=comment&a=list&r=1');
        else header('location: index.php?c=comment&a=list&r=0');
    }
    function fix()
    {
        $id_cmt = $_GET['id_cmt'];
        $comment = $this->commentModel->GetbyIdcomment($id_cmt);
        require_once 'View\Comment\fix.php';
    }
    function update()
    {
        $id_cmt = $_POST['id_cmt'];
        $id_user = $_POST['id_user'];
        $id_post = $_POST['id_post'];
        $content = $_POST['content'];
        $status = $_POST['status'];
        $active = $_POST['active'];
        $comment = new Comment($id_cmt, $id_user, $id_post, $content, $status, $active);
        $result = $this->commentModel->Update($comment);
        if ($result == true)
            header('location: index.php?c=comment&a=list&r=1');
        else header('location: index.php?c=comment&a=list&r=0');
    }
}
?>