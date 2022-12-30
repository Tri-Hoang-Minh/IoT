<?php
$server_password = "mothaibabonnam6";
$server_host = "localhost";
$database = 'temrykbe_db';
$server_username= 'temrykbe_user';
 
$conn = mysqli_connect($server_host,$server_username,$server_password,$database) or die("không thể kết nối tới database");
?>