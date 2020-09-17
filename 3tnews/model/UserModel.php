<?php

class User
{
    public $id;
    public $username;
    public $password;
    public $user_email;
    public $user_phone;

    public function __construct($id, $username, $password, $user_email, $user_phone)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->user_email = $user_email;
        $this->user_phone = $user_phone;
    }
}
class UserModel
{
    private $mysql;
    public function __construct()
    {
        $this->mysql = new mysqli(hostname, username, password, dbname);
    }

    function GetAll()
    {
        $query = "SELECT * FROM user";
        $result = $this->mysql->query($query);
        $data_user = [];
        foreach ($result->fetch_all() as $item) {
            array_push($data_user, new user($item[0], $item[1], $item[2], $item[3], $item[4]));
        }
        return $data_user;
    }
    function Add(User $user)
    {
        $query = "INSERT INTO user VALUE('$user->id', '$user->username', '$user->password', '$user->user_email', '$user->user_phone')";
        $result = $this->mysql->query($query);
        return $result;
    }
    function GetByIduser($id)
    {
        $query = "SELECT * FROM user WHERE id = '$id' LIMIT 1";
        $result = $this->mysql->query($query);
        $data_user = $result->fetch_all();
        if (count($data_user)) {
            return new user($data_user[0][0], $data_user[0][1], $data_user[0][2], $data_user[0][3], $data_user[0][4]);
        }
        return null;
    }
    function Update(User $user)
    {
        $query = "UPDATE user SET  username = '$user->username', password = '$user->password', user_email = '$user->user_email', user_phone = '$user->user_phone'
WHERE id = '$user->id'";
        $result = $this->mysql->query($query);
        return $result;
    }
    function delete($id){
        $query = "DELETE FROM user WHERE id = $id";
        $result = $this->mysql->query($query);  
        return $result;
    }
}
?>