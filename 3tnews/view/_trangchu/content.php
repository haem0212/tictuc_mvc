<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="assets/css/teml.css">
</head>
<body>
    <div class="wrapper"> 
        <?php include 'view/_teml/header.php';?>
        <div class= "container">
        <?php include 'view/_teml/content_post.php';?>
        <!-- <?php include 'view/_teml/contact.php';?> -->
        </div>

    </div>  
        <div class="main-container pt-3">
            <div class="container">
                <div class="main-col">
                    <div class="timeline loadmore">
                        <?php include 'view/_teml/tinkhac.php';?>
                    </div>     
                </div>          
            </div>       
        </div>
    <div class="clearfix"></div>
    <div class=" bg-info text-center font-weight-bold mt-4" style="height: 50px;line-height: 3;">Copyright 3TTeam</div>
</body>
</html>
