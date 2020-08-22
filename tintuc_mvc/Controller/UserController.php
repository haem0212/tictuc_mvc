<?php

require 'Model\UserModel.php';

class UserController
{
    private $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }
    function list()
    {
        $data = $this->userModel->GetAll();
        require_once 'View\User\list.php';
    }
    function add()
    {
        require_once 'View\User\add.php';
    }
    function save()
    {
        $id_user = $_POST['id_user'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $birthday = $_POST['birthday'];
        $user = new User($id_user, $name, $email, $password, $gender, $birthday);
        $result = $this->userModel->Add($user);
        if ($result == true)
            header('location: index.php?c=user&a=list&r=1');
        else header('location: index.php?c=user&a=list&r=0');
    }
    function fix()
    {
        $Id_user = $_GET['id_user'];
        $user = $this->userModel->GetbyIdUser($Id_user);
        require_once 'View\user\fix.php';
    }
    function update()
    {
        $id_user = $_POST['id_user'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $birthday = $_POST['birthday'];
        $user = new User($id_user, $name, $email, $password, $gender, $birthday);
        $result = $this->userModel->Update($user);
        if ($result == true)
            header('location: index.php?c=User&a=list&r=1');
        else header('location: index.php?c=User&a=list&r=0');
    }
}
?>