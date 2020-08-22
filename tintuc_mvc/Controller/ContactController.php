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
        $data = $this->contactModel->GetAll();
        require_once 'View\Contact\list.php';
    }
    function add()
    {
        require_once 'View\Contact\add.php';
    }
    function save()
    {
        $id_contact = $_POST['id_contact'];
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phoneNumber'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $status = $_POST['status'];
        $active = $_POST['active'];

        $contact = new Contact($id_contact, $fullName, $email, $phoneNumber, $title, $content, $status, $active);
        $result = $this->contactModel->Add($contact);
        if ($result == true)
            header('location: index.php?c=contact&a=list&r=1');
        else header('location: index.php?c=contact&a=list&r=0');
    }
    function fix()
    {
        $id_contact = $_GET['id_contact'];
        $contact = $this->contactModel->GetbyIdcontact($id_contact);
        require_once 'View\Contact\fix.php';
    }
    function update()
    {
        $id_contact = $_POST['id_contact'];
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phoneNumber'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $status = $_POST['status'];
        $active = $_POST['active'];
        
        $contact = new Contact($id_contact, $fullName, $email, $phoneNumber, $title, $content, $status, $active);
        $result = $this->contactModel->Update($contact);
        if ($result == true)
            header('location: index.php?c=contact&a=list&r=1');
        else header('location: index.php?c=contact&a=list&r=0');
    }
}
?>