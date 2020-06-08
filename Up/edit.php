<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>BTS Gamis - Blog &amp; Magazine Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
<!-- ##### Header Area Start ##### -->
   
                    

                      
                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="nikki-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="nikkiNav">

                        <!-- Nav brand -->
                        <a href="index.html" class="nav-brand"><img src="img/core-img/Capture.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>


                                

                                
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Upload Item</li>
                        </ol>
                    </nav>
                     <li><a> Hapus Postingan</a></li>
                <li><a>Hapus Item</a></li>
                <li><a href="uploadPostingan.html">Upload Postingan </a></li>
                <li><a href="uploadItem.html">Upload Item</a></li>
                <?php 
                  if (isset($_SESSION['user_system_logged_in']) && $_SESSION['user_system_logged_in'] === true) { 
                      print('<li><a href="Login_v9/logout_admin.php">Logout</a></li>'); 
                  } 
                ?>
                </div>
            </div>
        </div>
    </div>
<div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li><a> Hapus Postingan</a></li>
                <li><a>Hapus Item</a></li>
                <li><a href="uploadPostingan.html">Upload Postingan </a></li>
                <li><a href="uploadItem.html">Upload Item</a></li>
                <?php 
                  if (isset($_SESSION['user_system_logged_in']) && $_SESSION['user_system_logged_in'] === true) { 
                      print('<li><a href="Login_v9/logout_admin.php">Logout</a></li>'); 
                  } 
                ?>
              </ul>
            </nav>
          </div>
    <!-- ##### Breadcrumb Area End ##### -->
	<!-- ##### Blog Content Area Start ##### -->
    
    <!-- ##### Blog Content Area End ##### -->

    <!-- ##### Blog Content Area Start ##### -->
    <section class="blog-content-area section-padding-0-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Blog Posts Area -->
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">
                        <div class="row">
                           
                            

                           

                    

                <!-- Blog Sidebar Area -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="post-sidebar-area">


                    </div>
                </div>
            </div>
        </div>
    </section>
   
</body>

</html>