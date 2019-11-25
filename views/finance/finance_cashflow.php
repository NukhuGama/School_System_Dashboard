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
	<title>Dashboard -Finance Cashflow</title>
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
											<li class="breadcrumb-item active" aria-current="page">Cashflow</li>
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
					<!--  spline chart  -->
					<!-- ============================================================== -->
					<div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
						<div class="card">
							<h5 class="card-header">Cashflow Chart(last 6 month)</h5>
							<div class="card-body">
								<div id="c3chart_spline"></div>
							</div>
						</div>
					</div>
					<!-- ============================================================== -->
					<!-- end  spline chart  -->
					<!-- ============================================================== -->
				</div>
				<!-- ============================================================== -->
				<!-- end  Cashflow Table  -->
				<!-- ============================================================== -->

				<!-- ============================================================== -->
				<!-- TABLE FOR INCOME -->
				<!-- ============================================================== -->
				<!-- <div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="../../jqgrid/finance/cashflow/CRUD/" allowfullscreen></iframe>
						</div>
					</div>
				</div> -->

				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="card">
							<h5 class="card-header">Staff Asset Status</h5>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered first">
										<thead>
											<tr>
												<th>No</th>
												<th>Month</th>
												<th>Income</th>
												<th>Outcome</th>
												<th>Input Date</th>
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
											$sql = 'SELECT
														`id_cashflow`
														, `month`
														, `income`
														, `outcome`
														, `input_date`
													FROM
														`dashboard`.`finance_cashflow`';
											$retval = mysqli_query($db, $sql);
											if (!$retval) {
												die('Could not get data: ' . mysqli_error());
											}
											$sum_income = 0;
											$sum_outcome = 0;
											while ($row = mysqli_fetch_array($retval, MYSQLI_NUM)) {
												echo "<tr>" .
													"<td>{$row[0]}</td>" .
													"<td>{$row[1]}</td>" .
													"<td>Rp. {$row[2]}</td>" .
													"<td>Rp. {$row[3]}</td>" .
													"<td>{$row[4]}</td>" .
													"</tr>";
												$sum_income = $sum_income + $row[2];
												$sum_outcome = $sum_outcome + $row[3];
											}
											mysqli_close($db);
											?>
										</tbody>
										<tfoot>
											<tr>
												<th>TOTAL</th>
												<th></th>
												<th>RP. <?= $sum_income; ?></th>
												<th>Rp. <?= $sum_outcome; ?></th>
											</tr>
										</tfoot>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>



			</div>
			<!-- IFRAME -->
			<!-- <div class="container-fluid">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="../../jqgrid/latihan_2/perpus/edit_add_delete/" allowfullscreen></iframe>
				</div>
			</div> -->




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
	<script>
		$(document).ready(function() {
			if ($('#c3chart_spline').length) {
				var table = 'id_cashflow';
				var gender;
				$.ajax({
					type: 'POST',
					url: '/Sistem_Dashboard/json/finances/json_financecashflow.php',
					dataType: "json",
					data: {
						table: table
					},
					success: function(data) {
						if (data.status == 'ok') {
							income1 = (data.result6.income);
							income2 = (data.result5.income);
							income3 = (data.result4.income);
							income4 = (data.result3.income);
							income5 = (data.result2.income);
							income6 = (data.result1.income);
							outcome1 = (data.result6.outcome);
							outcome2 = (data.result5.outcome);
							outcome3 = (data.result4.outcome);
							outcome4 = (data.result3.outcome);
							outcome5 = (data.result2.outcome);
							outcome6 = (data.result1.outcome);
							month1 = (data.result6.month);
							month2 = (data.result5.month);
							month3 = (data.result4.month);
							month4 = (data.result3.month);
							month5 = (data.result2.month);
							month6 = (data.result1.month);
							var chart = c3.generate({
								bindto: "#c3chart_spline",
								data: {
									columns: [
										['income', income1, income2, income3, income4, income5, income6],
										['outcome', outcome1, outcome2, outcome3, outcome4, outcome5, outcome6]
									],
									type: 'spline',
									colors: {
										data1: '#5969ff',
										data2: '#ff407b',

									}
								},
								axis: {
									y: {
										show: true,
									},
									x: {
										type: 'category',
										categories: [month1, month2, month3, month4, month5, month6],
										show: true,
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