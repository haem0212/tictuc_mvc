<html>
<body>
<form method="post" action="index.php?c=post&a=update">
    <table>
        <tr>
            <td>Id_post</td>
            <td><input type="text" value="<?=$post->id_post?>" readonly name="id_post"></td>
        </tr>
        <tr>
            <td>Id_cate</td>
            <td><input type="text" value="<?=$post->id_cate?>" name="id_cate"></td>
        </tr>
		<tr>
            <td>Title</td>
            <td><input type="text" value="<?=$post->title?>" name="title"></td>
        </tr>
        <tr>
            <td>Intro</td>
            <td><input type="text" value="<?=$post->intro?>" name="intro"></td>
        </tr>
        <tr>
            <td>Content</td>
            <td><input type="text" value="<?=$post->content?>" name="content"></td>
        </tr>
        <tr>
            <td>Image</td>
            <td><input type="text" value="<?=$post->image?>" name="image"></td>
        </tr>
        <tr>
            <td>Tag</td>
            <td><input type="text" value="<?=$post->tag?>" name="tag"></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><input type="text" value="<?=$post->description?>" name="description"></td>
        </tr>
        <tr>
            <td>Count_comment</td>
            <td><input type="text" value="<?=$post->count_comment?>" name="count_comment"></td>
        </tr>
        <tr>
            <td><input type="reset" value="Xóa"></td>
            <td><input type="submit" value="Lưu"></td>
        </tr>
    </table>
</form>
</body>
</html>