

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta username="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <title></title>

    <link rel="stylesheet" href="assets/lib/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    <script src="assets/lib/jquery/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link href="assets/lib/datatables/datatables-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet"/>
    <link href="assets/lib/datatables/datatables-responsive/css/responsive.bootstrap4.min.css" rel="stylesheet"/>

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
        <div class="header-logo  ml-5 mt-3 float-left">
            <a class="logo" href="index.php?c=admin&a=list">
                <i class="fas fa-user-cog fa-2x float-left"></i>
                <h2 class="float-left" >ADMIN</h2>

            </a>
			
        </div>
        <div class="header-content  float-left mt-3">
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

            <button class="add mt-4" style="margin-left: 2%"><a href="index.php?c=user&a=add">Thêm <i class="fas fa-plus"></i></a></button>
			
            <div class="card mb-5">
                <div class="card-body">
                    <table id="listData" class="table table-bordered table-striped dataTable dtr-inline " role="grid"
                           aria-describedby="example1_info">
                        <thead>
                        <tr role="row">
                            <th class="sorting text-center" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1"
                                aria-label="Engine version: activate to sort column ascending">STT
                            </th>
                            <th class="sorting text-center"  tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1"
                                aria-label="Browser: activate to sort column ascending">Tên đăng nhập
                            </th>
                            <th class="sorting text-center"  tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1"
                                aria-label="Browser: activate to sort column ascending">Mật khẩu
                            </th>
                            <th class="sorting text-center"  tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1"
                                aria-label="Browser: activate to sort column ascending">Email
                            </th>
                            <th class="sorting text-center"  tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1"
                                aria-label="Browser: activate to sort column ascending">Số ĐT
                            </th>
                            <th class="text-center" >Chức năng</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($data_user as $item) {
                            ?>
                            <tr role="row" class="odd">
                                <td class="align-middle text-center sorting_1" tabindex="0" ><?= $item->id?></td>
                                <td class="align-middle text-center"><?= $item->username?></td>
                                <td class="align-middle text-center"><?= $item->password?></td>
                                <td class="align-middle text-center"><?= $item->user_email?></td>
                                <td class="align-middle text-center"><?= $item->user_phone?></td>
                                <td class="text-center align-middle">
                                    <a class="btn btn-primary btn-shadow text-white mr-2" href="index.php?c=user&a=fix&id=<?=$item->id?>"><i class="fas fa-edit"></i> </a>
                                    <a class="btn btn-success  btn-shadow text-white button-large-delete"
                                       href="javascript:void(0);" onclick="DeleteRecord(<?= $item->id ?>)"><i
                                                class="fas fa-trash"></i></a>

                                </td>
                            </tr>
                            <?php
                        }
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="footer bg-info text-center font-weight-bold" style="height: 50px;line-height: 3;">Copyright 3TTeam</div>
</div>


<script src="assets/lib/datatables/datatables/jquery.dataTables.min.js"></script>
<script src="assets/lib/datatables/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/lib/datatables/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/lib/datatables/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
    $(document).ready(function () {
        $('#listData').dataTable();
    });
    function DeleteRecord(id) {
        alertify.confirm('Delete Comfirm', 'Bạn có chắc chắn xóa ?', function () {
            DoDelete(id)
        }, function () {
            alertify.error('Cancel')
        });
    }

    function DoDelete(id) {
        $.ajax({
            type: "DELETE",
            url: "index.php?c=user&a=delete&id=" + id,
            dataType: "html",
            success: function (html) {
                location.reload();

            },
            error: function (req, status, error) {
                alert(error);
            }


        });
    }
</script>
</body>
</html>