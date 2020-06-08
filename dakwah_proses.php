<?php 
session_start();

//if (isset($_SESSION['user_system_logged_in'])  && $_SESSION['user_system_logged_in'] !== null) {
//    if (isset($_SESSION['user_system_name']) && $_SESSION['user_system_name'] !== null) {
        if (!isset($_SESSION['barangTerbeli'])) {
            $_SESSION['barangTerbeli'] = array();
        }
        $barangTerbeli = array("id_barang" => $_POST['id'], "amount" => $_POST['amount']);
        array_push($_SESSION['barangTerbeli'], $barangTerbeli);
//    }
//}

header("location: shop.php");

?>