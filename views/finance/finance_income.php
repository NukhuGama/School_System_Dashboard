<?php
include("../../session.php");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <?php
    include("../../head.html")
    ?>
    <title>Dashboard - Finance Aset</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <?php
        include("../../navbar.html");
        ?>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <?php
                            include("../../user_sidebar.html");
                            if ($_SESSION["privelage"] == 1) {
                                include("../../admin_sidebar.html");
                            }
                            ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->

        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content ">
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">School Dashboard</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <p class="breadcrumb-link">Dashboard</p>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">Staff Asset</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                </div>
                <!-- TABLE FOR INCOME -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Staff Asset Status</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Description</th>
                                                <th>Value</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $dbHost     = 'localhost';
                                            $dbUsername = 'root';
                                            $dbPassword = '';
                                            $dbName     = 'dashboard';
                                            //create connection and select DB
                                            $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
                                            if ($db->connect_error) {
                                                die("Unable to connect database: " . $db->connect_error);
                                            }
                                            $sql = 'SELECT id_revenue, description, value FROM finance_revenue';
                                            $retval = mysqli_query($db, $sql);
                                            if (!$retval) {
                                                die('Could not get data: ' . mysql_error());
                                            }
                                            while ($row = mysqli_fetch_array($retval, MYSQLI_NUM)) {
                                                echo "<tr>" .
                                                    "<td>{$row[0]}</td>" .
                                                    "<td>{$row[1]}</td>" .
                                                    "<td>Rp.{$row[2]}</td>" .
                                                    "</tr>";
                                            }
                                            mysqli_close($db);
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Payment</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            Copyright © 2018 Dashboard. All rights reserved. Dashboard by Rex.
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <?php
    include("../../script.html");
    ?>
</body>

</html>