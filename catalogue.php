<?php include("header.php"); include("database.php");  ?>
    
    <div class="site-blocks-cover inner-page" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto order-md-2 align-self-start">
            <div class="site-block-cover-content">
            <h2 class="sub-title">#New Collection 2019</h2>
            <h1>Arrivals Sales</h1>
            <p><a href="#" class="btn btn-black rounded-0">Shop Now</a></p>
            </div>
          </div>
          <div class="col-md-6 order-1 align-self-end">
            <img src="images/prod_5.jpg" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <div class="custom-border-bottom py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Catalogue</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-1">

            <div class="row align">
              <div class="col-md-12 mb-5">
                <div class="float-md-left"><h2 class="text-black h5">Shop All</h2></div>
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

    <?php include("footer.php") ?>