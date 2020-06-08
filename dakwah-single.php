<?php include("header.php"); include("database.php");  ?>
<?php 
    $sql = "SELECT * FROM dakwah WHERE id_dwh='" . $_GET['id'] . "'";
    $result = $mysqli -> query ($sql);
    $data = $result -> fetch_object();
?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a><span class="mx-2 mb-0">/</span> <strong class="text-black">Postingan</strong></div>
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
            <h2 class="text-black"><?php echo $data->jdl_dwh ?></h2>
            <p><?php echo $data->isi_dwh ?></p>
            <p><a href="index.php" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Back to home</a></p>

          </div>
        </div>
      </div>
    </div>
<?php include("footer.php") ?>