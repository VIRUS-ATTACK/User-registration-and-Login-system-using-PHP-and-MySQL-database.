<?php
    $mysql_host = '127.0.0.1';
    $mysql_user = 'root';
    $mysql_pass = '';
    $conn = mysqli_connect($mysql_host,$mysql_user,$mysql_pass);
    if($conn && mysqli_select_db($conn,'user_login')){
        ;
    }
    else{
        die('connection failed');
    }
?>