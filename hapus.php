<?php
include 'database.php';

$id = $_GET['id'];
$sql = "DELETE FROM barang WHERE id = $id";
$mysqli->query($sql);

header('Location: hapusgamis.php');
?>