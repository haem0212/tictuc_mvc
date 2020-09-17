<?php

require 'Model\ContactModel.php';

class ContactController
{
    private $contactModel;
    public function __construct()
    {
        $this->contactModel = new ContactModel();
    }
    function list()
    {
        $data_contact= $this->contactModel->GetAll();
        require_once 'View\tt_contact\list.php';
    }
    function add()
    {
        require_once 'View\tt_contact\add.php';
    }
    function save()
    {
        $id = $_POST['id'];
        $name = $_POST['fullname'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $contact = new Contact($id, $name, $email, $phonenumber);
        $result = $this->contactModel->Add($contact);
        if ($result == true)
            header('location: index.php?c=contact&a=list&r=1');
        else header('location: index.php?c=contact&a=list&r=0');
    }
    function fix()
    {
        $id = $_GET['id'];
        $contact = $this->contactModel->GetbyIdcontact($id);
        require_once 'View\tt_contact\fix.php';
    }
    function update()
    {
        $id = $_POST['id'];
        $name = $_POST['fullname'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $contact = new Contact($id, $name, $email, $phonenumber);
        $result = $this->contactModel->Update($contact);
        if ($result == true)
            header('location: index.php?c=contact&a=list&r=1');
        else header('location: index.php?c=contact&a=list&r=0');
    }
    function delete()
    {
        $id = $_GET['id'];
        $result = $this->contactModel->delete($id);
        if ($result == true)
            header('location: index.php?c=contact&a=list&r=1');
        else  header('location: index.php?c=contact&a=list&r=0');
    }
}
?>