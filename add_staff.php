<?php
include("security.php");
include("includes/header.php");
include("includes/navbar.php");
function  checkEmail($email, $connection)
{
    $query = "SELECT COUNT(*) FROM `account` WHERE `Email` = '$email' ";
    $query_run = mysqli_query($connection, $query);
    $numrs = mysqli_fetch_row($query_run);
    return $numrs[0];
}
function insertdata($email, $hoten, $pass, $quyen, $connection)
{
    $passmd5 = md5($pass);
    $rs = checkEmail($email, $connection);
    if ($rs == "1") {
        echo '<script language = javascript>
                    swal("Lỗi", "Tài khoản đã tồn tại", "error");
                    </script>';
    } else {
        $query = "INSERT INTO `account` VALUES ('$email', '$passmd5', '$quyen')";
        $query2 = "INSERT INTO `nhan vien`( `Họ Tên`, `Email`) VALUES ('$hoten','$email')";
        if (mysqli_query($connection, $query) && mysqli_query($connection, $query2)) {
            echo '<script language = javascript>
                    swal("Thành Công", "Đã thêm Nhân viên !", "success");
                    </script>';
        } else {
            echo '<script language = javascript>
                    swal("Lỗi", "Thêm Thất Bại !", "error");
                    </script>';
        }
    }
}
if (isset($_POST['btnThemNV'])) {
    $hoten = $_POST['hoten'];
    $pass = $_POST['pass'];
    $quyen = $_POST['quyen'];
    $email = $_POST['email'];
    insertdata($email, $hoten, $pass, $quyen, $connection);
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
            <!-- Page Heading -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="col font-weight-bold text-primary">
                        <h3>Thêm Nhân Viên</h3>
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
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">Password:</label>
                                <input type="password" name="pass" class="form-control" id="validationCustom03" placeholder="Password" required>
                                <div class="invalid-feedback">
                                    Bạn phải điền mật khẩu
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom04">Quyền:</label>
                                <select name="quyen" class="custom-select" id="inputGroupSelect01">
                                    <option value="1">Admin</option>
                                    <option value="2" selected>Nhân Viên</option>
                                </select>
                            </div>
                        </div>
                        <a href="/staff.php"><button class="btn btn-success" type="button">Huỷ</button></a>
                        <button name="btnThemNV" class="btn btn-primary" type="submit">Thêm</button>
                    </form>
                </div>
            </div>


            <!-- Content Row -->
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- End of Page Wrapper -->

<?php
include("includes/scripts.php");
include("includes/footer.php");
?>