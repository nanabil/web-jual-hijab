<?php   
$host = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'pemwebta'; 
$mysqli = new mysqli($host, $dbusername, $dbpassword, $dbname );
    
    if($mysqli -> connect_error){
        die($mysqli -> connect_error);
    }
