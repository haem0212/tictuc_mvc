<?php

class User
{
    public $id_user;
    public $name;
    public $email;
    public $password;
    public $gender;
    public $birthday;

    public function __construct($id_user, $name, $email, $password, $gender, $birthday)
    {
        $this->id_user = $id_user;
        $this->name = $name;
		$this->email = $email;
        $this->password = $password;
        $this->gender = $gender;
        $this->birthday = $birthday;
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
        $data = [];
        foreach ($result->fetch_all() as $item) {
            array_push($data, new User($item[0], $item[1], $item[2], $item[3], $item[4], $item[5]));
        }
        return $data;
    }
    function Add(User $user)
    {
        $query = "INSERT INTO user VALUE('$user->id_user', '$user->name', '$user->email', '$user->password', '$user->gender', '$user->birthday')";
        $result = $this->mysql->query($query);
        return $result;
    }
    function GetByIdUser($id_user)
    {
        $query = "SELECT
                        * 
                    FROM
                        user
                    WHERE
                        id_user = '$id_user' LIMIT 1";
        $result = $this->mysql->query($query);
        $data = $result->fetch_all();
        if (count($data)) {
            return new User($data[0][0], $data[0][1], $data[0][2], $data[0][3], $data[0][4], $data[0][5]);
        }
        return null;
    }
    function Update(User $user)
    {
        $query = "UPDATE user SET  name = '$user->name', email = '$user->email', password = '$user->password', gender = '$user->gender', birthday = '$user->birthday'
WHERE id_user = '$user->id_user'";
        $result = $this->mysql->query($query);
        return $result;
    }
}
?>