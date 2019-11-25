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
	<title>Dashboard - Student Graduate</title>
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
											<li class="breadcrumb-item active" aria-current="page">Student Graduate</li>
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
					<!-- pie chart  -->
					<!-- ============================================================== -->
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
						<div class="card">
							<h5 class="card-header">Graduate Chart</h5>
							<div class="card-body">
								<div id="c3chart_pie_status"></div>
							</div>
						</div>
					</div>
					<!-- ============================================================== -->
					<!-- end pie chart  -->
					<!-- ============================================================== -->
					<!-- ============================================================== -->
					<!-- pie chart  -->
					<!-- ============================================================== -->
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 float-right">
						<div class="card">
							<h5 class="card-header">Graduate Occupation Chart</h5>
							<div class="card-body">
								<div id="c3chart_pie_occupation"></div>
							</div>
						</div>
					</div>
					<!-- ============================================================== -->
					<!-- end pie chart  -->
					<!-- ============================================================== -->
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 float-right">
						<div class="card">
							<h5 class="card-header">Graduate Ratio Chart</h5>
							<div class="card-body">
								<div id="c3chart_pie_ratio"></div>
							</div>
						</div>
					</div>
				</div>
				<!-- TABLE CRUD FOR STUDENT GRADUATE -->
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="../../jqgrid/students/graduate/CRUD" allowfullscreen onload='javascript:(function(o){o.style.height="500px";}(this));'></iframe>
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
	<?php
	include("../../script.html");
	?>
	<script>
		$(document).ready(function() {
			if ($('#c3chart_pie_status').length) {
				var table = 'status';
				$.ajax({
					type: 'POST',
					url: '/Sistem_Dashboard/json/students/json_studentstatus.php',
					dataType: "json",
					data: {
						table: table
					},
					success: function(data) {
						if (data.status == 'ok') {
							status1 = (data.result1.total);
							status2 = (data.result2.total);
							var chart = c3.generate({
								bindto: "#c3chart_pie_status",
								data: {
									columns: [
										['Dropout', status1],
										['Graduate', status2]
									],
									type: 'pie',
									colors: {
										data1: '#5969ff',
										data2: '#FF00AA'
									}
								},
								pie: {
									label: {
										format: function(value, ratio, id) {
											return d3.format('')(value);
										}
									}
								}
							});
						}
					}
				});
			}
			if ($('#c3chart_pie_occupation').length) {
				var table = 'occupation';
				$.ajax({
					type: 'POST',
					url: '/Sistem_Dashboard/json/students/json_studentoccupation.php',
					dataType: "json",
					data: {
						table: table
					},
					success: function(data) {
						if (data.status == 'ok') {
							occupation1 = (data.result1.total);
							occupation2 = (data.result2.total);
							occupation3 = (data.result3.total);
							var chart = c3.generate({
								bindto: "#c3chart_pie_occupation",
								data: {
									columns: [
										['College', occupation1],
										['Unemployed', occupation2],
										['Work', occupation3]
									],
									type: 'pie',
									colors: {
										data1: '#5969ff',
										data2: '#FF00AA'
									}
								},
								pie: {
									label: {
										format: function(value, ratio, id) {
											return d3.format('')(value);
										}
									}
								}
							});
						}
					}
				});
			}
			if ($('#c3chart_pie_ratio').length) {
				var table = 'ratio';
				$.ajax({
					type: 'POST',
					url: '/Sistem_Dashboard/json/students/json_studentratio.php',
					dataType: "json",
					data: {
						table: table
					},
					success: function(data) {
						if (data.status == 'ok') {
							ratio1 = (data.result1.total);
							ratio2 = (data.result2.total);
							ratio3 = (data.result3.total);
							ratio4 = (data.result4.total);
							ratio5 = (data.result5.total);
							ratio6 = (data.result6.total);
							var chart = c3.generate({
								bindto: "#c3chart_pie_ratio",
								data: {
									columns: [
										['Dropout - College', ratio1],
										['Dropout - Unemployed', ratio2],
										['Dropout - Work', ratio3],
										['Graduate - College', ratio4],
										['Graduate - Unemployed', ratio5],
										['Graduate - Work', ratio6]
									],
									type: 'pie',
									colors: {
										data1: '#5969ff',
										data2: '#FF00AA',
									}
								},
								pie: {
									label: {
										format: function(value, ratio, id) {
											return d3.format('')(value);
										}
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