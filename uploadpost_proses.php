<?php
include 'database.php';

$judul = $_POST['judul'];
$detail = $_POST['detail'];
$harga = $_POST['harga'];
$gambar = $_POST['gambar'];

$sql = "INSERT INTO barang (judul,detail,harga,gambar) VALUES ($judul, $detail, $harga, $gambar)";

$mysqli->query($sql);

header('Location:edititem.php');