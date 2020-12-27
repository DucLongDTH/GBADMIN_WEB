<?php 
include("../security.php");
    $email = $_GET['email'];
    $query = "DELETE FROM `khach hang` WHERE `Email` = '$email'";
    $query2 = "DELETE FROM `account` WHERE `Email` = '$email'";
    if(mysqli_query($connection,$query)&& mysqli_query($connection, $query2)){
                 echo '<script type="text/javascript">
                        window.location = "/user.php"
                            </script>';
    }
?>