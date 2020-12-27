<?php
include("security.php");
include("includes/header.php");
include("includes/navbar.php");

function editdata($email, $hoten, $pass, $connection)
{
    $passmd5 = md5($pass);

    $query = "UPDATE gb.account SET `Password` = '$passmd5' WHERE `Email` = '$email'";
    $query2 = "UPDATE `gb`.`nhan vien` SET `Họ Tên` = '$hoten' WHERE `Email` = '$email'";
    if (mysqli_query($connection, $query) && mysqli_query($connection, $query2)) {
        echo '<script language = javascript>
                    swal("Thành Công", "Đã Sửa Nhân viên !", "success").then((value) => {
                        window.location = "/staff.php"
                        });;
                    </script>';
        //     echo '<script type="text/javascript">
        //        window.location = "/staff.php"
        //   </script>';
    } else {
        echo '<script language = javascript>
                    swal("Lỗi", "Sửa Thất Bại !", "error").then((value) => {
                        window.location = "/staff.php"
                        });;
                    </script>';
    }
}
if (isset($_POST['btnSuaNV'])) {
    $hoten = $_POST['hoten'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    editdata($email, $hoten, $pass, $connection);
}
if (isset($_REQUEST['edit_btn'])) {
    $id = $_REQUEST['edit_id'];
    $GLOBALS["id"];
    $query = "SELECT * FROM staffql WHERE `MANV` = '" . $GLOBALS["id"] . "'";
    $query_run = mysqli_query($connection, $query);
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
                            <h3>Sửa Nhân Viên</h3>
                        </div>
                    </div>
                    <?php
                    foreach ($query_run as $row) {
                    ?>
                        <div class="card-body">
                            <form action="" method="POST" class="needs-validation" novalidate>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Email:</label>
                                        <input type="email" name="email" value="<?php echo $row['Email']; ?>" class="form-control" id="validationCustom01" readonly placeholder="Nhập Email ..." required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom02">Họ Tên:</label>
                                        <input type="text" name="hoten" value="<?php echo $row['Họ Tên']; ?>" class="form-control" id="validationCustom02" placeholder="Nhập Họ Tên" required>
                                        <div class="invalid-feedback">
                                            Bạn phải điền Họ tên !
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom03">Password:</label>
                                        <input type="password" name="pass" value="<?php echo $row['Password']; ?>" class="form-control" id="validationCustom03" placeholder="Password" required>
                                        <div class="invalid-feedback">
                                            Bạn phải điền mật khẩu
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom04">Quyền:</label>
                                        <select name="quyen" disabled class="custom-select" id="inputGroupSelect01">
                                            <?php if ($row['ID_quyen'] == "1") { ?>
                                                <option value="1" selected>Admin</option>
                                                <option value="2">Nhân Viên</option>
                                            <?php } else { ?>
                                                <option value="1">Admin</option>
                                                <option value="2" selected>Nhân Viên</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <a href="/staff.php"><button class="btn btn-success" type="button">Huỷ</button></a>
                                <button name="btnSuaNV" class="btn btn-primary" type="submit">Sửa</button>
                            </form>
                        </div>
                </div>
            <?php } ?>

            <!-- Content Row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- End of Page Wrapper -->
    </div>
    </div>
<?php
}
?>
<?php
include("includes/scripts.php");
include("includes/footer.php");
?>