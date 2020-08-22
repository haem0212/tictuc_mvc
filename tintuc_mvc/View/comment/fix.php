<html>
<body>
<form method="post" action="index.php?c=comment&a=update">
    <table>
        <tr>
            <td>Id_cmt</td>
            <td><input type="text" value="<?=$comment->id_cmt?>" readonly name="id_cmt"></td>
        </tr>
        <tr>
            <td>Id_user</td>
            <td><input type="text" value="<?=$comment->id_user?>" name="id_user"></td>
        </tr>
		<tr>
            <td>Id_post</td>
            <td><input type="text" value="<?=$comment->id_post?>" name="id_post"></td>
        </tr>
        <tr>
            <td>Content</td>
            <td><input type="text" value="<?=$comment->content?>" name="content"></td>
        </tr>
        <tr>
            <td>Status</td>
            <td><input type="text" value="<?=$comment->status?>" name="status"></td>
        </tr>
        <tr>
            <td>Acitive</td>
            <td><input type="text" value="<?=$comment->active?>" name="active"></td>
        </tr>
        <tr>
            <td><input type="reset" value="Xóa"></td>
            <td><input type="submit" value="Lưu"></td>
        </tr>
    </table>
</form>
</body>
</html>