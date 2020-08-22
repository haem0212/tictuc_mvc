<?php

class Comment
{
    public $id_cmt;
    public $id_user;
    public $id_post;
    public $content;
    public $status;
    public $active;

    public function __construct($id_cmt, $id_user, $id_post, $content, $status, $active)
    {
        $this->id_cmt = $id_cmt;
        $this->id_user = $id_user;
		$this->id_post = $id_post;
        $this->content = $content;
        $this->status = $status;
        $this->active = $active;
    }
}
class CommentModel
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
        $data = [];
        foreach ($result->fetch_all() as $item) {
            array_push($data, new Comment($item[0], $item[1], $item[2], $item[3], $item[4], $item[5]));
        }
        return $data;
    }
    function Add(Comment $comment)
    {
        $query = "INSERT INTO comment VALUE('$comment->id_cmt', '$comment->id_user', '$comment->id_post', '$comment->content', '$comment->status', '$comment->active')";
        $result = $this->mysql->query($query);
        return $result;
    }
    function GetbyIdcomment($id_cmt)
    {
        $query = "SELECT
                        * 
                    FROM
                        comment
                    WHERE
                        id_cmt = '$id_cmt' LIMIT 1";
        $result = $this->mysql->query($query);
        $data = $result->fetch_all();
        if (count($data)) {
            return new Comment($data[0][0], $data[0][1], $data[0][2], $data[0][3], $data[0][4], $data[0][5]);
        }
        return null;
    }
    function Update(Comment $comment)
    {
        $query = "UPDATE comment SET  id_user = '$comment->id_user', id_post = '$comment->id_post', content = '$comment->content', status = '$comment->status', active = '$comment->active'
WHERE id_cmt = '$comment->id_cmt'";
        $result = $this->mysql->query($query);
        return $result;
    }
}
?>