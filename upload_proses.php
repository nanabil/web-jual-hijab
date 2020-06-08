<?php
include 'database.php';

$jdl_dwh = $_POST['jdl_dwh'];
$isi_dwh = $_POST['isi_dwh'];
$gambar = $_POST['gambar'];

$sql = "INSERT INTO dakwah (jdl_dwh,isi_dwh,gambar) VALUES ($jdl_dwh, $isi_dwh, $gambar)";

$mysqli->query($sql);

header('Location:edititem.php');