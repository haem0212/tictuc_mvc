<?php

class Category
{
    public $id_cate;
    public $name;
    public $tag;
    public $description;
    public $icon;
    public $slug;
    public $active;

    public function __construct($id_cate, $name, $tag, $description, $icon, $slug, $active)
    {
        $this->id_cate = $id_cate;
        $this->name = $name;
		$this->tag = $tag;
        $this->description = $description;
        $this->icon = $icon;
        $this->slug = $slug;
        $this->active = $active;
    }
}
class CategoryModel
{
    private $mysql;

    public function __construct()
    {
        $this->mysql = new mysqli(hostname, username, password, dbname);
    }

    function GetAll()
    {
        $query = "SELECT * FROM category";

        $result = $this->mysql->query($query);
        $data = [];
        foreach ($result->fetch_all() as $item) {
            array_push($data, new Category($item[0], $item[1], $item[2], $item[3], $item[4], $item[5], $item[6]));
        }
        return $data;
    }
    function Add(Category $category)
    {
        $query = "INSERT INTO category VALUE('$category->id_cate', '$category->name', '$category->tag', '$category->description', '$category->icon', '$category->slug', '$category->active')";
        $result = $this->mysql->query($query);
        return $result;
    }
    function GetByIdcategory($id_cate)
    {
        $query = "SELECT
                        * 
                    FROM
                        category
                    WHERE
                        id_cate = '$id_cate' LIMIT 1";
        $result = $this->mysql->query($query);
        $data = $result->fetch_all();
        if (count($data)) {
            return new Category($data[0][0], $data[0][1], $data[0][2], $data[0][3], $data[0][4], $data[0][5], $data[0][6]);
        }
        return null;
    }
    function Update(Category $category)
    {
        $query = "UPDATE category SET  name = '$category->name', tag = '$category->tag', description = '$category->description', icon = '$category->icon', slug = '$category->slug', active = '$category->active'
WHERE id_cate = '$category->id_cate'";
        $result = $this->mysql->query($query);
        return $result;
    }
}
?>