<?php 
include("../security.php");
    $id = $_GET['id'];
    $query2 = "DELETE FROM `san pham` WHERE `ID_sp` = '$id'";
    $query = "DELETE FROM `chi tiet hoa don` WHERE `ID_sp` = '$id'";
    if(mysqli_query($connection,$query)&& mysqli_query($connection, $query2)){
                 echo '<script type="text/javascript">
                        window.location = "/product.php"
                            </script>';
    }
