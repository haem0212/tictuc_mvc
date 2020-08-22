<!DOCTYPE html>
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
    <link href="Assets/maincss.css" rel="stylesheet">
</head>
<body>
<?php
define('hostname','localhost');
define('username','root');
define('password','');
define('dbname','baotintuc');
?>
    <div class="controller">
    
    <a href="http://localhost/PHP/tintuc_mvc/index.php?c=user&a=list">Admin</a>
    <h1>Báo Tin Tức</h1>
    </div>
    <div class="controller">
        <div class="row">
            <div class="tt col-3" style="display:block; width: 100px; height: 100px; outline:black solid 2px;">
                <?php
                foreach ($data as $post) {
                    ?>
                    <h3><?=$post->content?></h3>
                    <?php
                }
               ?> e
            </div>
        </div>
    </div>
</body>
</html>