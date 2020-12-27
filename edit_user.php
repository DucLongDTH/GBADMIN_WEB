<?php
include("security.php");
include("includes/header.php");
include("includes/navbar.php");

if (isset($_POST['btnSuaKH'])) {
    $hoten = $_POST['hoten'];
    $email = $_POST['email'];
    $query = "UPDATE `khach hang` SET `Họ Tên`='$hoten' WHERE `Email` = '$email'";
    if (mysqli_query($connection, $query)) {
        echo '<script language = javascript>
                    swal("Thành Công", "Đã Sửa Khách Hàng !", "success").then((value) => {
                        window.location = "/user.php"
                        });;
                    </script>';
        //     echo '<script type="text/javascript">
        //        window.location = "/staff.php"
        //   </script>';
    } else {
        echo '<script language = javascript>
                    swal("Lỗi", "Sửa Thất Bại !", "error").then((value) => {
                        window.location = "/user.php"
                        });;
                    </script>';
    }
}
if (isset($_REQUEST['edit_btn'])) {
    $id = $_REQUEST['edit_id'];
    $GLOBALS["id"];
    $query = "SELECT * FROM `khach hang` WHERE `Email` = '" . $GLOBALS["id"] . "'";
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
                                <a href="/user.php"><button class="btn btn-success" type="button">Huỷ</button></a>
                                <button name="btnSuaKH" class="btn btn-primary" type="submit">Sửa</button>
                            </form>
                        </div>
                </div>
            <?php } ?>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
    <?php
}
    ?>
    <?php
    include("includes/scripts.php");
    include("includes/footer.php");
    ?>