<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Tin Tức</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="Assets/maincss.css" rel="stylesheet"></head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <body>
        <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
            <div class="app-header header-shadow text-center">
                <div class="app-header__logo text-center">
                   <a href="http://localhost/PHP/tintuc_mvc/index.php?c=user&a=list">
                    <h2 class="ml-4 float-right" style="color:black">ADMIN</h2>
                    <i class="fas fa-user-cog float-left" style="color:black; font-size:35px"></i>
                    </a>
            </div>
            
            <div class="app-header__content text-center">
                <h3>QUẢN LÝ WEBSITE</h3>
            </div>
        </div>        
        <div class="ui-theme-settings">
        </div>        
        <div class="app-main row">
            <div class="sidebar-shadow col-3 float-left">       
                 <div class="scrollbar-sidebar" style="background-color:#e1f5e7; padding-top:10px">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li >
                                <a href="http://localhost/PHP/tintuc_mvc/index.php?c=user&a=list">
                                <i class="fas fa-user"></i>
                                    User
                                </a>
                            </li>
                            <li >
                                <a href="http://localhost/PHP/tintuc_mvc/index.php?c=category&a=list">
                                <i class="fas fa-gem"></i>
                                    Category
                                </a>
                            </li>
                            <li >
                                <a href="http://localhost/PHP/tintuc_mvc/index.php?c=post&a=list">
                                <i class="fas fa-clipboard"></i>
                                    Post
                                </a>
                            </li>
                            <li>
                                <a href="http://localhost/PHP/tintuc_mvc/index.php?c=comment&a=list">
                                <i class="fas fa-comment"></i>
                                    Comment
                                </a>
                            </li>
                            <li>
                                <a href="http://localhost/PHP/tintuc_mvc/index.php?c=contact&a=list">
                                <i class="fas fa-phone"></i>
                                    </i>Contact
                                </a>
                            </li>
                            <li>
                                <a href="http://localhost/PHP/tintuc_mvc/index.php?c=config&a=list">
                                <i class="fas fa-address-book"></i>
                                    </i>Config
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>  
            <div class="main-box col-8 float-left">
               
                <p>
                    <?php
                    if (isset($_GET['r'])) {
                        if ($_GET['r'] == 1) {
                            echo 'Thành công';
                        } else{
                            echo 'Không thành công';
                        }
                    }
                    ?>
                </p>
                <table >
                    <tr>
                        <th>Id_category</th>
                        <th>Name</th>
                        <th>Tag</th>
                        <th>Description</th>
                        <th>Icon</th>
                        <th>Slug</th>
                        <th>Active</th>
                    </tr>
                    <?php
                    foreach ($data as $item) {
                        ?>
                        <tr>
                            <td><?= $item->id_cate?></td>
                            <td><?= $item->name?></td>
                            <td><?= $item->tag?></td>
                            <td><?= $item->description?></td>
                            <td><?= $item->icon?></td>
                            <td><?= $item->slug?></td>
                            <td><?= $item->active?></td>
                            <td>
                                <a href="index.php?c=category&a=fix&id_cate=<?=$item->id_cate?>">Sửa</a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
                <button><a href="index.php?c=category&a=add">Thêm mới</a></button>
            </div>  
         </div>   
</div>
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>
