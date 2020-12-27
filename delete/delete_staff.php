<?php 
include("../security.php");
    $id = $_GET['id'];
    $email = $_GET['email'];
    $query = "DELETE FROM `nhan vien` WHERE `MANV` = '$id'";
    $query2 = "DELETE FROM `account` WHERE `Email` = '$email'";
    if(mysqli_query($connection,$query)&& mysqli_query($connection, $query2)){
                 echo '<script type="text/javascript">
                        window.location = "/staff.php"
                            </script>';
    }
?>