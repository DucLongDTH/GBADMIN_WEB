<?php
$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "gb";

$connection = mysqli_connect($server_name,$db_username,$db_password,$db_name);

if(!$connection)
{
    header('Location: 99.php');
    die("Connection failed: ");

}
