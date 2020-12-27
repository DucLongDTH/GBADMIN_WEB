<?php
include("security.php");
include("includes/header.php");
include("includes/navbar.php");

if(isset($_POST['btnSuaHD'])){
    $id = $_POST['mahd'];
    $makh= $_POST['id_kh'];
    $masp = $_POST['id_sp'];
    $ngaymua = $_POST['date'];
    $query = "SELECT * FROM `san pham` WHERE `ID_sp` = '$masp'";
    $query_run = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($query_run)) {
        $price = $row['price'];
    }
    $query = "UPDATE `hoa don` SET `MAKH` = '$makh',`Ngay Mua` = '$ngaymua',`Tong Tien` = '$price' WHERE `MAHD` = '$id'";
    $query2 = "UPDATE `chi tiet hoa don` SET `ID_sp` = '$masp',`Don Gia` = '$price' WHERE `MAHD` = '$id'";
    if(mysqli_query($connection, $query) && mysqli_query($connection, $query2)){
        echo '<script language = javascript>
                    swal("Thành Công", "Đã Sửa Hóa Đơn !", "success").then((value) => {
                        window.location = "/bill.php"
                        });;
                    </script>'; 
    }else{
        echo '<script language = javascript>
                    swal("Lỗi", "Sửa Thất Bại !", "error").then((value) => {
                        window.location = "/bill.php"
                        });;
                    </script>';
    }

}

if (isset($_REQUEST['edit_btn'])) {
    $id = $_REQUEST['edit_id'];
    $query = "SELECT * FROM `hoa don` WHERE `MAHD` = '" . $id . "'";
    $query_run = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($query_run)) {
        $makh = $row['MAKH'];
        $trangthai = $row['ID_tinhtrang'];
        $date = $row['Ngay Mua'];
    }
    $query = "SELECT * FROM `chi tiet hoa don` WHERE `MAHD` = '" . $id . "'";
    $query_run = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($query_run)) {
        $masp = $row['ID_sp'];
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
                            <h3>Chi Tiết Hóa Đơn</h3>
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
                                            while ($row = mysqli_fetch_assoc($query_run)) {
                                                if ($row['MAKH'] == $makh) {
                                                    echo '<option value="' . $row['MAKH'] . '" selected >' . $row['Họ Tên'] . '(' . $row['Email'] . ')</option>';
                                                } else {
                                                    echo '<option value="' . $row['MAKH'] . '" >' . $row['Họ Tên'] . '(' . $row['Email'] . ')</option>';
                                                }
                                            }
                                        } else {
                                            echo '<option value="#">Nodata found</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom02">Sản Phẩm:</label>
                                    <select name="id_sp" class="custom-select" id="inputGroupSelect01">
                                        <?php
                                        $query = "SELECT * FROM `san pham`";
                                        $query_run = mysqli_query($connection, $query);
                                        if (mysqli_num_rows($query_run) > 0) {
                                            while ($row = mysqli_fetch_assoc($query_run)) {
                                                if ($row['ID_sp'] == $masp) {
                                                    echo '<option value="' . $row['ID_sp'] . '" selected >' . $row['title'] . '</option>';
                                                } else {
                                                    echo '<option value="' . $row['ID_sp'] . '" >' . $row['title'] . '</option>';
                                                }
                                            }
                                        } else {
                                            echo '<option value="#">Nodata found</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">Ngày Mua:</label>
                                    <input type="date" name="date" value="<?php echo $date; ?>" class="form-control" id="validationCustom05" required>
                                    <div class="invalid-feedback">
                                        Bạn phải chọn Date
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">Mã hóa đơn:</label>
                                    <input type="text" name="mahd" value="<?php echo $id; ?>" class="form-control" id="validationCustom05" readonly>

                                </div>

                            </div>
                            <a href="/bill.php"><button class="btn btn-success" type="button">Huỷ</button></a>
                            <button name="btnSuaHD" class="btn btn-primary" type="submit">Cập Nhật</button>
                        </form>
                    </div>
                </div>
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