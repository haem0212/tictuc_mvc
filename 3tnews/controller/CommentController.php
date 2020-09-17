<?php

require 'Model\commentModel.php';

class commentController
{
    private $commentModel;
    public function __construct()
    {
        $this->commentModel = new commentModel();
    }
    function list()
    {
        $data_cate= $this->commentModel->GetAll();
        require_once 'View\tt_cate\list.php';
    }
    function add()
    {
        require_once 'View\tt_cate\add.php';
    }
    function save()
    {
        $id = $_POST['id'];
        $user_id = $_POST['user_id'];
        $post_id = $_POST['post_name'];
        $content = $_POST['content'];
        $comment = new comment( $id, $user_id,   $post_id,$content);
        $result = $this->commentModel->Add($comment);
        if ($result == true)
            header('location: index.php?c=comment&a=list&r=1');
        else header('location: index.php?c=comment&a=list&r=0');
    }
    function fix()
    {
        $id_cate = $_GET['id_cate'];
        $comment = $this->commentModel->GetbyIdcomment($id_cate);
        require_once 'View\tt_cate\fix.php';
    }
    function update()
    {
        $id_cate = $_POST['id_cate'];
        $name = $_POST['name'];
        $active = $_POST['active'];
        $comment = new comment($id_cate, $name, $active);
        $result = $this->commentModel->Update($comment);
        if ($result == true)
            header('location: index.php?c=comment&a=list&r=1');
        else header('location: index.php?c=comment&a=list&r=0');
    }
    function delete()
    {
        $Id_cate = $_GET['id_cate'];
        $result = $this->commentModel->delete($Id_cate);
        if ($result == true)
            header('location: index.php?c=comment&a=list&r=1');
        else  header('location: index.php?c=comment&a=list&r=0');
    }
}
?>