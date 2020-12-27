<!-- Sidebar -->
<navbar class="navbar-nav bg-gradient-light sidebar sidebar-light accordion fixed-left" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
            <img src="/img/icon.ico" width="30" height="30" alt="icon">
        </div>
        <div class="sidebar-brand-text mx-1">GameBook <sub>admin</sub></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.php">
            <i class="fad fa-home-heart"></i>
            <span>Home</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Quản Lý
    </div>
    <?php
    if ($_SESSION['id_quyen'] == 1) {

    ?>
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fad fa-users"></i>
                <span>Người Dùng</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Users:</h6>
                    <a class="collapse-item" href="staff.php">Nhân Viên</a>
                    <a class="collapse-item" href="/user.php">Khách Hàng</a>
                </div>
            </div>
        </li>
    <?php } ?>
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="/product.php">
            <i class="fas fa-dice-d6"></i>
            <span>Sản Phẩm</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="/bill.php">
            <i class="fas fa-file-invoice-dollar"></i>
            <span>Hóa Đơn</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</navbar>
<!-- End of Sidebar -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <form action="logout.php" method="POST">
                    <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>
                </form>
            </div>
        </div>
    </div>
</div>