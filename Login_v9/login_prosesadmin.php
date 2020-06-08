<?php
    include("../database.php");

    if($_POST["username"] != null && $_POST["pass"] != null) {
        $pass = $_POST["pass"];
        $user = $_POST["username"];
        $sql = "SELECT * FROM admin WHERE Username  = '$user'";
        $result = $mysqli -> query ($sql);

        //jika user name ada
        if ($result -> num_rows){
            $row = $result -> fetch_object();
            
            if($pass === $row -> password){
                session_start();

                $_SESSION['user_system_logged_in'] = true;
                $_SESSION['user_system_name'] = $row->username;
                $_SESSION['user_system_id'] = $row->id;
                
                header("location: ../edititem.php");
            }else{
                echo 'Wrong Password!';
            }
        }else {
            echo 'Username not exists.';
            
        }
    }
?>