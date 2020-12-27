<?php
include("security.php");
include("includes/header.php");
include("includes/navbar.php");

if(isset($_POST['btnThemHD'])){
    try {
        $id_kh = $_POST['id_kh'];
        $id_sp = $_POST['id_sp'];
        // get price san pham 
        $query = "SELECT * FROM `san pham` WHERE `ID_sp` = '$id_sp'";
        $query_run = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($query_run);
        $date = date("Y/m/d");
        $price = $row['price'];
        $q1 = "INSERT INTO `hoa don`(`MAKH`,`Ngay Mua`,`Tong Tien`) VALUES ('$id_kh','$date','$price') ";
        mysqli_query($connection, $q1);
        $query = "SELECT * FROM `hoa don`";
        $query_run = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($query_run)) {
            $mahd = $row['MAHD'];
        }
        $query = "INSERT INTO `chi tiet hoa don`(`MAHD`,`ID_sp`,`Don gia`) VALUES('$mahd','$id_sp','$price')";
        mysqli_query($connection, $query);
        echo '<script language = javascript>
                    swal("Thành Công", "Đã thêm Hóa Đơn !", "success");
                    </script>';
    } catch(Exception $e) {
        echo '<script language = javascript>
                    swal("Lỗi", "Thêm Thất Bại !", "error");
                    </script>';
    }
    

}
?>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <?php include("includes/topbar.php"); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="col font-weight-bold text-primary">
                        <h3>Thêm Hóa Đơn</h3>
                    </div>
                </div>
                <div class="card-body">
                    <form action="" method="POST" class="needs-validation" novalidate>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Khách Hàng:</label>
                                <select name="id_kh" class="custom-select" id="inputGroupSelect01">
                                    <?php
                                    $query = "SELECT * FROM `khach hang`";
                                    $query_run = mysqli_query($connection, $query);
                                    if (mysqli_num_rows($query_run) > 0) {
                                        while ($row = mysqli_fetch_assoc($query_run)) { ?>
                                            <option value="<?php echo $row['MAKH'] ?>"><?php echo $row['Họ Tên'] ?> (<?php echo $row['Email'] ?>)</option>
                                        <?php
                                        }
                                    } else { ?>
                                        <option value="#">Nodata found</option>
                                    <?php  } ?>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom02">Sản Phẩm:</label>
                                <select name="id_sp" class="custom-select" id="inputGroupSelect01">
                                    <?php
                                    $query = "SELECT * FROM `san pham`";
                                    $query_run = mysqli_query($connection, $query);
                                    if (mysqli_num_rows($query_run) > 0) {
                                        while ($row = mysqli_fetch_assoc($query_run)) { ?>
                                            <option value="<?php echo $row['ID_sp'] ?>"><?php echo $row['title'] ?></option>
                                        <?php
                                        }
                                    } else { ?>
                                        <option value="#">Nodata found</option>
                                    <?php  } ?>
                                </select>
                            </div>
                        </div>
                        <a href="/bill.php"><button class="btn btn-success" type="button">Huỷ</button></a>
                        <button name="btnThemHD" class="btn btn-primary" type="submit">Thêm</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <?php
    include("includes/scripts.php");
    include("includes/footer.php");
    ?>