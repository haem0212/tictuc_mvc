
<?php

class Contact
{
    public $id;
    public $fullname;
    public $email;
    public $phonenumber;

    public function __construct($id, $fullname, $email, $phonenumber)
    {
        $this->id = $id;
        $this->fullname = $fullname;
        $this->email = $email;
        $this->phonenumber = $phonenumber;
    }
}
class ContactModel
{
    private $mysql;

    public function __construct()
    {
        $this->mysql = new mysqli(hostname, username, password, dbname);
    }

    function GetAll()
    {
        $query = "SELECT * FROM contact";

        $result = $this->mysql->query($query);
        $data_contact= [];
        foreach ($result->fetch_all() as $item) {
            array_push($data_contact, new Contact($item[0], $item[1], $item[2], $item[3]));
        }
        return $data_contact;
    }
    function Add(Contact $contact)
    {
        $query = "INSERT INTO contact VALUE('$contact->id', '$contact->fullname', '$contact->email', '$contact->phonenumber')";
        $result = $this->mysql->query($query);
        return $result;
    }
    function GetByIdcontact($id)
    {
        $query = "SELECT
                        * 
                    FROM
                        contact
                    WHERE
                        id = '$id' LIMIT 1";
        $result = $this->mysql->query($query);
        $data_contact= $result->fetch_all();
        if (count($data_contact)) {
            return new Contact($data_contact[0][0], $data_contact[0][1], $data_contact[0][2], $data_contact[0][3]);
        }
        return null;
    }
    function Update(Contact $contact)
    {
        $query = "UPDATE contact SET  fullname = '$contact->fullname', email = '$contact->email', phonenumber = '$contact->phonenumber'
WHERE id = '$contact->id'";
        $result = $this->mysql->query($query);
        return $result;
    }
    function delete($id){
        $query = "DELETE FROM contact WHERE id = $id";
        $result = $this->mysql->query($query);
        return $result;
    }
}
?>
