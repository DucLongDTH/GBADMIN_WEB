<?php
include("security.php");
include("includes/header.php");
include("includes/navbar.php");
if (isset($_POST['btnThemKH'])) {
    $hoten = $_POST['hoten'];
    $email = $_POST['email'];
    $passmd5 ="";
    $quyen = 3;
    $query = "INSERT INTO `account` VALUES ('$email', '$passmd5', '$quyen')";
    $query2 = "INSERT INTO `khach hang`( `Họ Tên`, `Email`) VALUES ('$hoten','$email')";
    if (mysqli_query($connection, $query) && mysqli_query($connection, $query2)) {
        echo '<script language = javascript>
                    swal("Thành Công", "Đã thêm Khách Hàng !", "success");
                    </script>';
    } else {
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
                        <h3>Thêm Khách Hàng</h3>
                    </div>
                </div>
                <div class="card-body">
                    <form action="" method="POST" class="needs-validation" novalidate>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Email:</label>
                                <input type="email" name="email" class="form-control" id="validationCustom01" placeholder="Nhập Email ..." required>
                                <div class="invalid-feedback">
                                    Bạn phải điền Email!
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom02">Họ Tên:</label>
                                <input type="text" name="hoten" class="form-control" id="validationCustom02" placeholder="Nhập Họ Tên" required>
                                <div class="invalid-feedback">
                                    Bạn phải điền Họ tên !
                                </div>
                            </div>
                        </div>
                        <a href="/user.php"><button class="btn btn-success" type="button">Huỷ</button></a>
                        <button name="btnThemKH" class="btn btn-primary" type="submit">Thêm</button>
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