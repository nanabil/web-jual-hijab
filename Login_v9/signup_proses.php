<?php
    include("../database.php");

    if($_POST["name"] != null && $_POST["email"] != null && $_POST["username"] != null && $_POST["pass"] != null && $_POST["repeat-pass"] != null) {
        $pass = $_POST["pass"];
        $user = $_POST["username"];
        $nama = $_POST["name"];
        $mail = $_POST["email"];
        $repeat = $_POST["repeat-pass"];
        
        if ($repeat === $pass) {        
            $sql = "INSERT INTO pelanggan (fullname, Email, Username, Password) VALUES ('$nama', '$mail', '$user', '$pass')";
            $result = $mysqli -> query ($sql);
            
            header('Location: login.php');
        }
          header('Location: login.php');
    }
?>