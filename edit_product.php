<?php
include("security.php");
include("includes/header.php");
include("includes/navbar.php");

if (isset($_POST['btnSuaSP'])) {
    $title = $_POST['tilte'];
    $cate = $_POST['cate'];
    $date = $_POST['date'];
    $price = $_POST['price'];
    $version = $_POST['version'];
    $id = $_POST['id'];
    $img = $_POST['img'];
    if($img == ""){
        $query = "UPDATE `san pham` SET `title` = '$title',`category`='$cate',`date release`='$date',`price`='$price',`version`='$version' Where `ID_sp` ='$id'";                                                 
    }else{
        $query = "UPDATE `san pham` SET `title` = '$title',`category`='$cate',`date release`='$date',`price`='$price',`version`='$version',`img_path`='$img' Where `ID_sp` ='$id'";   
    }
    if(mysqli_query($connection,$query)){
        echo '<script language = javascript>
                    swal("Thành Công", "Đã Sửa Sản Phẩm !", "success").then((value) => {
                        window.location = "/product.php"
                        });;
                    </script>';
    }else{
        echo '<script language = javascript>
                    swal("Lỗi", "Sửa Thất Bại !", "error").then((value) => {
                        window.location = "/product.php"
                        });;
                    </script>';
    }
}

if (isset($_REQUEST['edit_btn'])) {
    $id = $_REQUEST['edit_id'];
    $GLOBALS["id"];
    $query = "SELECT * FROM `san pham` WHERE `ID_sp` = '" . $GLOBALS["id"] . "'";
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
                            <h3>Thêm Sản Phẩm</h3>
                        </div>
                    </div>
                    <?php
                    foreach ($query_run as $row) {
                    ?>
                        <div class="card-body">
                            <form action="" method="POST" class="needs-validation" novalidate>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <input type="hidden" name="id" value="<?php echo $row['ID_sp']; ?>" class="form-control" id="validationCustom01" placeholder="Nhập Tên sản phẩm ..." required>
                                        <label for="validationCustom01">Title:</label>
                                        <input type="text" name="tilte" value="<?php echo $row['title']; ?>" class="form-control" id="validationCustom01" placeholder="Nhập Tên sản phẩm ..." required>
                                        <div class="invalid-feedback">
                                            Bạn phải điền Title Sản Phẩm
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom02">Category:</label>
                                        <select name="cate" class="custom-select" id="inputGroupSelect01">
                                            <?php if ($row['category'] == "AAA") { ?>
                                                <option value="AAA" selected>AAA</option>
                                                <option value="Indie">Indie</option>
                                            <?php } else { ?>
                                                <option value="AAA">AAA</option>
                                                <option value="Indie" selected>Indie</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom03">Version:</label>
                                        <input type="number" name="version" value="<?php echo $row['version']; ?>" class="form-control" id="validationCustom03" step="0.0001" min=0 required>
                                        <div class="invalid-feedback">
                                            Bạn phải điền Version
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom04">Price ($):</label>
                                        <input type="number" name="price" value="<?php echo $row['price']; ?>" class="form-control" id="validationCustom04" step="0.01" min=0 max=1000 required>
                                        <div class=" invalid-feedback">
                                            Bạn phải điền Price
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom04">Date Release:</label>
                                        <input type="date" name="date" value="<?php echo $row['date release']; ?>" class="form-control" id="validationCustom05" required>
                                        <div class="invalid-feedback">
                                            Bạn phải chọn Date
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Image File:</label>
                                        <div class="custom-file">
                                            <input type="file" name="img" value="<?php echo $row['img_path']; ?>" class="custom-file-input" id="validationCustom06" accept="image/png, image/jpeg">
                                            <label class="custom-file-label"></label>
                                        </div>
                                    </div>
                                </div>
                                <a href="/product.php"><button class="btn btn-success" type="button">Huỷ</button></a>
                                <button name="btnSuaSP" class="btn btn-primary" type="submit">Sửa</button>
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