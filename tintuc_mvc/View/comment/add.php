<html>
<body>
<form method="post" action="index.php?c=comment&a=save">
    <table>
        <tr>
            <td>Id_cmt</td>
            <td><input type="text" name="id_cmt"></td>
        </tr>
        <tr>
            <td>Id_user</td>
            <td><input type="text" name="id_user"></td>
        </tr>
		<tr>
            <td>Id_post</td>
            <td><input type="text" name="id_post"></td>
        </tr>
        <tr>
            <td>Content</td>
            <td><input type="text" name="content"></td>
        </tr>
        <tr>
            <td>Status</td>
            <td><input type="text" name="status"></td>
        </tr>
        <tr>
            <td>Active</td>
            <td><input type="text" name="active"></td>
        </tr>
        <tr>
            <td><input type="reset" value="Xóa"></td>
            <td><input type="submit" value="Lưu"></td>
        </tr>
    </table>
</form>
</body>
</html>