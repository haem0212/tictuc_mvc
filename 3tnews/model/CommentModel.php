<?php


class comment
{
    public $id;
    public $user_id; 
    public $post_id;   
    public $content;
    public function __construct($id,$user_id, $post_id,$content)
    {
        $this->id = $id_comment;
        $this->user_id = $user_id;
        $this->post_id = $post_id;
        $this->content = $content;
        
    }
}
class commentModel
{
    private $mysql;

    public function __construct()
    {
        $this->mysql = new mysqli(hostname, username, password, dbname);
    }

    function GetAll()
    {
        $query = "SELECT * FROM comment";
        $result = $this->mysql->query($query);
        $data_comment = [];
        foreach ($result->fetch_all() as $item) {
            array_push($data_comment, new comment($item[0], $item[1], $item[2], $item[3]));
        }
        return $data_comment;
    }
    function Add(comment $comment)
    {
        $query = "INSERT INTO comment VALUE('$comment->id', '$comment->user_id', '$comment->post_id', '$comment->content')";
        $result = $this->mysql->query($query);
        return $result;
    }
  
    
    function delete($id){
        $query = "DELETE FROM comment WHERE id = $id";
        $result = $this->mysql->query($query);
        return $result;
    }

}
?>