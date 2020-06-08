<?php
include("header.php");
include("database.php");

$tot =  $_SESSION["barangTerbeli"]["tot"];
$id_user=  $_SESSION['user_system_id'];
$sql_create_invoice = "INSERT INTO invoice (total, id_user) VALUES ($tot, $id_user)";
$mysqli -> query($sql_create_invoice);
$id_invoice = $mysqli -> insert_id;

for ($i = 0; $i < sizeof($_SESSION['barangTerbeli']) - 1; $i++) {
    $id_barang = $_SESSION['barangTerbeli'][$i]['id_barang'];
    $jumlah_terpesan = $_SESSION['barangTerbeli'][$i]['amount'];
    $sub_total = $_SESSION["barangTerbeli"][$i]['subtotal'];
    
    $sql_create_invoice_item = "INSERT INTO `barang_pesanan` (`id_barang`, `id_invoice`, `jumlah_terpesan`, `sub_total`) VALUES ('$id_barang', '$id_invoice', '$jumlah_terpesan', '$sub_total');";
    $mysqli -> query($sql_create_invoice_item);
}

unset($_SESSION["barangTerbeli"]);

?>
    
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Shop</strong> <span class="mx-2 mb-0">/</span> <strong class="text-black">Thank You</strong></div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <span class="icon-check_circle display-3 text-success"></span>
            <h2 class="display-3 text-black">Thank you!</h2>
            <p class="lead mb-5">You order was successfuly completed.</p>
            <p><a href="catalogue.php" class="btn btn-sm height-auto px-4 py-3 btn-primary">Back to shop</a></p>
          </div>
        </div>
      </div>
    </div>
<?php include("footer.php") ?>