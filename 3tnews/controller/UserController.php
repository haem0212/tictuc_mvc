<?php

require 'model\UserModel.php';

class UserController
{
    private $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }
    function list()
    {
        $data_user = $this->userModel->GetAll();
        require_once 'View\tt_user\list.php';
    }
    function add()
    { 
        require_once 'View\tt_user\add.php';
    }
    function save()
    {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user_email = $_POST['user_email'];
        $user_phone = $_POST['user_phone'];
        $user = new User($id, $username, $password, $user_email, $user_phone);
        $result = $this->userModel->Add($user);
        if ($result == true)
            header('location: index.php?c=user&a=list&r=1');
        else header('location: index.php?c=user&a=list&r=0');
    }
    function fix()
    {
        $id = $_GET['id'];
        $user = $this->userModel->GetbyIduser($id);
        require_once 'View\tt_user\fix.php';
    }
    function update()
    {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user_email = $_POST['user_email'];
        $user_phone = $_POST['user_phone'];
        $user = new User($id, $username, $password, $user_email, $user_phone);
        $result = $this->userModel->Add($user);
        if ($result == true)
            header('location: index.php?c=user&a=list&r=1');
        else header('location: index.php?c=user&a=list&r=0');
    }
    function delete()
    {
        $id = $_GET['id'];
        $result = $this->userModel->delete($id);   
        if ($result == true)
            header('location: index.php?c=user&a=list&r=1');
        else  header('location: index.php?c=user&a=list&r=0');
    }
}       
?>