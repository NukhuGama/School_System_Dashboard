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
	<title>Dashboard - Student Behavior</title>
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
											<li class="breadcrumb-item active" aria-current="page">Student Behavior</li>
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
				<div class="row">
					<!-- ============================================================== -->
					<!--  stacked chart  -->
					<!-- ============================================================== -->
					<div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12">
						<div class="card">
							<h5 class="card-header">Student Behavior</h5>
							<div class="card-body">
								<div id="c3chart_stacked"></div>
							</div>
						</div>
					</div>
					<!-- ============================================================== -->
					<!--  end stacked chart  -->
					<!-- ============================================================== -->
				</div>
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="../../jqgrid/students/behavior/User_View" allowfullscreen onload='javascript:(function(o){o.style.height="500px";}(this));'></iframe>
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
		<!-- end wrapper  -->
		<!-- ============================================================== -->
	</div>
	<!-- ============================================================== -->
	<!-- end main wrapper  -->
	<!-- ============================================================== -->
	<!-- Optional JavaScript -->
	<!-- jquery 3.3.1 -->
	<?php
	include("../../script.html");
	?>
	<script>
		$(document).ready(function() {
			if ($('#c3chart_stacked').length) {
				var table = 'id';
				$.ajax({
					type: 'POST',
					url: '/Sistem_Dashboard/json/students/json_studentbehavior.php',
					dataType: "json",
					data: {
						table: table
					},
					success: function(data) {
						if (data.status == 'ok') {
							fight1 = (data.result1.total);
							fight2 = (data.result2.total);
							fight3 = (data.result3.total);
							harras1 = (data.result4.total);
							harras2 = (data.result5.total);
							harras3 = (data.result6.total);
							possess1 = (data.result7.total);
							possess2 = (data.result8.total);
							possess3 = (data.result9.total);
							vandal1 = (data.result10.total);
							vandal2 = (data.result11.total);
							vandal3 = (data.result12.total);
							var chart = c3.generate({
								bindto: "#c3chart_stacked",

								data: {
									columns: [
										['Fight', fight1, fight2, fight3],
										['Harrasment', harras1, harras2, harras3],
										['Possession', possess1, possess2, possess3],
										['Vandalism', vandal1, vandal2, vandal3]
									],
									type: 'bar',
									order: 'null',
									colors: {}
								},
								axis: {
									y: {
										show: true,
									},
									x: {
										type: 'category',
										categories: ['2017', '2018', '2019'],
										show: true,
									}
								},
								grid: {
									y: {
										lines: [{
											value: 0
										}]
									}
								}
							});
						}
					}
				});

			}
		});
	</script>
</body>

</html>