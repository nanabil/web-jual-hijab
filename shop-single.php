<?php include("header.php"); include("database.php");  ?>
<?php 
    $sql = "SELECT * FROM barang WHERE id='" . $_GET['id'] . "'";
    $result = $mysqli -> query ($sql);
    $data = $result -> fetch_object();
?>
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <a href="shop.php">Catalogue</a> <span class="mx-2 mb-0">/</span> <strong class="text-black"><?php echo $data->judul ?></strong></div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="item-entry">
              <a href="#" class="product-item md-height bg-gray d-block">
                <img src="<?php echo $data->gambar ?>" alt="Image" class="img-fluid">
              </a>
              
            </div>

          </div>
          <div class="col-md-6">
            <h2 class="text-black"><?php echo $data->judul ?></h2>
            <p><?php echo $data->detail ?></p>
            <p><strong class="text-primary h4"><?php echo $data->harga ?></strong></p>
              
            <form method="post" action="shop_proses.php">
                <div class="mb-5">
                  <div class="input-group mb-3" style="max-width: 120px;">

                  <div class="input-group-prepend">
                    <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                  </div>

                  <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" name="amount">

                  <div class="input-group-append">
                    <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                  </div>
                </div>

                </div>
                <input type="hidden" value="<?php echo $_GET['id']; ?>" name="id">
                <button class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary" type="submit">Add To Cart</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section block-3 site-blocks-2">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Featured Products</h2>
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
                          <a href="#" class="product-item md-height bg-gray d-block">
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
   <?php include("footer.php") ?>