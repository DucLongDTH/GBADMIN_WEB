<?php
include("security.php");
include("includes/header.php");
include("includes/navbar.php");

if (isset($_POST['btnThemSP'])) {
    $title = $_POST['tilte'];
    $cate = $_POST['cate'];
    $date = $_POST['date'];
    $price = $_POST['price'];
    $version = $_POST['version'];
    $img = $_POST['img'];
    $query = "INSERT INTO `gb`.`san pham`(`title`, `category`, `version`, `price`, `date release`, `img_path`) VALUES ('$title', '$cate', '$version','$price', '$date', '$img')";
    if (mysqli_query($connection, $query)) {
        echo '<script language = javascript>
                    swal("Thành Công", "Đã thêm Sản Phẩm !", "success");
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
                        <h3>Thêm Sản Phẩm</h3>
                    </div>
                </div>
                <div class="card-body">
                    <form action="" method="POST" class="needs-validation" novalidate>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Title:</label>
                                <input type="text" name="tilte" class="form-control" id="validationCustom01" placeholder="Nhập Tên sản phẩm ..." required>
                                <div class="invalid-feedback">
                                    Bạn phải điền Title Sản Phẩm
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom02">Category:</label>
                                <select name="cate" class="custom-select" id="inputGroupSelect01">
                                    <option value="AAA">AAA</option>
                                    <option value="Indie">Indie</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">Version:</label>
                                <input type="number" name="version" class="form-control" id="validationCustom03" step="0.01" min=0 required>
                                <div class="invalid-feedback">
                                    Bạn phải điền Version
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom04">Price ($):</label>
                                <input type="number" name="price" class="form-control" id="validationCustom04" min=0 max=1000 required>
                                <div class="invalid-feedback">
                                    Bạn phải điền Price
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom04">Date Release:</label>
                                <input type="date" name="date" class="form-control" id="validationCustom05" required>
                                <div class="invalid-feedback">
                                    Bạn phải chọn Date
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom04">Image File:</label>
                                <div class="custom-file">
                                    <input type="file" name="img" class="form-control custom-file-input" id="validationCustom0" accept="image/png, image/jpeg" required>
                                    <label class="custom-file-label" for="inputGroupFile01">Chọn file Img</label>
                                    <div class="invalid-feedback">
                                        Bạn phải chọn File Ảnh
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="/product.php"><button class="btn btn-success" type="button">Huỷ</button></a>
                        <button name="btnThemSP" class="btn btn-primary" type="submit">Thêm</button>
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