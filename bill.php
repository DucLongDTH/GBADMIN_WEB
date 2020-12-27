<?php
include("security.php");
include("includes/header.php");
include("includes/navbar.php");
if(isset($_POST['huy_btn'])){
    $mahd = $_POST['huy'];
    $query = "UPDATE `hoa don` SET `ID_tinhtrang` = 3 WHERE `MAHD` = $mahd";
   if(mysqli_query($connection,$query)){
        echo '<script language = javascript>
                    swal("Thành Công", "Đã Hủy Hóa Đơn !", "success");
                    </script>';
   }else{
        echo '<script language = javascript>
                    swal("Lỗi", "Hủy Thất Bại !", "error");
                    </script>';
   }
}
if (isset($_POST['xuly_btn'])) {
    $mahd = $_POST['xuly'];
    $query = "UPDATE `hoa don` SET `ID_tinhtrang` = 2 WHERE `MAHD` = $mahd";
    if (mysqli_query($connection, $query)) {
        echo '<script language = javascript>
                    swal("Thành Công", "Đã Xử Lý Hóa Đơn !", "success");
                    </script>';
    } else {
        echo '<script language = javascript>
                    swal("Lỗi", "Xử Lý Thất Bại !", "error");
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
                    <div class="row">
                        <div class="col-md-2 font-weight-bold text-primary">
                            <h3>Hóa Đơn</h3>
                        </div>
                        <div class="col-md-2">
                            <form action="addbill.php">
                                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#addaprofile">
                                    Add
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table">
                        <?php
                        $query = "SELECT * FROM vhoadon";
                        $query_run = mysqli_query($connection, $query);
                        ?>
                        <table class="table  table-striped table-bordered table-hover" id="dataTable" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Họ Tên</th>
                                    <th>Ngày Mua</th>
                                    <th>Tổng Tiền</th>
                                    <th>Trạng Thái</th>
                                    <th>Action</th>
                                    <th style="width: 150px;">Xử Lý</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (mysqli_num_rows($query_run) > 0) {
                                    while ($row = mysqli_fetch_assoc($query_run)) {
                                ?>
                                        <tr>
                                            <td><?php echo $row['Họ Tên']; ?></td>
                                            <td><?php echo $row['Date']; ?></td>
                                            <td><?php echo $row['Tong Tien']; ?></td>
                                            <td><?php echo $row['TenTinhTrang']; ?></td>
                                            <td>
                                                        <form action="/edit_bill.php" method="post">
                                                            <input type="hidden" name="edit_id" value="<?php echo $row['MAHD']; ?>">
                                                            <button type="submit" name="edit_btn" class="btn btn-light">
                                                                <img src="/img/b_edit.png" align="EDIT" />
                                                            </button>
                                                        </form>
                                                    <!-- <div class="col-md-4">
                                                        <button type="submit" name="delete_btn" class="btn btn-light">
                                                            <a class="btn_del" href="#?id=<?php echo $row['MAHD']; ?>&trangthai=<?php echo $row['TenTinhTrang']; ?>"><img src="/img/b_drop.png" align="DELETE" /></a>
                                                        </button>
                                                    </div> -->
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <form action="#" method="post">
                                                            <input type="hidden" name="xuly" value="<?php echo $row['MAHD']; ?>">
                                                            <button type="submit" name="xuly_btn" class="btn btn-light">
                                                                <img src="/img/xyly.png" width="16" height="16" align="EDIT" />
                                                            </button>
                                                        </form>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <form action="#" method="post">
                                                            <input type="hidden" name="huy" value="<?php echo $row['MAHD']; ?>">
                                                            <button type="submit" name="huy_btn" class="btn btn-light">
                                                                <img src="/img/cancel.png" width="16" height="16" align="EDIT" />
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>

                                            </td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo "No Record Found";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
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
    <script>
        $('.btn_del').on('click', function(e) {
            e.preventDefault();
            const href = $(this).attr('href');
            swal({
                    title: "Xóa Hóa Đơn",
                    text: "Bạn có chắc muốn xóa hóa đơn này ?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    confirmButtonText: "Xóa",
                })
                .then((willDelete) => {
                    if (willDelete) {
                        if (href.includes("trangthai=Hủy")) {
                            document.location.href = href;
                        } else {
                            swal("Thông Báo", "Trạng thái 'Hủy' mới được xóa", "info");
                        }
                    }
                });
        });
    </script>