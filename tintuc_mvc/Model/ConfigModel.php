<?php

class Config
{
    public $id_config;
    public $title;
    public $description;
    public $active;

    public function __construct($id_config, $title, $description, $active)
    {
        $this->id_config = $id_config;
        $this->title = $title;
		$this->description = $description;
        $this->active = $active;
    }
}
class ConfigModel
{
    private $mysql;

    public function __construct()
    {
        $this->mysql = new mysqli(hostname, username, password, dbname);
    }

    function GetAll()
    {
        $query = "SELECT * FROM config";

        $result = $this->mysql->query($query);
        $data = [];
        foreach ($result->fetch_all() as $item) {
            array_push($data, new Config($item[0], $item[1], $item[2], $item[3]));
        }
        return $data;
    }
    function Add(Config $config)
    {
        $query = "INSERT INTO config VALUE('$config->id_config', '$config->title', '$config->description', '$config->active')";
        $result = $this->mysql->query($query);
        return $result;
    }
    function GetbyIdconfig($id_config)
    {
        $query = "SELECT
                        * 
                    FROM
                        config
                    WHERE
                        id_config = '$id_config' LIMIT 1";
        $result = $this->mysql->query($query);
        $data = $result->fetch_all();
        if (count($data)) {
            return new Config($data[0][0], $data[0][1], $data[0][2], $data[0][3]);
        }
        return null;
    }
    function Update(Config $config)
    {
        $query = "UPDATE config SET  title = '$config->title', description = '$config->description', active = '$config->active'
WHERE id_config = '$config->id_config'";
        $result = $this->mysql->query($query);
        return $result;
    }
}
?>