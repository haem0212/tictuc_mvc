<?php

class Admin
{
    public $id;
    public $username;
    public $password;

    public function __construct($id, $username, $password)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
    }
}
class AdminModel
{
    private $mysql;

    public function __construct()
    {
        $this->mysql = new mysqli(hostname, username, password, dbname);
    }

    function GetAll()
    {
        $query = "SELECT * FROM admin";
        $result = $this->mysql->query($query);
        $data = [];
        foreach ($result->fetch_all() as $item) {
            array_push($data, new Admin($item[0], $item[1], $item[2]));
        }
        return $data;
    }
    function Add(Admin $admin)
    {
        $query = "INSERT INTO admin VALUE('$admin->id', '$admin->username', '$admin->password')";
        $result = $this->mysql->query($query);
        return $result;
    }
    function GetByIdAdmin($id)
    {
        $query = "SELECT * FROM admin WHERE id = '$id' LIMIT 1";
        $result = $this->mysql->query($query);
        $data = $result->fetch_all();
        if (count($data)) {
            return new Admin($data[0][0], $data[0][1], $data[0][2]);
        }
        return null;
    }
    function Update(Admin $admin)
    {
        $query = "UPDATE admin SET  username = '$admin->username', password = '$admin->password'
WHERE id = '$admin->id'";
        $result = $this->mysql->query($query);
        return $result;
    }
    function delete($id){
        $query = "DELETE FROM admin WHERE id = $id";
        $result = $this->mysql->query($query);  
        return $result;
    }
}
?>