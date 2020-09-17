<?php

require 'Model\PostModel.php';
require 'Model\CategoryModel.php';


class PostController
{
    private $postModel;
    private $categoryModel;
    public function __construct()
    {
        $this->postModel = new PostModel();
        $this->categoryModel = new CategoryModel();
    }
    function list()
    {
        $data_post= $this->postModel->GetAll();
        $data_cate= $this->categoryModel->GetAll();
        require_once 'View\tt_post\list.php';
    }
    function add()
    {
        $data_cate = $this->categoryModel->GetAll();
        require_once 'View\tt_post\add.php';
    }
    function save()
    {
        $flag = false;
        echo "post";
        $image = "";
        $files = $_FILES['file'];
        $fileName = $_FILES['file']['name'];
        echo $fileName;
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];
        $fileExt = explode('.',$fileName);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = array('jpg','jpeg','png','pdf');
        if (in_array($fileActualExt,$allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 1000000) {
                    $fileNameNew = uniqid('',true).".".$fileActualExt;
                    $fileDestination = 'C:/xampp/htdocs/3tnews/assets/images/'.$fileNameNew;
                    $image = $fileNameNew;
                    move_uploaded_file($fileTmpName,$fileDestination);
                    $flag = true;
                }else{ echo"You cannot upload files of the type";}
            }else{ echo"You cannot upload files of the type";}
        }
        elseif ($_POST['image'] !=""){
            $image = $_POST['image'];
            $flag = true;
        }
        else{ echo"You cannot upload files of the type"; }
        $id_post = $_POST['id_post'];
        $id_cate = $_POST['id_cate'];
        $title = $_POST['title'];
        $intro = $_POST['intro'];
        $content = $_POST['content'];
        $created_at =  $_POST['created_at'];
        $type = $_POST['type'];

        $post = new Post($id_post, $id_cate,$title, $intro, $content, $image, $created_at, $type);
        $result = $this->postModel->Add($post);
        if ($result == true)
            header('location: index.php?c=post&a=list&r=1');
        else header('location: index.php?c=post&a=list&r=0');
    }
    function fix()
    {
        $id_post = $_GET['id_post'];
        $data_cate = $this->categoryModel->GetAll();
        $data_post = $this->postModel->GetbyIdpost($id_post);
       
        require_once 'View\tt_post\fix.php';
    }
    function update()
    {
        $flag = false;
        echo "post";
        $image = "";
        $files = $_FILES['file'];
        $fileName = $_FILES['file']['name'];
        echo $fileName;
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];
        $fileExt = explode('.',$fileName);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = array('jpg','jpeg','png','pdf');
        if (in_array($fileActualExt,$allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 1000000) {
                    $fileNameNew = uniqid('',true).".".$fileActualExt;
                    $fileDestination = 'C:/xampp/htdocs/3tnews/assets/images/'.$fileNameNew;
                    $image = $fileNameNew;
                    move_uploaded_file($fileTmpName,$fileDestination);
                    $flag = true;
                }else{ echo"You cannot upload files of the type";}
            }else{ echo"You cannot upload files of the type";}
        }
        elseif ($_POST['image'] !=""){
            $image = $_POST['image'];
            $flag = true;
        }
        else{ echo"You cannot upload files of the type"; }
        $id_post = $_POST['id_post'];
        $id_cate = $_POST['id_cate'];
        $title = $_POST['title'];
        $intro = $_POST['intro'];
        $content = $_POST['content'];
        $created_at =  $_POST['created_at'];
        $type = $_POST['type'];

        $post = new Post($id_post, $id_cate, $title, $intro, $content, $image,$created_at, $type);
        $result = $this->postModel->Update($post);
        if ($result == true)
            header('location: index.php?c=post&a=list&r=1');
        else header('location: index.php?c=post&a=list&r=0');
    }
    function delete()
    {
        $id_post = $_GET['id_post'];
        $result = $this->postModel->delete($id_post);
        if ($result == true)
            header('location: index.php?c=post&a=list&r=1');
        else  header('location: index.php?c=post&a=list&r=0');
    }
}
?>