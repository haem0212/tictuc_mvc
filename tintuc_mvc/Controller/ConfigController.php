<?php

require 'Model\ConfigModel.php';

class ConfigController
{
    private $configModel;
    public function __construct()
    {
        $this->configModel = new ConfigModel();
    }
    function list()
    {
        $data = $this->configModel->GetAll();
        require_once 'View\Config\list.php';
    }
    function add()
    {
        require_once 'View\Config\add.php';
    }
    function save()
    {
        $id_config = $_POST['id_config'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $active = $_POST['active'];
        $config = new Config($id_config, $title, $description, $active);
        $result = $this->configModel->Add($config);
        if ($result == true)
            header('location: index.php?c=config&a=list&r=1');
        else header('location: index.php?c=config&a=list&r=0');
    }
    function fix()
    {
        $id_config = $_GET['id_config'];
        $config = $this->configModel->GetbyIdconfig($id_config);
        require_once 'View\Config\fix.php';
    }
    function update()
    {
        $id_config = $_POST['id_config'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $active = $_POST['active'];
        $config = new Config($id_config, $title, $description, $active);
        $result = $this->configModel->Update($config);
        if ($result == true)
            header('location: index.php?c=config&a=list&r=1');
        else header('location: index.php?c=config&a=list&r=0');
    }
}
?>