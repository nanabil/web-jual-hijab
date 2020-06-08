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
              <a href="index.php" class="js-logo-clone">BTSGamis</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="has-children active">
                  <a href="index.php">Home</a>
                  <ul class="dropdown">
                    <li><a href="about.php">About</a></li>
                    <?php 
                        if (isset($_SESSION['user_system_logged_in']) && $_SESSION['user_system_logged_in'] === true) { 
                            print('<li><a href="shop.php">Shop</a></li>'); 
                        } 
                    ?>
                    <li><a href="catalogue.php">Catalogue</a></li>
                    <li><a href="contact.php">Contact</a></li>
                  </ul>
                </li>
                
                <?php 
                    if (isset($_SESSION['user_system_logged_in']) && $_SESSION['user_system_logged_in'] === true) { 
                        print('<li><a href="shop.php">Shop</a></li>'); 
                    } 
                ?>
                <li><a href="catalogue.php">Catalogue</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php 
                  if (isset($_SESSION['user_system_logged_in']) && $_SESSION['user_system_logged_in'] === true) { 
                      print('<li><a href="Login_v9/logout.php">Logout</a></li>'); 
                  } else {
                      print('<li><a href="Login_v9/login.php">Login</a></li>');
                  } 
                ?>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>  