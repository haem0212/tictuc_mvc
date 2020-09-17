
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta username="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <title></title>

    <link href="assets/css/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
    <div class="header float-left bg-black ">
        <div class="header-logo ml-5 mt-3 float-left">
            <a class="logo" href="index.php?c=admin&a=list">
                <i class="fas fa-user-cog fa-2x float-left"></i>
                <h2 class="float-left" >ADMIN</h2>
            </a>
        </div>
        <div class="header-content float-left mt-3">
            <h3 class="float-left web">QUẢN LÝ WEBSITE</h3>

        </div>
        <div class="logout mt-3">

            <a href="loginad.php" style = "line-height: 38px;">LogOut</a>
        </div>
    </div>
    <div  class="clearfix"></div>
    <div class="container-fluid row">
        <div class="col-2 menubg">
            <div class="app-sidebar__inner">
                <ul class="vertical-nav-menu">
                    <li >
                        <a href="index.php?c=user&a=list">
                            <i class="fas fa-user"></i>
                            Quản lý tài khoản
                        </a>
                    </li>
                    <li >
                        <a href="index.php?c=category&a=list">
                            <i class="fas fa-gem"></i>
                            Quản lý thể loại
                        </a>
                    </li>
                    <li >
                        <a href="index.php?c=post&a=list">
                        <i class="fas fa-clipboard"></i>
                            Quản lý bài viết
                        </a>
                    </li>
                    <li >
                        <a href="index.php?c=contact&a=list">
                            <i class="fas fa-phone"></i>
                            Quản lý liên hệ
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-10">
            <form method="post" action="index.php?c=user&a=update" style="width:40% " class="mt-5  mb-5 add-data">
                <h1 class="mb-3 text-uppercase text-primary text-center">Sửa liên hệ</h1>
                <div class="form-group">
                    <label for="id">STT</label>
                    <input type="text" value="<?=$user->id?>" readonly name="id" class="form-control">
                </div>
                <div class="form-group">
                    <label for="username">Tên tài khoản<span class="text-danger sao">*</span></label>
                    <input type="text" value="<?=$user->username?>" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Tên tài khoản<span class="text-danger sao">*</span></label>
                    <input type="text" value="<?=$user->password?>" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="user_email">Email<span class="text-danger sao">*</span></label>
                    <input type="text" value="<?=$user->user_email?>" name="user_email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="user_phone">Số ĐT<span class="text-danger sao">*</span></label>
                    <input type="text" value="<?=$user->user_phone?>" name="user_phone" class="form-control">
                </div>

                <div class="form-group mt-4">
                    <input type="reset" value="Reset" class="btn btn-info font-weight-bold mr-4">
                    <input type="submit" value="Save" class="btn btn-danger font-weight-bold mr-4">
                    <a href="index.php?c=user&a=list" class="button btn btn-primary font-weight-bold">Back</a>
                </div>
            </form>
        </div>
    </div>
    <div class="footer bg-info text-center font-weight-bold" style="height: 50px;line-height: 3;">Copyright 3TTeam</div>
</div>

</body>
</html>






