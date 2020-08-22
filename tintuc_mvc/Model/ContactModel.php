<?php

class Contact
{
    public $id_contact;
    public $fullName;
    public $email;
    public $phoneNumber;
    public $title;
    public $content;
    public $status;
    public $active;

    public function __construct($id_contact, $fullName, $email, $phoneNumber, $title, $content, $status, $active)
    {
        $this->id_contact = $id_contact;
		$this->fullName = $fullName;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->title = $title;
        $this->content = $content;
        $this->status = $status;
        $this->active = $active;
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
        $data = [];
        foreach ($result->fetch_all() as $item) {
            array_push($data, new Contact($item[0], $item[1], $item[2], $item[3], $item[4], $item[5], $item[6], $item[7]));
        }
        return $data;
    }
    function Add(Contact $contact)
    {
        $query = "INSERT INTO contact VALUE('$contact->id_contact', '$contact->fullName', '$contact->email', '$contact->phoneNumber', '$contact->title', '$contact->content', '$contact->status','$contact->active')";
        $result = $this->mysql->query($query);
        return $result;
    }
    function GetbyIdcontact($id_contact)
    {
        $query = "SELECT
                        * 
                    FROM
                        contact
                    WHERE
                        id_contact = '$id_contact' LIMIT 1";
        $result = $this->mysql->query($query);
        $data = $result->fetch_all();
        if (count($data)) {
            return new Contact($data[0][0], $data[0][1], $data[0][2], $data[0][3], $data[0][4], $data[0][5], $data[0][6], $data[0][7]);
        }
        return null;
    }
    function Update(Contact $contact)
    {
        $query = "UPDATE contact SET  fullName = '$contact->fullName', email = '$contact->email', phoneNumber = '$contact->phoneNumber', title = '$contact->title', content = '$contact->content', status = '$contact->status', active = '$contact->active'
WHERE id_contact = '$contact->id_contact'";
        $result = $this->mysql->query($query);
        return $result;
    }
}
?>