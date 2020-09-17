<?php


class Post
{
    public $id_post;
    public $id_cate;
    public $intro;
    public $title;
    public $content;
    public $image;
    public $created_at;
    public $type;

    public function __construct($id_post, $id_cate, $intro, $title,$content,  $image, $created_at,  $type)
    {
        $this->id_post = $id_post;
        $this->id_cate = $id_cate;
        $this->title = $title;
        $this->intro = $intro;
        $this->content = $content;
        $this->image = $image;
        $this->created_at = $created_at;
        $this->type = $type;
    }
}
class PostModel
{
    private $mysql;

    public function __construct()
    {
        $this->mysql = new mysqli(hostname, username, password, dbname);
    }

    function GetAll()
    {
        $query = "SELECT * FROM post";
        $result = $this->mysql->query($query);
        $data_post = [];
        foreach ($result->fetch_all() as $item) {
            array_push($data_post, new Post($item[0], $item[1], $item[2], $item[3], $item[4], $item[5], $item[6],$item[7]));
        }
        return $data_post;
    }
    function GetDate()
    {
        $query = "SELECT * FROM post ORDER BY created_at DESC";
        $result = $this->mysql->query($query);
        $data_post = [];
        foreach ($result->fetch_all() as $item) {
            array_push($data_post, new Post($item[0], $item[1], $item[2], $item[3], $item[4], $item[5], $item[6],$item[7]));
        }
        return $data_post;
    }
    function Add(Post $post)
    {
        $query = "INSERT INTO post VALUE('$post->id_post', '$post->id_cate', '$post->title','$post->intro',  '$post->content', '$post->image','$post->created_at', '$post->type')";
        $result = $this->mysql->query($query);
        return $result;
    }
    function GetbyIdpost($id_post)
    {
        $query = "SELECT
                        * 
                    FROM
                        post
                    WHERE
                        id_post = '$id_post' LIMIT 1";
        $result = $this->mysql->query($query);
        $data_post= $result->fetch_all();
        if (count($data_post)) {
            return new Post($data_post[0][0], $data_post[0][1], $data_post[0][2], $data_post[0][3], $data_post[0][4], $data_post[0][5], $data_post[0][6],$data_post[0][7]);
        }
        return null;
    }
    function Update(Post $post)
    {
        $query = "UPDATE post SET  id_cate = '$post->id_cate',title = '$post->title', intro = '$post->intro', content = '$post->content',  image = '$post->image',created_at  =   '$post->created_at' ,type = '$post->type'
        WHERE id_post = '$post->id_post'";
        $result = $this->mysql->query($query);
        return $result;
    }
    function delete($id_post){
        $query = "DELETE FROM post WHERE id_post = $id_post";
        $result = $this->mysql->query($query);
        return $result;
    }

}
?>