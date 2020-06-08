<?php
include 'database.php';

$id = $_POST['id'];
$sql = "DELETE FROM dakwah WHERE id_dwh = $id";
$mysqli->query($sql);

header('Location: hapuspost.php');
?>