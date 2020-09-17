
<?php

class Category
{
    public $id_cate;
    public $name;

    public function __construct($id_cate, $name)
    {
        $this->id_cate = $id_cate;
        $this->name = $name;
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
        $data_cate= [];
        foreach ($result->fetch_all() as $item) {
            array_push($data_cate, new Category($item[0], $item[1]));
        }
        return $data_cate;
    }
    function Add(Category $category)
    {
        $query = "INSERT INTO category VALUE('$category->id_cate', '$category->name')";
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
        $data_cate= $result->fetch_all();
        if (count($data_cate)) {
            return new Category($data_cate[0][0], $data_cate[0][1]);
        }
        return null;
    }
    function Update(Category $category)
    {
        $query = "UPDATE category SET  name = '$category->name'
WHERE id_cate = '$category->id_cate'";
        $result = $this->mysql->query($query);
        return $result;
    }
    function delete($id_cate){
        $query = "DELETE FROM category WHERE id_cate = $id_cate";
        $result = $this->mysql->query($query);
        return $result;
    }
}
?>
