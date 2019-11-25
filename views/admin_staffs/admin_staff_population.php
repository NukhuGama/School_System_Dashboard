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
	<title>Dashboard - Staff Population</title>
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
											<li class="breadcrumb-item active" aria-current="page">Staff Population</li>
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
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
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
					<!-- ============================================================== -->
					<!-- pie chart  -->
					<!-- ============================================================== -->
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
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
				</div>

				<div class="row">
					<!-- ============================================================== -->
					<!-- pie chart  -->
					<!-- ============================================================== -->
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
						<div class="card">
							<h5 class="card-header">Status Chart</h5>
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
							<h5 class="card-header">Gender Status Ratio Chart</h5>
							<div class="card-body">
								<div id="c3chart_pie_genderstatus"></div>
							</div>
						</div>
					</div>
					<!-- ============================================================== -->
					<!-- end pie chart  -->
					<!-- ============================================================== -->
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 float-right">
						<div class="card">
							<h5 class="card-header">Race Status Ratio Chart</h5>
							<div class="card-body">
								<div id="c3chart_pie_racestatus"></div>
							</div>
						</div>
					</div>
				</div>

				<!-- CRUD TABLE FOR STAFF -->
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="../../jqgrid/staff/population/CRUD" allowfullscreen onload='javascript:(function(o){o.style.height="500px";}(this));'></iframe>
						</div>
					</div>
				</div>
				<!-- CRUD TABLE FOR STAFF -->
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
					url: '/Sistem_Dashboard/json/staffs/json_staffgender.php',
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
										['Female', gender1],
										['Male', gender2]
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
				var gender;
				$.ajax({
					type: 'POST',
					url: '/Sistem_Dashboard/json/staffs/json_staffreligion.php',
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
					url: '/Sistem_Dashboard/json/staffs/json_staffrace.php',
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
		});
	</script>
	<script>
		$(document).ready(function() {
			if ($('#c3chart_pie_status').length) {
				var table = 'status';
				$.ajax({
					type: 'POST',
					url: '/Sistem_Dashboard/json/staffs/json_staffstatus.php',
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
										['Full-Time', status1],
										['Part-Time', status2]
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
			if ($('#c3chart_pie_genderstatus').length) {
				var table = 'gender';
				$.ajax({
					type: 'POST',
					url: '/Sistem_Dashboard/json/staffs/json_staffgenderstatus.php',
					dataType: "json",
					data: {
						table: table
					},
					success: function(data) {
						if (data.status == 'ok') {
							status1 = (data.result1.total);
							status2 = (data.result2.total);
							status3 = (data.result3.total);
							status4 = (data.result4.total);
							var chart = c3.generate({
								bindto: "#c3chart_pie_genderstatus",
								data: {
									columns: [
										['Female - Full-Time', status1],
										['Female - Part-Time', status2],
										['Male - Full-Time', status3],
										['Male - Part-Time', status4]
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
			if ($('#c3chart_pie_racestatus').length) {
				var table = 'ratio';
				$.ajax({
					type: 'POST',
					url: '/Sistem_Dashboard/json/staffs/json_staffracestatus.php',
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
							var chart = c3.generate({
								bindto: "#c3chart_pie_racestatus",
								data: {
									columns: [
										['Foreigner - Full-Time', ratio1],
										['Foreigner - Part-Time', ratio2],
										['Indonesian - Full-Time', ratio3],
										['Indonesian - Part-Time', ratio4]
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