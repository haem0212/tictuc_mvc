<html>
<body>
<form method="post" action="index.php?c=config&a=update">
    <table>
        <tr>
            <td>Id_configd</td>
            <td><input type="text" value="<?=$config->id_config?>" readonly name="id_config"></td>
        </tr>
        <tr>
            <td>Title</td>
            <td><input type="text" value="<?=$config->title?>" name="title"></td>
        </tr>
		<tr>
            <td>Description</td>
            <td><input type="text" value="<?=$config->description?>" name="description"></td>
        </tr>
        <tr>
            <td>Acitive</td>
            <td><input type="text" value="<?=$config->active?>" name="active"></td>
        </tr>
        <tr>
            <td><input type="reset" value="Xóa"></td>
            <td><input type="submit" value="Lưu"></td>
        </tr>
    </table>
</form>
</body>
</html>