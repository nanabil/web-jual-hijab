<?php
        //jika user name ada
        if ($result -> num_rows){
            $row = $result -> fetch_object();
            
            if($pass === $row -> Password){
                session_start();

                $_SESSION['user_system_logged_in'] = true;
                $_SESSION['user_system_name'] = $row->username;
                $_SESSION['user_system_id'] = $row->Id_Pembeli;
                
                header("location: ../index.php");
            }else{
                echo 'Wrong Password!';
            }
        }else {
            echo 'Username not exists.';
        }
    }
?>