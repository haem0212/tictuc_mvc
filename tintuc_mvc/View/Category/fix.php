<html>
<body>
<form method="post" action="index.php?c=category&a=update">
    <table>
        <tr>
            <td>Id_cate</td>
            <td><input type="text" value="<?=$category->id_cate?>" readonly name="id_cate"></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" value="<?=$category->name?>" name="name"></td>
        </tr>
		<tr>
            <td>Tag</td>
            <td><input type="text" value="<?=$category->tag?>" name="tag"></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><input type="text" value="<?=$category->description?>" name="description"></td>
        </tr>
        <tr>
            <td>Icon</td>
            <td><input type="text" value="<?=$category->icon?>" name="icon"></td>
        </tr>
        <tr>
            <td>Slug</td>
            <td><input type="text" value="<?=$category->slug?>" name="slug"></td>
        </tr>
        <tr>
            <td>Acitive</td>
            <td><input type="text" value="<?=$category->active?>" name="active"></td>
        </tr>
        <tr>
            <td><input type="reset" value="Xóa"></td>
            <td><input type="submit" value="Lưu"></td>
        </tr>
    </table>
</form>
</body>
</html>