
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
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
            <form method='post' action='index.php?c=post&a=update' style="width:60% " class="mt-5  mb-5 add-data" enctype="multipart/form-data">
                <h1 class="mb-3 text-uppercase text-primary text-center">Sửa bài viết</h1>

                <div class="form-group">
                    <label for="id_post">STT</label>
                    <input type="text" class="form-control" value="<?=$data_post->id_post?>" readonly name="id_post"  >
                </div>

                <div class="form-group">
                    <label for="id_cate">Chủ Đề</label>
                    <select name="id_cate" class="ml-3">
                        <?php
                        foreach ($data_cate as $item) {
                            ?>
                            <option name=""  value="<?=$item->id_cate?>"><?=$item->name?> </option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="title">Tiêu Đề <span class="text-danger sao">*</span></label>
                    <input type="text" class="form-control" name="title" value="<?=$data_post->title?>">
                </div>
                <div class="form-group">
                    <label for="intro">Nội dung TT <span class="text-danger sao">*</span></label>
                    <input type="text" class="form-control" name="intro" value="<?=$data_post->intro?>">
                </div>
                <div class="form-group">
                    <label for="content">Nội dung chính <span class="text-danger sao">*</span></label>
                    <textarea id="summernote" name="content"><?=$data_post->content?></textarea>
                </div>
                <div class="form-group">
                    <label for="image">ảnh <span class="text-danger sao">*</span></label>
                    <input name="file" id="file" type="file" class="form-control-file" onchange="fucHidden()" multiple>
                    <img id="myid" src="" alt="new image" style="display:none" />
                    <img id="myid2" src="../3tnews/assets/images/<?=$data_post->image?>" alt="new image" style="width: 200px" />
                    <input type="text" name="image" style="display:none;" value="<?=$data_post->image?>">
                </div>
                <div class="form-group">
                    <label for="created_at">Ngày nhập</label>
                    <input name="created_at" class="form-control" value="<?=$data_post->created_at?>" type="date">
                </div>
                <div class="form-group">
                    <label for="type">Nóng </label>
                    <input type="checkbox"  name="type" id="type" value="<?=$data_post->type?>">
                </div>
                <div class="form-group mt-4">
                    <input type="reset" value="Reset" class="btn btn-info font-weight-bold mr-4">
                    <input type="submit" value="Save" class="btn btn-danger font-weight-bold mr-4">
                    <a href="index.php?c=post&a=list" class="button btn btn-primary font-weight-bold">Back</a>
                </div>
            </form>

        </div>
    </div>
    <div class="footer bg-info text-center font-weight-bold" style="height: 50px;line-height: 3;">Copyright 3TTeam</div>
</div>

<script>
    $('#summernote').summernote({
        placeholder: 'Please enter...',
        tabsize: 2,
        dialogsInBody: true,
        height: 200,
    });
    function display(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (event) {
                $('#myid').attr('src', event.target.result)
                    .width(200);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#file").change(function () {
        display(this);
    });
    function fucHidden() {
        document.getElementById('myid2').style.display = "none";
        document.getElementById('myid').style.display = "block";
    }

</script>
</body>
</html>



