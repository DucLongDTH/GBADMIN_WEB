<?php
include("includes/header.php");
session_start();
?>
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-6 col-lg-6 col-md-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back Admin</h1>
                                </div>
                                <form class="user" action="code.php" method="POST">
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control form-control-user" placeholder="Enter Your Email ...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                                    </div>
                                    <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<?php
include("includes/scripts.php");
if (isset($_SESSION['status']) == true) {
    if ($_SESSION['status'] == "Không có quyền truy cập") {
        echo '<script language = javascript>
                swal("Thông Báo", "Bạn Không Đủ Quyền Truy Cập !", "info");
            </script>';
        $_SESSION['status'] = "";
    }
    if ($_SESSION['status'] == "Email / Password Sai") {
        echo '<script language = javascript>
                swal("Lỗi", "Sai Tài Khoản / Mật Khẩu", "error");
            </script>';
        $_SESSION['status'] = "";
    }
}
?>