<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <title>HighCriteria | Magazine Template</title>
        <!-- ======== META TAGS ======== -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- ======== FAVICONS ======== -->
        <link rel="icon" href="favicon.ico">
        <link rel="apple-touch-icon" href="favicon.png">
        <!-- ======== STYLESHEETS ======== -->
        <!-- Stylesheet -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/typography.css">
        <link rel="stylesheet" href="css/fontawesome.css">
        <link rel="stylesheet" href="css/weathericons.css">
        <link rel="stylesheet" href="css/colors.css">
        <link rel="stylesheet" href="css/style.css"><link rel="stylesheet" href="css/demo.css">
        <!-- ======== RESPONSIVE ======== -->
        <link rel="stylesheet" media="(max-width:767px)" href="css/0-responsive.css">
        <link rel="stylesheet" media="(min-width:768px) and (max-width:1024px)" href="css/768-responsive.css">
        <link rel="stylesheet" media="(min-width:1025px) and (max-width:1199px)" href="css/1025-responsive.css">
        <link rel="stylesheet" media="(min-width:1200px)" href="css/1200-responsive.css">
        <!-- ======== GOOGLE FONTS ======== -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
        .header{
            height: 40px;
            outline: 1px solid black;
            background: #dbd4bf;
            padding-top:10px;
        }
        .caret{
          
        }
        .dropdown-menu {
            display: none;
            position: absolute;
            left:-115px;
            background-color: #f9f9f9;
            min-width: 50px;
            box-shadow: 8px 0px 16px 16px rgba(0,0,0,0.2);
            /* padding: 0px 0px 20px 0px;; */
            z-index: 1;
        }
    </style>
</head>
<body>
    <div class="controller">
        <div class="header">
            <div style="float:left; margin-left:20px;">
                <b>Email: 3tteam@gmail.com   <b>Sdt: 0377677776</b></b>
            </div>
            <label style="float:right; font-size:15px">Hi <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>
                <div class="dropdown"style="float:right;margin-right:20px;margin-left:10px;">
                    <!-- <button class=" dropdown-toggle" type="button" data-toggle="dropdown"> -->
                   <!--<span class="caret dropdown-toggle" data-toggle="dropdown" style="font-size:50px;"></span>  </button> -->
                   <i class="fas fa-caret-down dropdown-toggle"data-toggle="dropdown" style="font-size:20px;"></i>
                   <ul class="dropdown-menu">
                        <li> <a href="reset-password.php">Reset Password</a></li>
                        <li><a href="logout.php">Sign Out</a></li>
                    </ul>
                </div>
            </label>
        </div>
    </div>
    <div id="wrapper" class="wide">
            <!-- Header -->
            <header id="header">
                
                <!-- Header body -->
                <div class="header_body">
                    <div class="container">
                        <!-- Logo -->
                        <div class="brand_logo row">
                            <h1 id="site_title"><a href="home.php"><span>3T</span>Team</a></h1>
                            <h2 id="site_description">Team Toàn Tạ</h2>
                        </div>

                        <!-- Banner -->
                        
                    </div>
                </div>
                <!-- Header menu -->
                <div class="header_menu">
                    <div class="container">
                        <div class="open_main_menu"><i class="fa fa-bars"></i></div>
                        <nav class="main_menu dark clearfix">
                            <ul class="header_main_menu clearfix">
                                <li style="border-bottom-color: #ff6600"><a href="#"><span>Home</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="index-2.html">Homepage - default</a></li>
                                        <li><a href="index_1.html">Homepage - fullwidth slider</a></li>
                                        <li><a href="index_5.html">Homepage - no sidebar</a></li>
                                        <li><a href="index_3.html">Homepage - timeline</a></li>
                                        <li><a href="index_4.html">Homepage - standard posts</a></li>
                                        
                                    </ul>
                                </li>
                                <li class="current-menu-item" style="border-bottom-color: #3aadff"><a href="#"><span>Blog</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">Blog standard</a></li>
                                        <li><a href="blog_1.html">Blog list</a></li>
                                        <li><a href="blog_2.html">Blog timeline</a></li>
                                        <li><a href="blog_3.html">Blog full</a></li>
                                        <li><a href="blog_4.html">Blog minimal</a></li>
                                        <li><a href="blog_5.html">Blog no sidebar</a></li>
                                    </ul>
                                </li>
                                <li style="border-bottom-color: #ff8927"><a href="page_shortcodes.html">Shortcodes</a></li>
                                <li class="has_dt_mega_menu" style="border-bottom-color: #b43ce3"><a href="page_shortcodes.html"><span>Mega menu</span></a>
                                    <ul class="dt_mega_menu">
                                        <li>
                                            <!-- Widget -->
                                            <div class="widget">
                                                <h3 class="widget_title"><span>Timeline posts</span></h3>
                                                <div class="widget_timeline_posts">
                                                    <div class="item">
                                                        <span class="date">May 3</span>
                                                        <span class="time">12:15 am</span>
                                                        <div class="timeline_content">
                                                            <div class="pin_holder"><div class="inside"></div></div>
                                                            <h3><a href="post_standard.html">Sneaker Stories Industrial M. Jordan</a></h3>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <span class="date">Sep 24</span>
                                                        <span class="time">16:14 am</span>
                                                        <div class="timeline_content">
                                                            <div class="pin_holder"><div class="inside"></div></div>
                                                            <h3><a href="post_standard.html">NASCAR Offers to Confederate Flag</a></h3>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <span class="date">Oct 31</span>
                                                        <span class="time">23:54 pm</span>
                                                        <div class="timeline_content">
                                                            <div class="pin_holder"><div class="inside"></div></div>
                                                            <h3><a href="post_standard.html">Wimbledon 2015: Heat Break Rule</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Widget -->
                                            <div class="widget">
                                                <h3 class="widget_title"><span>Recent posts</span></h3>
                                                <div class="widget_custom_posts">
                                                    <ul>
                                                        <li>
                                                            <div class="item_header">
                                                                <div class="item_format"><i class="fa fa-volume-up"></i></div>
                                                                <a href="post_standard.html"><img src="demo/article-small-view/5.jpg" alt="Article"></a>
                                                            </div>
                                                            <div class="item_content">
                                                                <h3><a href="post_standard.html">Real Madrid Worth More Than the Dallas Cowboys</a></h3>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="item_header">
                                                                <div class="item_format"><i class="fa fa-quote-left"></i></div>
                                                                <a href="post_standard.html"><img src="demo/article-small-view/6.jpg" alt="Article"></a>
                                                            </div>
                                                            <div class="item_content">
                                                                <h3><a href="post_standard.html">Doc Explores the Rush of Extreme</a></h3>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="item_header">
                                                                <div class="item_format"><i class="fa fa-camera"></i></div>
                                                                <a href="post_standard.html"><img src="demo/article-small-view/7.jpg" alt="Article"></a>
                                                            </div>
                                                            <div class="item_content">
                                                                <h3><a href="post_standard.html">The Shrinking Pool Cup</a></h3>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Widget -->
                                            <div class="widget widget_categories">
                                                <h3 class="widget_title"><span>Categories</span></h3>
                                                <ul>
                                                    <li><a href="blog.html">Travel</a>&nbsp;(5)</li>
                                                    <li><a href="blog.html">Sport</a>&nbsp;(0)</li>
                                                    <li><a href="blog.html">Entertainment</a>&nbsp;(38)</li>
                                                    <li><a href="blog.html">People</a>&nbsp;(685)</li>
                                                    <li><a href="blog.html">Fashion</a>&nbsp;(3)</li>
                                                    <li><a href="blog.html">Movies/TV</a>&nbsp;(12)</li>
                                                </ul>
                                            </div>
                                            <!-- Widget -->
                                            <div class="widget">
                                                <h3 class="widget_title"><span>Advertisement</span></h3>
                                                <div class="widget_advertisement_300x250">
                                                    <a href="http://themeforest.net/?ref=CodeoStudio" target="_blank">
                                                        <img src="demo/banner-ads/300x250.jpg" alt="Banner">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li style="border-bottom-color: #37c082"><a href="post_standard.html"><span>Posts</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="post_standard.html">Standard post</a></li>
                                        <li><a href="post_gallery.html">Gallery post</a></li>
                                        <li><a href="post_video.html">Video post</a></li>
                                        <li><a href="post_audio.html">Audio post</a></li>
                                        <li><a href="post_no_featured.html">No featured post</a></li>
                                    </ul>
                                </li>
                                <li style="border-bottom-color: #3aadff"><a href="blog.html">Business</a></li>
                                <li style="border-bottom-color: #7cc038"><a href="blog.html">Photography</a></li>
                                <li style="border-bottom-color: #3aadff"><a href="blog.html">Music</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
            <!-- BREAKING NEWS -->
            <div class="breaking_news">
                <div class="container">
                    <div class="breaking_news_title">Breaking news</div>
                    <div class="owl-carousel">
                        <div>
                            <p>13:45</p>
                            <a href="post_standard.html">Probable NFL #1 Pick Jameis Winston Has Startling New Version of His Publix Theft Story</a>
                        </div>
                        <div>
                            <p>07:18</p>
                            <a href="post_standard.html">In the next 200 years an asteroid will hit Earth: Will we be ready?</a>
                        </div>
                        <div>
                            <p>16:03</p>
                            <a href="post_standard.html">Microsoft's new mosquito-catching drones could prevent disease epidemics</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container -->
            <div class="container">                
                <div class="row">
                    <!-- Main content -->
                    <div class="col col_8_of_12 main_content">
                        <!-- Section title -->
                        <div class="section_title">
                            <h2><span>Fashion</span></h2>
                            <a class="view_all" href="blog.html">View all</a>
                        </div>
                        <div class="row">
                            <div class="col col_6_of_12">
                                <!-- Article standard view -->
                                <div class="article_standard_view">
                                    <!-- Article -->
                                    <article class="item">
                                        <div class="item_header">
                                            <div class="review_box">
                                                <span class="score">7.2</span>
                                                <span class="review">Great</span>
                                            </div>
                                            <a href="post_standard.html"><img src="demo/article-list-view/23.jpg" alt="Article"></a>
                                            <div class="item_header_line_outside"><div class="item_header_line"></div></div>
                                        </div>
                                        <div class="item_content">
                                            <h3><a href="post_standard.html">Sneaker Stories, From Industrial Revolution to M. Jordan</a></h3>
                                            <div class="item_meta">
                                                <span>Oct 4, 2015</span>
                                                <span><a href="post_standard.html">84 Comments</a></span>
                                                <span>154 Views</span>
                                            </div>
                                            <p>Etiam euismod nibh augue, vel sagittis nunc pulvinar non. Integer et dui porta, hendrerit nibh</p>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="col col_6_of_12">
                                <!-- Article standard view -->
                                <div class="article_standard_view">
                                    <!-- Article -->
                                    <article class="item">
                                        <div class="item_header">
                                            <div class="review_box" style="background-color: #ff6600">
                                                <span class="score">6.1</span>
                                                <span class="review">Good</span>
                                            </div>
                                            <a href="post_standard.html"><img src="demo/article-list-view/2.jpg" alt="Article"></a>
                                            <div class="item_header_line_outside"><div class="item_header_line" style="background-color: #ff6600"></div></div>
                                        </div>
                                        <div class="item_content">
                                            <h3><a href="post_standard.html">Poll: 69 Percent of NFL Fans Think Tom Brady Is a Cheater</a></h3>
                                            <div class="item_meta">
                                                <span>Sep 13, 2015</span>
                                                <span><a href="post_standard.html">84 Comments</a></span>
                                                <span>154 Views</span>
                                            </div>
                                            <p>Etiam euismod nibh augue, vel sagittis nunc pulvinar non. Integer et dui porta, hendrerit nibh</p>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col_6_of_12">
                                <!-- Article standard view -->
                                <div class="article_standard_view">
                                    <!-- Article -->
                                    <article class="item">
                                        <div class="item_header">
                                            <div class="review_box" style="background-color: #ff6600">
                                                <span class="score">1.9</span>
                                                <span class="review">Worst</span>
                                            </div>
                                            <a href="post_standard.html"><img src="demo/article-list-view/5.jpg" alt="Article"></a>
                                            <div class="item_header_line_outside"><div class="item_header_line" style="background-color: #ff6600"></div></div>
                                        </div>
                                        <div class="item_content">
                                            <h3><a href="post_standard.html">Carli Lloyd's Picture Perfect Walk Into Sports History</a></h3>
                                            <div class="item_meta">
                                                <span>Sep 13, 2015</span>
                                                <span><a href="post_standard.html">84 Comments</a></span>
                                                <span>154 Views</span>
                                            </div>
                                            <p>Etiam euismod nibh augue, vel sagittis nunc pulvinar non. Integer et dui porta, hendrerit nibh</p>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="col col_6_of_12">
                                <!-- Article standard view -->
                                <div class="article_standard_view">
                                    <!-- Article -->
                                    <article class="item">
                                        <div class="item_header">
                                            <div class="review_box" style="background-color: #8fcd50">
                                                <span class="score">6.4</span>
                                                <span class="review">Great</span>
                                            </div>
                                            <a href="post_standard.html"><img src="demo/article-list-view/14.jpg" alt="Article"></a>
                                            <div class="item_header_line_outside"><div class="item_header_line" style="background-color: #8fcd50"></div></div>
                                        </div>
                                        <div class="item_content">
                                            <h3><a href="post_standard.html">America's Saddest Fan Is Attending Every Knicks Game</a></h3>
                                            <div class="item_meta">
                                                <span>Sep 13, 2015</span>
                                                <span><a href="post_standard.html">84 Comments</a></span>
                                                <span>154 Views</span>
                                            </div>
                                            <p>Etiam euismod nibh augue, vel sagittis nunc pulvinar non. Integer et dui porta, hendrerit nibh</p>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col_6_of_12">
                                <!-- Article standard view -->
                                <div class="article_standard_view">
                                    <!-- Article -->
                                    <article class="item">
                                        <div class="item_header">
                                            <div class="review_box" style="background-color: #8fcd50">
                                                <span class="score">8.4</span>
                                                <span class="review">Good</span>
                                            </div>
                                            <a href="post_standard.html"><img src="demo/article-list-view/24.jpg" alt="Article"></a>
                                            <div class="item_header_line_outside"><div class="item_header_line" style="background-color: #8fcd50"></div></div>
                                        </div>
                                        <div class="item_content">
                                            <h3><a href="post_standard.html">Poll: 69 Percent of NFL Fans Think Tom Brady Is a Cheater</a></h3>
                                            <div class="item_meta">
                                                <span>Sep 13, 2015</span>
                                                <span><a href="post_standard.html">84 Comments</a></span>
                                                <span>154 Views</span>
                                            </div>
                                            <p>Etiam euismod nibh augue, vel sagittis nunc pulvinar non. Integer et dui porta, hendrerit nibh</p>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="col col_6_of_12">
                                <!-- Article standard view -->
                                <div class="article_standard_view">
                                    <!-- Article -->
                                    <article class="item">
                                        <div class="item_header">
                                            <div class="review_box">
                                                <span class="score">9.0</span>
                                                <span class="review">Perfect</span>
                                            </div>
                                            <a href="post_standard.html"><img src="demo/article-list-view/6.jpg" alt="Article"></a>
                                            <div class="item_header_line_outside"><div class="item_header_line"></div></div>
                                        </div>
                                        <div class="item_content">
                                            <h3><a href="post_standard.html">'Play on Our Team': Dating App Goes to Super Bowl</a></h3>
                                            <div class="item_meta">
                                                <span>Sep 13, 2015</span>
                                                <span><a href="post_standard.html">84 Comments</a></span>
                                                <span>154 Views</span>
                                            </div>
                                            <p>Etiam euismod nibh augue, vel sagittis nunc pulvinar non. Integer et dui porta, hendrerit nibh</p>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <!-- PAgination -->
                        <ul class="page-numbers">
                            <li><span class="page-numbers current">1</span></li>
                            <li><a class="page-numbers" href="#">2</a></li>
                            <li><a class="page-numbers" href="#">3</a></li>
                            <li><a class="page-numbers" href="#">4</a></li>
                            <li><a class="next page-numbers" href="#"><i class="fa fa-caret-right"></i></a></li>
                        </ul>
                    </div>                
                    <!-- Sidebar -->
                    <aside class="col col_4_of_12 sidebar_area">
                        <div class="theiaStickySidebar">
                            <!-- Widget -->
                            <div class="widget">
                                <h3 class="widget_title"><span>Gallery post</span></h3>
                                <div class="widget_gallery_post">
                                    <!-- Article -->
                                    <article class="item">
                                        <div class="item_overlay">
                                            <a href="post_standard.html"><img src="demo/article-list-view/6.jpg" alt="Article"></a>
                                            <div class="item_overlay_container">
                                                <div class="item_overlay_category">
                                                    <a href="blog.html">Sport</a>
                                                </div>
                                                <div class="item_overlay_content">
                                                    <h3><a href="post_standard.html">Harrison Ford Makes First Appearance Since Plane Crash</a></h3>
                                                    <div class="item_meta">
                                                        <span>154 Views</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <!-- Article -->
                                    <article class="item">
                                        <div class="item_overlay">
                                            <a href="post_standard.html"><img src="demo/article-list-view/20.jpg" alt="Article"></a>
                                            <div class="item_overlay_container">
                                                <div class="item_overlay_category">
                                                    <a href="blog.html">Sport</a>
                                                </div>
                                                <div class="item_overlay_content">
                                                    <h3><a href="post_standard.html">Harrison Ford Makes First Appearance Since Plane Crash</a></h3>
                                                    <div class="item_meta">
                                                        <span>154 Views</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <!-- Widget -->
                            <div class="widget">
                                <h3 class="widget_title"><span>Timeline posts</span></h3>
                                <div class="widget_timeline_posts">
                                    <div class="item">
                                        <span class="date">May 3</span>
                                        <span class="time">12:15 am</span>
                                        <div class="timeline_content">
                                            <div class="pin_holder"><div class="inside"></div></div>
                                            <h3><a href="post_standard.html">Sneaker Stories, From Industrial Revolution to Michael Jordan</a></h3>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <span class="date">Sep 24</span>
                                        <span class="time">16:14 am</span>
                                        <div class="timeline_content">
                                            <div class="pin_holder"><div class="inside"></div></div>
                                            <h3><a href="post_standard.html">NASCAR Offers to Confederate Flag for American at Daytona</a></h3>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <span class="date">Oct 31</span>
                                        <span class="time">23:54 pm</span>
                                        <div class="timeline_content">
                                            <div class="pin_holder"><div class="inside"></div></div>
                                            <h3><a href="post_standard.html">Wimbledon 2015: Heat Break Rule for Women Sparks Sexism Row</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Widget -->
                            <div class="widget">
                                <h3 class="widget_title"><span>Advertisement</span></h3>
                                <div class="widget_advertisement_125x125">
                                    <div class="banner">
                                        <a href="http://themeforest.net/?ref=CodeoStudio" target="_blank">
                                            <img src="demo/banner-ads/125x125.jpg" alt="Banner">
                                        </a>
                                    </div>
                                    <div class="banner">
                                        <a href="http://themeforest.net/?ref=CodeoStudio" target="_blank">
                                            <img src="demo/banner-ads/125x125.jpg" alt="Banner">
                                        </a>
                                    </div>
                                    <div class="banner">
                                        <a href="http://themeforest.net/?ref=CodeoStudio" target="_blank">
                                            <img src="demo/banner-ads/125x125.jpg" alt="Banner">
                                        </a>
                                    </div>
                                    <div class="banner">
                                        <a href="http://themeforest.net/?ref=CodeoStudio" target="_blank">
                                            <img src="demo/banner-ads/125x125.jpg" alt="Banner">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
            <!-- Footer -->
            <footer id="footer">
                <div class="container">
                    <div class="row">
                        <!-- Widget -->
                        <div class="col col_4_of_12">
                            <div class="widget widget_text">
                                <div class="textwidget">
                                    <p><img src="demo/logos-site/HighCriteria.png" alt="HighCriteria"></p>
                                    <p>Vivamus a quam ullamcorper, hendrerit elit sed, finibus est. Nullam non varius eros, sed egestas nulla. Etiam interdum purus sed turpis pretium placerat. Sed at convallis ligula.</p>
                                    <ul class="fa-ul">
                                        <li><i class="fa-li fa fa-map-marker"></i>Address: East London, UK</li>
                                        <li><i class="fa-li fa fa-phone"></i>Phone: +848 5499 654</li>
                                        <li><i class="fa-li fa fa-envelope"></i>Email: info@example.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Widget -->
                        <div class="col col_4_of_12">
                            <div class="widget">
                                <h3 class="widget_title"><span>Timeline posts</span></h3>
                                <div class="widget_timeline_posts">
                                    <div class="item">
                                        <span class="date">May 3</span>
                                        <span class="time">12:15 am</span>
                                        <div class="timeline_content">
                                            <div class="pin_holder"><div class="inside"></div></div>
                                            <h3><a href="post_standard.html">Sneaker Stories, From Industrial Revolution to Michael Jordan</a></h3>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <span class="date">Sep 24</span>
                                        <span class="time">16:14 am</span>
                                        <div class="timeline_content">
                                            <div class="pin_holder"><div class="inside"></div></div>
                                            <h3><a href="post_standard.html">NASCAR Offers to Confederate Flag for American at Daytona</a></h3>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <span class="date">Oct 31</span>
                                        <span class="time">23:54 pm</span>
                                        <div class="timeline_content">
                                            <div class="pin_holder"><div class="inside"></div></div>
                                            <h3><a href="post_standard.html">Wimbledon 2015: Heat Break Rule for Women Sparks Sexism Row</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Widget -->
                        <div class="col col_4_of_12">
                            <div class="widget">
                                <h3 class="widget_title"><span>Recent posts</span></h3>
                                <div class="widget_custom_posts">
                                    <ul>
                                        <li>
                                            <div class="item_header">
                                                <div class="item_format"><i class="fa fa-volume-up"></i></div>
                                                <a href="post_standard.html"><img src="demo/article-small-view/5.jpg" alt="Article"></a>
                                            </div>
                                            <div class="item_content">
                                                <h3><a href="post_standard.html">Real Madrid Worth More Than the Dallas Cowboys</a></h3>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item_header">
                                                <div class="item_format"><i class="fa fa-quote-left"></i></div>
                                                <a href="post_standard.html"><img src="demo/article-small-view/6.jpg" alt="Article"></a>
                                            </div>
                                            <div class="item_content">
                                                <h3><a href="post_standard.html">Doc Explores the Rush of Extreme Sports</a></h3>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item_header">
                                                <div class="item_format"><i class="fa fa-camera"></i></div>
                                                <a href="post_standard.html"><img src="demo/article-small-view/7.jpg" alt="Article"></a>
                                            </div>
                                            <div class="item_content">
                                                <h3><a href="post_standard.html">The Shrinking Pool of Stanley Cup Winners</a></h3>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Copyright -->
            <div id="copyright">
                <div class="container">
                    <p>© 3T TEAm</div>
            </div>
        </div>
        
        <!-- Javascripts -->
        <script src="js/jquery.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/jquery-stickykit.js"></script>
        <script src="js/jquery-lightbox.js"></script>
        <script src="js/jquery-fitvids.js"></script>
        <script src="js/jquery-carousel.js"></script>
        <script src="js/jquery-init.js"></script><script src="js/jquery-demo.js"></script>
</body>
</html>