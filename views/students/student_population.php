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
	<title>Dashboard - Student Population</title>
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
											<li class="breadcrumb-item active" aria-current="page">Student Population</li>
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
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
						<div class="card">
							<h5 class="card-header">Gender Chart</h5>
							<div class="card-body">
								<div id="c3chart_pie_gender"></div>
							</div>
						</div>
					</div>
					<!-- ============================================================== -->
					<!-- end pie chart  -->
					<!-- ============================================================== -->
					<!-- ============================================================== -->
					<!-- pie chart  -->
					<!-- ============================================================== -->
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
						<div class="card">
							<h5 class="card-header">Major Chart</h5>
							<div class="card-body">
								<div id="c3chart_pie_major"></div>
							</div>
						</div>
					</div>
					<!-- ============================================================== -->
					<!-- end pie chart  -->
					<!-- ============================================================== -->
					<!-- ============================================================== -->
					<!-- pie chart  -->
					<!-- ============================================================== -->
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
						<div class="card">
							<h5 class="card-header">Race Chart</h5>
							<div class="card-body">
								<div id="c3chart_pie_race"></div>
							</div>
						</div>
					</div>
					<!-- ============================================================== -->
					<!-- end pie chart  -->
					<!-- ============================================================== -->
					<!-- ============================================================== -->
					<!-- pie chart  -->
					<!-- ============================================================== -->
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
						<div class="card">
							<h5 class="card-header">Religion Chart</h5>
							<div class="card-body">
								<div id="c3chart_pie_religion"></div>
							</div>
						</div>
					</div>
					<!-- ============================================================== -->
					<!-- end pie chart  -->
					<!-- ============================================================== -->
				</div>

				<!-- ============================================================== -->
				<!-- TABLE VIEW FOR STUDENT POPULATION -->
				<!-- ============================================================== -->
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="../../jqgrid/students/population/User_View" allowfullscreen onload='javascript:(function(o){o.style.height="500px";}(this));'></iframe>
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
			if ($('#c3chart_pie_gender').length) {
				var table = 'gender';
				var gender;
				$.ajax({
					type: 'POST',
					url: '/Sistem_Dashboard/json/students/json_studentgender.php',
					dataType: "json",
					data: {
						table: table
					},
					success: function(data) {
						if (data.status == 'ok') {
							gender1 = (data.result1.total);
							gender2 = (data.result2.total);
							var chart = c3.generate({
								bindto: "#c3chart_pie_gender",
								data: {
									columns: [
										['Male', gender1],
										['Female', gender2]
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
			if ($('#c3chart_pie_religion').length) {
				var table = 'religion';
				var religion;
				$.ajax({
					type: 'POST',
					url: '/Sistem_Dashboard/json/students/json_studentreligion.php',
					dataType: "json",
					data: {
						table: table
					},
					success: function(data) {
						if (data.status == 'ok') {
							religion1 = (data.result1.total);
							religion2 = (data.result2.total);
							religion3 = (data.result3.total);
							religion4 = (data.result4.total);
							religion5 = (data.result5.total);
							religion6 = (data.result6.total);
							var chart = c3.generate({
								bindto: "#c3chart_pie_religion",
								data: {
									columns: [
										['Buddha', religion1],
										['Chatolic', religion2],
										['Christian Protestan', religion3],
										['Hindu', religion4],
										['Islam', religion5],
										['Kong Hu Cu', religion6]
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
			if ($('#c3chart_pie_race').length) {
				var table = 'race';
				var race;
				$.ajax({
					type: 'POST',
					url: '/Sistem_Dashboard/json/students/json_studentrace.php',
					dataType: "json",
					data: {
						table: table
					},
					success: function(data) {
						if (data.status == 'ok') {
							race1 = (data.result1.total);
							race2 = (data.result2.total);
							var chart = c3.generate({
								bindto: "#c3chart_pie_race",
								data: {
									columns: [
										['Foreigner', race1],
										['Indonesian', race2]
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
			if ($('#c3chart_pie_major').length) {
				var table = 'major';
				var major;
				$.ajax({
					type: 'POST',
					url: '/Sistem_Dashboard/json/students/json_studentmajor.php',
					dataType: "json",
					data: {
						table: table
					},
					success: function(data) {
						if (data.status == 'ok') {
							major1 = (data.result1.total);
							major2 = (data.result2.total);
							var chart = c3.generate({
								bindto: "#c3chart_pie_major",
								data: {
									columns: [
										['Science', major1],
										['Social', major2]
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
		});
	</script>
</body>

</html>