<?php

class Post
{
    public $id_post;
    public $id_cate;
    public $title;
    public $intro;
    public $content;
    public $image;
    public $tag;
    public $description;
    public $count_comment;

    public function __construct($id_post, $id_cate, $title, $intro, $content, $image, $tag, $description, $count_comment)
    {
        $this->id_post = $id_post;
        $this->id_cate = $id_cate;
		$this->title = $title;
        $this->intro = $intro;
        $this->content = $content;
        $this->image = $image;
        $this->tag = $tag;
        $this->description = $description;
        $this->count_comment = $count_comment;
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
        $data = [];
        foreach ($result->fetch_all() as $item) {
            array_push($data, new Post($item[0], $item[1], $item[2], $item[3], $item[4], $item[5], $item[6], $item[7], $item[8]));
        }
        return $data;
    }
    function Add(Post $post)
    {
        $query = "INSERT INTO post VALUE('$post->id_post', '$post->id_cate', '$post->title', '$post->intro', '$post->content', '$post->image', '$post->tag', '$post->description','$post->count_comment')";
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
        $data = $result->fetch_all();
        if (count($data)) {
            return new Post($data[0][0], $data[0][1], $data[0][2], $data[0][3], $data[0][4], $data[0][5], $data[0][6], $data[0][7], $data[0][8]);
        }
        return null;
    }
    function Update(Post $post)
    {
        $query = "UPDATE post SET  id_cate = '$post->id_cate', title = '$post->title', intro = '$post->intro', content = '$post->content', image = '$post->image', tag = '$post->tag', description = '$post->description', count_comment = '$post->count_comment'
WHERE id_post = '$post->id_post'";
        $result = $this->mysql->query($query);
        return $result;
    }
}
?>