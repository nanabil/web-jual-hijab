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
              <a href="index.php" class="js-logo-clone">BTSGamis</a>
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

            <div class="row align">
              <div class="col-md-12 mb-5">
                <div class="float-md-left"><h2 class="text-black h5">All Item</h2></div>
                <div class="d-flex">
                    
                </div>
              </div>
            </div>
            <div class="row mb-5">
                <?php 
                $sql = "SELECT * FROM barang";
                $result = $mysqli -> query ($sql);
                for ($i = 0; $i < 12; $i++):
                    $row = $result->fetch_object();
                ?>
                <div class="col-lg-6 col-md-6 item-entry mb-4">
                    <a href="http://localhost/shopmax/shop-single.php?id=<?php echo $row->id; ?>" class="product-item md-height bg-gray d-block">
                      <img src="<?php echo $row->gambar ?>" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="item-title"><a href="#"><?php echo $row->judul; ?></a></h2>
                    <strong class="item-price">Rp.<?php echo $row->harga; ?></strong>
                </div>
                  <?php endfor; ?>
            <div class="row">
              <div class="col-md-12 text-center">
                <div class="site-block-27">
                  <ul>
                    <li><a href="#">&lt;</a></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&gt;</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
