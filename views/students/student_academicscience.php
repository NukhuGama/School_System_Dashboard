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
	<title>Dashboard - Student Academic</title>
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
											<li class="breadcrumb-item active" aria-current="page">Student Academic</li>
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
							<h5 class="card-header">Academic Performance Majoring in Science</h5>
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
							<iframe class="embed-responsive-item" src="../../jqgrid/students/academic_science/User_View" allowfullscreen onload='javascript:(function(o){o.style.height="500px";}(this));'></iframe>
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
			if ($('#c3chart_stacked').length) {
				var table = 'id';
				$.ajax({
					type: 'POST',
					url: '/Sistem_Dashboard/json/students/json_studentacademic_science.php',
					dataType: "json",
					data: {
						table: table
					},
					success: function(data) {
						if (data.status == 'ok') {
							arts1 = (data.result1.average);
							arts2 = (data.result2.average);
							arts3 = (data.result3.average);

							biology1 = (data.result4.average);
							biology2 = (data.result5.average);
							biology3 = (data.result6.average);

							chemistry1 = (data.result7.average);
							chemistry2 = (data.result8.average);
							chemistry3 = (data.result9.average);

							english1 = (data.result10.average);
							english2 = (data.result11.average);
							english3 = (data.result12.average);

							indo1 = (data.result13.average);
							indo2 = (data.result14.average);
							indo3 = (data.result15.average);

							math1 = (data.result16.average);
							math2 = (data.result17.average);
							math3 = (data.result18.average);

							physics1 = (data.result19.average);
							physics2 = (data.result20.average);
							physics3 = (data.result21.average);



							var chart = c3.generate({
								bindto: "#c3chart_stacked",

								data: {
									columns: [
										['Arts', arts1, arts2, arts3],
										['Biology', biology1, biology2, biology3],
										['Chemistry', chemistry1, chemistry2, chemistry3],
										// ['Economics', economics1, economics2,economics3],
										['English', english1, english2, english3],
										// ['Geography', geography1, geography2, geography3],
										['Indonesian Language', indo1, indo2, indo3],
										['Math', math1, math2, math3],
										['Physics', physics1, physics2, physics3],
										// ['Sociology', sociology1, sociology2, sociology3]

										//['Science', science1, science2, science3]
									],


									type: 'bar',

									order: 'null', // stack order by sum of values descendantly. this is default.
									//      order: 'asc'  // stack order by sum of values ascendantly.
									//      order: null   // stack order by data definition.

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