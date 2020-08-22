<html>
<body>
<form method="post" action="index.php?c=user&a=update">
    <table>
        <tr>
            <td>Id</td>
            <td><input type="text" value="<?=$user->id_user?>" readonly name="id_user"></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" value="<?=$user->name?>" name="name"></td>
        </tr>
		<tr>
            <td>Email</td>
            <td><input type="text" value="<?=$user->email?>" name="email"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" value="<?=$user->password?>" name="password"></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><input type="text" value="<?=$user->gender?>" name="gender"></td>
        </tr>
        <tr>
            <td>Birthday</td>
            <td><input type="text" value="<?=$user->birthday?>" name="birthday"></td>
        </tr>
        <tr>
            <td><input type="reset" value="Xóa"></td>
            <td><input type="submit" value="Lưu"></td>
        </tr>
    </table>
</form>
</body>
</html>