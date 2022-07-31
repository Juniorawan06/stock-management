<?php
session_start();
if (!isset($_SESSION['staffPass'])) {
    echo "<script>window.location.href='login.php'</script>";
}
include("components.php");
myHead();
require("conn.php");
?>


<body class="sb-nav-fixed">
    <div id="preloader" style="
  background: #000000 url(vendors/images/preloader.png) no-repeat center center;
  background-size:50%;
  height: 100vh;
  width: 100%;
  position: fixed;
  z-index: 1200;
"></div>
    <?php
    topBar();
    sideBar();
    ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Vista Computer and Printers</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="row clearfix progress-box">
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                        <div class="card-box pd-30 height-100-p">
                            <div class="progress-box text-center">
                                <input type="text" class="knob dial1" value="80" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#1b00ff" data-angleOffset="180" readonly>
                                <h5 class="text-blue padding-top-10 h5">My Earnings</h5>
                                <span class="d-block">80% Average <i class="fa fa-line-chart text-blue"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                        <div class="card-box pd-30 height-100-p">
                            <div class="progress-box text-center">
                                <input type="text" class="knob dial2" value="75" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#00e091" data-angleOffset="180" readonly>
                                <h5 class="text-light-green padding-top-10 h5">Business Captured</h5>
                                <span class="d-block">75% Average <i class="fa text-light-green fa-line-chart"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                        <div class="card-box pd-30 height-100-p">
                            <div class="progress-box text-center">
                                <input type="text" class="knob dial3" value="90" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#f56767" data-angleOffset="180" readonly>
                                <h5 class="text-light-orange padding-top-10 h5">Projects Speed</h5>
                                <span class="d-block">90% Average <i class="fa text-light-orange fa-line-chart"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                        <div class="card-box pd-30 height-100-p">
                            <div class="progress-box text-center">
                                <input type="text" class="knob dial4" value="65" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#a683eb" data-angleOffset="180" readonly>
                                <h5 class="text-light-purple padding-top-10 h5">Panding Orders</h5>
                                <span class="d-block">65% Average <i class="fa text-light-purple fa-line-chart"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area me-1"></i>
                                Area Chart Example
                            </div>
                            <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-bar me-1"></i>
                                Bar Chart Example
                            </div>
                            <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php footer(); ?>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>

    <script src="vendors/scripts/core.js"></script>
    <script src="src/plugins/jQuery-Knob-master/jquery.knob.min.js"></script>
    <script src="vendors/scripts/dashboard2.js"></script>
    <script>
        var loader = document.getElementById("preloader");

        window.addEventListener("load", () =>{
            loader.style.display = "none";
        }); 
    </script>
</body>

</html>