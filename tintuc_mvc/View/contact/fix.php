<html>
<body>
<form method="post" action="index.php?c=contact&a=update">
    <table>
        <tr>
            <td>Id_contact</td>
            <td><input type="text" value="<?=$contact->id_contact?>" readonly name="id_contact"></td>
        </tr>
        <tr>
            <td>FullName</td>
            <td><input type="text" value="<?=$contact->fullName?>" name="fullName"></td>
        </tr>
		<tr>
            <td>Email</td>
            <td><input type="text" value="<?=$contact->email?>" name="email"></td>
        </tr>
        <tr>
            <td>PhoneNumber</td>
            <td><input type="text" value="<?=$contact->phoneNumber?>" name="phoneNumber"></td>
        </tr>
        <tr>
            <td>Title</td>
            <td><input type="text" value="<?=$contact->title?>" name="title"></td>
        </tr>
        <tr>
            <td>Content</td>
            <td><input type="text" value="<?=$contact->content?>" name="content"></td>
        </tr>
        <tr>
            <td>Status</td>
            <td><input type="text" value="<?=$contact->status?>" name="status"></td>
        </tr>
        <tr>
            <td>Active</td>
            <td><input type="text" value="<?=$contact->active?>" name="active"></td>
        </tr>
        <tr>
            <td><input type="reset" value="Xóa"></td>
            <td><input type="submit" value="Lưu"></td>
        </tr>
    </table>
</form>
</body>
</html>