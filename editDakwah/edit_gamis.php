<?php include("../database.php")?>
<?php 
               $sql = "SELECT * FROM barang";
               $result = $mysqli -> query ($sql);
                 $row = $result->fetch_object();
                ?>
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
                            <li class="breadcrumb-item active" aria-current="page">Edit Posting</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Blog Content Area Start ##### -->
    <section class="blog-content-area section-padding-0-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Blog Posts Area -->
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">
                        <div class="row">
                           <div class="col-12">
                                <div class="section-heading">
                                    <h2>Edit Item</h2>
                                </div>
                            </div>
                            

                            <!-- Single Blog Post -->
                            <div class="col-12 col-sm-6">
                                
                                <div class="single-blog-post mb-50">
                                    <!-- Thumbnail -->
                                    <a href="http://localhost/shopmax/shop-single.php?id=<?php echo $row->id; ?>" class="product-item md-height bg-gray d-block">
                                    <div class="post-thumbnail">
                                        <a href="#"><img src="<?php echo $row->gambar ?>" alt="Image"></a>
                                    </div>
                                    <!-- Content -->
                                    <div class="post-content">
                                        <p class="post-price">Rp.<?php echo $row->harga; ?></p>
                                        <a href="#" class="post-title"><?php echo $row->judul; ?>
                                        </a>
                                        <p class="post-excerpt"><?php echo $row->detail; ?></p>
                                    </div>
                                </div>
                            </div>

                    <!-- Pager -->
                    <ol class="nikki-pager">
                        <li><a href="#"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Prev</a></li>
                        <li><a href="#">Next <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                    </ol>
                </div>

                <!-- Blog Sidebar Area -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="post-sidebar-area">
					<!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area mb-30">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>Menu</h6>
                            </div>
                            <ol class="nikki-catagories">
                                <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Home</span> <span></span></a></li>
                                <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Edit Postingan</span> <span></span></a></li>
                                <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Edit Item</span> <span></span></a></li>
                                <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Upload Postingan</span> <span></span></a></li>
                                <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Upload Item</span> <span></span></a></li>
								<li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Log Out</span> <span></span></a></li>
                            </ol>
                        </div> 


                    </div>
                </div>
            </div>
        </div>
    </section>
   
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
</body>

</html>