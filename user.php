<?php
include("security.php");
include("includes/header.php");
include("includes/navbar.php");

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
                        <div class="col-md-3 font-weight-bold text-primary">
                            <h3>Khách Hàng</h3>
                        </div>
                        <div class="col-md-2">
                            <form action="/adduser.php">
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
                        $query = "SELECT * FROM userkhach";
                        $query_run = mysqli_query($connection, $query);
                        ?>
                        <table class="table  table-striped     table-hover" id="dataTable" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Email </th>
                                    <th>Họ Tên</th>
                                    <th>Action</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (mysqli_num_rows($query_run) > 0) {
                                    while ($row = mysqli_fetch_assoc($query_run)) {
                                ?>
                                        <tr>
                                            <td><?php echo $row['Email']; ?></td>
                                            <td><?php echo $row['Họ Tên']; ?></td>
                                            <td>
                                                <form action="/edit_user.php" method="post">
                                                    <input type="hidden" name="edit_id" value="<?php echo $row['Email']; ?>">
                                                    <button type="submit" name="edit_btn" class="btn btn-light">
                                                        <img src="/img/b_edit.png" align="EDIT" />
                                                    </button>
                                                </form>
                                            </td>
                                            <td>
                                                <button type="submit" name="delete_btn" class="btn btn-light">
                                                    <a class="btn_del" href="/delete/delete_user.php?email=<?php echo $row['Email']; ?>"><img src="/img/b_drop.png" align="DELETE" /></a>
                                                </button>
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
                    title: "Xóa Khách Hàng",
                    text: "Bạn có chắc muốn xóa Khách Hàng này ?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    confirmButtonText: "Xóa",
                })
                .then((willDelete) => {
                    if (willDelete) {
                        document.location.href = href;
                    }
                });
        });
    </script>