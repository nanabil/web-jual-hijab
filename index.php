<?php include("header.php"); include("database.php");  ?>
    <div class="site-blocks-cover" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto order-md-2 align-self-start">
            <div class="site-block-cover-content">
            <h2 class="sub-title">#New Collection 2019</h2>
            <h1>Arrivals Sales</h1>
            <p><a href="catalogue.php" class="btn btn-black rounded-0">Shop Now</a></p>
            </div>
          </div>
          <div class="col-md-6 order-1 align-self-end">
            <img src="images/model_3.jpg" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="title-section mb-5">
          <h2 class="text-uppercase"><span class="d-block">Ahlan wa sahlan</span> Mari baca postingan dibawah ini</h2>
        </div>
        <div class="row align-items-stretch">
            <?php 
                $sql = "SELECT * FROM dakwah";
                $result = $mysqli -> query ($sql);
                while ($row = $result -> fetch_object()) :
            ?>
                <div class="col-lg-4">
                 <div class="product-item md-height bg-gray mb-4">
                  <a href="http://localhost/shopmax/dakwah-single.php?id=<?php echo $row->id_dwh; ?>" class="product-item md-height bg-gray d-block"><img src="<?php echo $row -> gambar; ?>" alt="Image" class="img-fluid">
                    </a>
                </div>
                <?php $row = $result -> fetch_object(); ?>
                <div class="product-item md-height bg-gray mb-4">
                  <a href="http://localhost/shopmax/dakwah-single.php?id=<?php echo $row->id_dwh; ?>" class="product-item md-height bg-gray d-block"><img src="<?php echo $row -> gambar; ?>" alt="Image" class="img-fluid">
                    </a>
                </div>
              </div>
            <?php endwhile; ?>
        </div>          
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center mb-5 col-12">
            <h2 class="text-uppercase">Most Rated</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3">
            <div class="nonloop-block-3 owl-carousel">
            
            <?php 
                $sql = "SELECT * FROM barang";
                $result = $mysqli -> query ($sql);
                for ($i = 0; $i < 3; $i++):
                    $row = $result->fetch_object();
                ?>
                    <div class="item">
                        <div class="item-entry">
                          <a href="catalogue.php" class="product-item md-height bg-gray d-block">
                            <img src="<?php echo $row->gambar ?>" alt="Image" class="img-fluid">
                          </a>
                          <h2 class="item-title"><a href="#"><?php echo $row->judul; ?></a></h2>
                          <strong class="item-price">Rp.<?php echo $row->harga; ?></strong>  
                        </div>
                    </div>
            <?php endfor; ?>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-blocks-cover inner-page py-5" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto order-md-2 align-self-start">
            <div class="site-block-cover-content">
            <h2 class="sub-title">#New Collection 2019</h2>
            <h1>New Niqab</h1>
            <p><a href="catalogue.php" class="btn btn-black rounded-0">Shop Now</a></p>
            </div>
          </div>
          <div class="col-md-6 order-1 align-self-end">
            <img src="images/prod_4.jpg" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
<?php include("footer.php") ?>