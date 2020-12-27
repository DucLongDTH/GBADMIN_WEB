<?php
include("security.php");
include("includes/header.php");
include("includes/navbar.php");

function checkdoanhthu($thang, $nam, $connection)
{
    $query = "SELECT Sum(`hoa don`.`Tong Tien`) AS '0' FROM `hoa don` WHERE MONTH(`hoa don`.`Ngay Mua`) = '" . $thang . "' and YEAR(`hoa don`.`Ngay Mua`) = '" . $nam . "' and `hoa don`.ID_tinhtrang = 2";
    $query_run = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($query_run)) {
        $tongtien = $row['0'];
    }
    return $tongtien;
}
$date = getdate();
$query = "SELECT COUNT(`hoa don`.MAHD) AS '0' from `hoa don` WHERE MONTH(`hoa don`.`Ngay Mua`) = '" . $date['mon'] . "' and YEAR(`hoa don`.`Ngay Mua`) = '" . $date['year'] . "'";
$query_run = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($query_run)) {
    $tonghd = $row['0'];
}
$query = "SELECT COUNT(`hoa don`.MAHD) AS '0' from `hoa don` WHERE MONTH(`hoa don`.`Ngay Mua`) = '" . $date['mon'] . "' and YEAR(`hoa don`.`Ngay Mua`) = '" . $date['year'] . "' and `hoa don`.ID_tinhtrang = 3";
$query_run = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($query_run)) {
    $hdhuy = $row['0'];
}
$query = "SELECT Sum(`hoa don`.`Tong Tien`) AS '0' FROM `hoa don` WHERE MONTH(`hoa don`.`Ngay Mua`) = '" . $date['mon'] . "' and YEAR(`hoa don`.`Ngay Mua`) = '" . $date['year'] . "' and `hoa don`.ID_tinhtrang = 2";
$query_run = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($query_run)) {
    $tongtien = $row['0'];
}
$query = "SELECT count( DISTINCT `hoa don`.MAKH) AS '0' FROM `hoa don` WHERE MONTH(`hoa don`.`Ngay Mua`) = '" . $date['mon'] . "' and YEAR(`hoa don`.`Ngay Mua`) = '" . $date['year'] . "' ";
$query_run = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($query_run)) {
    $khmua = $row['0'];
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
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-blue-800">Home Page</h1>
            </div>

            <!-- Content Row -->
            <div class="row">
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Tổng Doanh Thu (<?php $date = getdate();
                                                        echo "Tháng " . $date['mon'] . ""; ?>)</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">$<?php echo $tongtien ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Tổng Đơn Hàng</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "$tonghd " ?> Đơn</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-file-invoice-dollar fa-2x text-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Hóa Đơn Hủy
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo "$hdhuy " ?> Đơn</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-comment-alt-slash fa-2x text-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Khách Mua (<?php $date = getdate();
                                                    echo "Tháng " . $date['mon'] . ""; ?>)</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "$khmua Khách" ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-users-crown fa-2x text-300 "></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="col font-weight-bold text-primary">
                        <h3>Biểu Đồ Thống Kê</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <canvas id="myChart"></canvas>
                            </div>
                            <div class="col-6">
                                <canvas id="myChart1"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- End of Page Wrapper -->
    <?php
    include("includes/scripts.php");
    include("includes/footer.php");
    ?>
    <script>
        let myChart = document.getElementById('myChart').getContext('2d');
        let myChart1 = document.getElementById('myChart1').getContext('2d');

        // Global Options
        Chart.defaults.global.defaultFontFamily = 'Quicksans';
        Chart.defaults.global.defaultFontSize = 18;
        Chart.defaults.global.defaultFontColor = '#777';

        let massPopChart = new Chart(myChart, {
            type: 'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
            data: {
                labels: ['<?php echo $date['mon'] - 4 ?>', '<?php echo $date['mon'] - 3  ?>', '<?php echo $date['mon'] - 2 ?>', '<?php echo $date['mon'] - 1 ?>', '<?php echo $date['mon'] ?>'],
                datasets: [{
                    label: '$',
                    data: [
                        <?php echo checkdoanhthu($date['mon'] - 4, $date['year'], $connection) ?>,
                        <?php echo checkdoanhthu($date['mon'] - 3, $date['year'], $connection) ?>,
                        <?php echo checkdoanhthu($date['mon'] - 2, $date['year'], $connection) ?>,
                        <?php echo checkdoanhthu($date['mon'] - 1, $date['year'], $connection) ?>,
                        <?php echo checkdoanhthu($date['mon'], $date['year'], $connection) ?>,
                    ],
                    //backgroundColor:'green',
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)',
                        'rgba(255, 99, 132, 0.6)'
                    ],
                    borderWidth: 1,
                    borderColor: '#777',
                    hoverBorderWidth: 3,
                    hoverBorderColor: '#000'
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'Tổng Doanh Thu Các Tháng',
                    fontSize: 20
                },
                legend: {
                    display: true,
                    position: 'top',
                    labels: {
                        fontColor: '#000'
                    }
                },
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        bottom: 0,
                        top: 0
                    }
                },
                tooltips: {
                    enabled: true
                }
            }
        });
        let massPopChart1 = new Chart(myChart1, {
            type: 'pie', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
            data: {
                labels: ['<?php echo $date['mon'] - 4 ?>', '<?php echo $date['mon'] - 3  ?>', '<?php echo $date['mon'] - 2 ?>', '<?php echo $date['mon'] - 1 ?>', '<?php echo $date['mon'] ?>'],
                datasets: [{
                    label: 'Population',
                    data: [
                        <?php echo checkdoanhthu($date['mon'] - 4, $date['year'], $connection) ?>,
                        <?php echo checkdoanhthu($date['mon'] - 3, $date['year'], $connection) ?>,
                        <?php echo checkdoanhthu($date['mon'] - 2, $date['year'], $connection) ?>,
                        <?php echo checkdoanhthu($date['mon'] - 1, $date['year'], $connection) ?>,
                        <?php echo checkdoanhthu($date['mon'], $date['year'], $connection) ?>,
                    ],
                    //backgroundColor:'green',
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)',
                        'rgba(255, 99, 132, 0.6)'
                    ],
                    borderWidth: 1,
                    borderColor: '#777',
                    hoverBorderWidth: 3,
                    hoverBorderColor: '#000'
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'Tổng doanh thu các tháng',
                    fontSize: 23
                },
                legend: {
                    display: true,
                    position: 'top',
                    labels: {
                        fontColor: '#000'
                    }
                },
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        bottom: 0,
                        top: 0
                    }
                },
                tooltips: {
                    enabled: true
                }
            }
        });
    </script>