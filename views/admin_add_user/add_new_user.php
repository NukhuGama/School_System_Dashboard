<?php
include("../../session.php");
if ($_SESSION["privelage"] != 1) {
    header('Location: 404-page.html');
    exit();
}
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
    <?php
    include("../../script.html");
    ?>
    <script src="form-validate.js"></script>
    <title>Dashboard - Staff Population</title>
    <style>
        form .error {
            color: #ff0000;
        }
    </style>
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
                                            <li class="breadcrumb-item active" aria-current="page">Add New User</li>
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

                <!-- ============================================================== -->
                <!-- FORM ADD NEW USER -->
                <!-- ============================================================== -->
                <!-- FORM UNTUK MENU -->
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title border-bottom pb-2">Add New User</h3>
                        <form id="new_user_form" name="new_user_form" method="post">
                            <!-- username -->
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" class="required" required>
                            </div>
                            <!-- password -->
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" class="required" required>
                            </div>
                            <!-- privilage -->
                            <div class="form-group">
                                <label for="privelage">Privilege</label><br />
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="admin" name="privelage" value="1" class="custom-control-input" class="required" required>
                                    <span class="custom-control-label" for="admin">Admin</span>
                                </label>
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="user" name="privelage" value="0" checked="" class="custom-control-input" class="required">
                                    <span class="custom-control-label" for="user">User</span>
                                </label>
                            </div>
                            <button id="submit" type="submit" class="btn btn-primary">Add User</button>
                        </form>
                        <br /><br />
                        <div id="result"></div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- END FORM ADD NEW USER -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- end wrapper  -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            Copyright © 2018 Dashboard.
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end main wrapper  -->
        <!-- ============================================================== -->



</body>

</html>