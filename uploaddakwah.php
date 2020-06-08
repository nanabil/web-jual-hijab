<?php include("database.php");  ?>

<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BTSGamis &mdash; Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
    

    <div class="site-navbar bg-white py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>  
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a class="js-logo-clone">BTSGamis</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li><a href="hapuspost.php"> Hapus Postingan</a></li>
                <li><a href="hapusgamis.php">Hapus Item</a></li>
                <li><a href="uploaddakwah.php">Upload Postingan </a></li>
                <li><a href="uploaditem.php">Upload Item</a></li>
                <?php 
                  if (isset($_SESSION['user_system_logged_in']) && $_SESSION['user_system_logged_in'] === true) { 
                      print('<li><a href="Login_v9/logout_admin.php">Logout</a></li>'); 
                  } 
                ?>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-1">
            <section class="blog-content-area section-padding-0-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Blog Posts Area -->
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">
                        <div class="row">
                           
                            <!-- Section Heading -->
                            <div class="col-12">
                                <div class="section-heading">
                                    <h2>Upload Postingan</h2>
                                </div>
                            </div>
                            <form method="post" class="file-uploader" action="uploadpost_proses.php" enctype="multipart/form-data">
                                <div class="file-uploader__message-area">
                                  <p>Select a file to upload</p>
                                </div>
                                <div class="file-chooser"></div>
                                  <input name="gambar" class="file-chooser__input" type="file">
                                
                                <div></div>
                                <div>     <pre class="tab"></pre>
                                </div>
                                <label>
                                  Title: 
                                  <input type ="text" name="jdl_dwh" value=""></label>
                        
                             <br> 
                                <label>
                                    Content:
                                    <textarea name="isi_dwh" cols="50" rows="15" required></textarea> </label> <br>
                                <input class="file-uploader__submit-button" type="submit" value="Upload">
                              </form>
                        </div>

                    </div> </div></div>
        </div>
    </section>
        </div>
      </div>
    </div>
