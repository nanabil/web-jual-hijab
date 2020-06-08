<?php include("header.php"); include("database.php");?>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-total">Total</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                $sum = 0;    
                for ($i = 0; $i < sizeof($_SESSION['barangTerbeli']); $i++): 
                ?>
                <?php 
                    $id = $_SESSION['barangTerbeli'][$i]['id_barang'];
                    $amount = $_SESSION['barangTerbeli'][$i]['amount'];
                    $sql = "SELECT * FROM barang WHERE id = '$id'";
                    $result = $mysqli -> query($sql);
                    $row = $result -> fetch_object();
                ?>
                  <tr>
                    <td class="product-thumbnail">
                      <img src="<?php echo $row->gambar; ?>" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black"><?php echo $row->judul; ?></h2>
                    </td>
                    <td><?php echo $row->harga; ?></td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center" value="<?php echo $amount; ?>" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                        </div>
                      </div>

                    </td>
                    <td>Rp. <?php echo $row->harga * $amount; $sum +=  $row->harga * $amount; ?></td>
                  </tr>
                <?php endfor; ?>

                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6">
                  <a href="catalogue.php"><button class="btn btn-outline-primary btn-sm btn-block">Continue Shopping</button></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">Rp. <?php echo $sum;?></strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg btn-block" onclick="window.location='checkout.php'">Proceed To Checkout</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php include("footer.php") ?>