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
	<title>Dashboard - Student Payment</title>
	<?php
	include("../../script.html");
	?>
	<style>
		button {
			width: 100%
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
											<li class="breadcrumb-item active" aria-current="page">Student Payment</li>
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
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="card">
							<h5 class="card-header">Student Payment Status - <?php echo date("Y"); ?></h5>
							<div class="card-body">
								<div style="text-align: left">
									<button type='submit' class='btn btn-success paid-all' style="width: 10%">Paid All</button>
									<br /><br />
								</div>
								<div style="text-align: left">
									<button type='submit' class='btn btn-danger unpaid-all' style="width: 10%">Unpaid All</button>
									<br /><br />
								</div>
								<div class="table-responsive">
									<table class="table table-striped table-bordered first">
										<thead>
											<tr>
												<th>ID</th>
												<th>Name</th>
												<th>Payment</th>
												<th colspan="2">Action</th>
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
											$sql = 'SELECT record_payment.id_payment, student.name, record_payment.payment FROM record_payment JOIN student ON record_payment.id_student = student.id_student WHERE year = "' . date("Y") . '"';
											$retval = mysqli_query($db, $sql);
											if (!$retval) {
												die('Could not get data: ' . mysql_error());
											}
											while ($row = mysqli_fetch_array($retval, MYSQLI_NUM)) {
												echo "<tr>" .
													"<td>{$row[0]}</td>" .
													"<td>{$row[1]}</td>" .
													"<td id = '{$row[0]}'>{$row[2]}</td>";
												if ("{$row[2]}" == "Paid") {
													echo
														"<td><button id='paid_{$row[0]}' type='submit' class='btn btn-success paid-disabled' disabled>Paid</button></td>" .
															"<td><button id='unpaid_{$row[0]}' type='submit' class='btn btn-danger unpaid-enabled' value='{$row[0]}'>Unpaid</button></td>";
												} else {
													echo
														"<td><button id='paid_{$row[0]}' type='submit' class='btn btn-success paid-enabled' value='{$row[0]}' >Paid</button></td>" .
															"<td><button id='unpaid_{$row[0]}' type='submit' class='btn btn-danger unpaid-disabled' disabled>Unpaid</button></td>";
												}

												echo "</tr>";
											}
											mysqli_close($db);
											?>
										</tbody>
										<tfoot>
											<tr>
												<th>ID</th>
												<th>Name</th>
												<th>Payment</th>
												<th colspan="2">Action</th>
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
	<script>
		$(document).ready(function() {
			function paid_all_check() {
				if (($('button').is('.paid-enabled')) == false) {
					$(".paid-all").replaceWith("<button type='submit' class='btn btn-success paid-all' style='width: 100%' disabled>Paid All</button>");
				}
			}

			function unpaid_all_check() {
				if (($('button').is('.unpaid-enabled')) == false) {
					$(".unpaid-all").replaceWith("<button type='submit' class='btn btn-danger unpaid-all' style='width: 100%' disabled>Unpaid All</button>");
				}
			}
			paid_all_check();
			unpaid_all_check();
			$(document).on("click", ".paid-enabled", function() {
				var clickBtnValue = $(this).val();
				var ajaxurl = 'ajax.php',
					data = {
						'action': clickBtnValue
					};
				$.post(ajaxurl, data, function(response) {
					$("#" + clickBtnValue + "").replaceWith("<td id='" + clickBtnValue + "'>" + response + "</td>");
				});
				$(this).closest("tr").find(".unpaid-disabled").replaceWith("<button id='unpaid_" + $(this).val() + "' type='submit' class='btn btn-danger unpaid-enabled' value= '" + $(this).val() + "'>Unpaid</button>");
				$(this).replaceWith("<button id='paid_" + $(this).val() + "' type='submit' class='btn btn-success paid-disabled' disabled>Paid</button>");
				$(".unpaid-all").replaceWith("<button type='submit' class='btn btn-danger unpaid-all' style='width: 100%'>Unpaid All</button>");
				paid_all_check();
				unpaid_all_check();
			});
			$(document).on("click", ".unpaid-enabled", function() {
				var clickBtnValue = $(this).val();
				var ajaxurl = 'ajax.php',
					data = {
						'action': clickBtnValue
					};
				$.post(ajaxurl, data, function(response) {
					$("#" + clickBtnValue + "").replaceWith("<td id='" + clickBtnValue + "'>" + response + "</td>");
				});
				$(this).closest("tr").find(".paid-disabled").replaceWith("<button id='paid_" + $(this).val() + "' type='submit' class='btn btn-success paid-enabled' value= '" + $(this).val() + "'>Paid</button>");
				$(this).replaceWith("<button id='unpaid_" + $(this).val() + "' type='submit' class='btn btn-danger unpaid-disabled' disabled>Unpaid</button>");
				$(".paid-all").replaceWith("<button type='submit' class='btn btn-success paid-all' style='width: 100%'>Paid All</button>");
				paid_all_check();
				unpaid_all_check();
			});
			$(document).on("click", ".paid-all", function() {
				var value = "paid-all";
				var url = "ajax_2.php",
					data = {
						'action': value
					};
				$.post(url, data, function(response) {
					var i;
					var obj = $.parseJSON(response);
					for (i = 0; i < obj.length; i++) {
						$("#" + obj[i]).replaceWith("<td id='" + obj[i] + "'>Paid</td>");
						$("#paid_" + obj[i]).replaceWith("<button id='paid_" + obj[i] + "' type='submit' class='btn btn-success paid-disabled' disabled>Paid</button>");
						$("#unpaid_" + obj[i]).replaceWith("<button id='unpaid_" + obj[i] + "' type='submit' class='btn btn-danger unpaid-enabled' value= '" + obj[i] + "'>Unpaid</button>");
					}
				});
				$(this).replaceWith("<button type='submit' class='btn btn-success paid-all' style='width: 100%' disabled>Paid All</button>");
				$(".unpaid-all").replaceWith("<button type='submit' class='btn btn-danger unpaid-all' style='width: 100%'>Unpaid All</button>");
			});
			$(document).on("click", ".unpaid-all", function() {
				var value = "unpaid-all";
				var url = "ajax_2.php",
					data = {
						'action': value
					};
				var id = [];
				$.post(url, data, function(response) {
					var i;
					var obj = $.parseJSON(response);
					for (i = 0; i < obj.length; i++) {
						$("#" + obj[i]).replaceWith("<td id='" + obj[i] + "'>Unpaid</td>");
						$("#paid_" + obj[i]).replaceWith("<button id='paid_" + obj[i] + "' type='submit' class='btn btn-success paid-enabled' value= '" + obj[i] + "'>Paid</button>");
						$("#unpaid_" + obj[i]).replaceWith("<button id='unpaid_" + obj[i] + "' type='submit' class='btn btn-danger unpaid-disabled' disabled>Unpaid</button>");
					}
				});
				$(this).replaceWith("<button type='submit' class='btn btn-danger unpaid-all' style='width: 100%' disabled>Unpaid All</button>");
				$(".paid-all").replaceWith("<button type='submit' class='btn btn-success paid-all' style='width: 100%'>Paid All</button>");
			});
		});
	</script>
</body>

</html>