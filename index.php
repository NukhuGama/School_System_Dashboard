<?php
session_start();
$_SESSION['cd'] = getcwd();
if (isset($_SESSION['status'])) {
	header("location:redirect.php");
}
?>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Dashboard Login</title>
	<!-- <link rel="stylesheet" href="assets/libs/css/login_style.css"> -->
	<style>
		body {
			margin: 0;
			padding: 0;
			background: #fff;

			color: #fff;
			font-family: Arial;
			font-size: 12px;
		}

		.body {
			position: absolute;
			top: -20px;
			left: -20px;
			right: -40px;
			bottom: -40px;
			width: auto;
			height: auto;
			background-image: url(assets/images/Login.jpg);
			background-size: cover;
			-webkit-filter: blur(5px);
			z-index: 0;
		}

		.grad {
			position: absolute;
			top: -20px;
			left: -20px;
			right: -40px;
			bottom: -40px;
			width: auto;
			height: auto;
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(0, 0, 0, 0)), color-stop(100%, rgba(0, 0, 0, 0.65)));
			/* Chrome,Safari4+ */
			z-index: 1;
			opacity: 0.7;
		}

		.header {
			position: absolute;
			top: calc(50% - 35px);
			left: calc(50% - 255px);
			z-index: 2;
		}

		.header div {
			float: left;
			color: #fff;
			font-family: 'Exo', sans-serif;
			font-size: 35px;
			font-weight: 200;
		}

		.header div span {
			color: #5379fa !important;
		}

		.login {
			position: absolute;
			top: calc(50% - 75px);
			left: calc(50% - 50px);
			height: 150px;
			width: 350px;
			padding: 10px;
			z-index: 2;
		}

		.login input[type=text] {
			width: 250px;
			height: 30px;
			background: transparent;
			border: 1px solid rgba(255, 255, 255, 0.6);
			border-radius: 2px;
			color: #fff;
			font-family: 'Exo', sans-serif;
			font-size: 16px;
			font-weight: 400;
			padding: 4px;
		}

		.login input[type=password] {
			width: 250px;
			height: 30px;
			background: transparent;
			border: 1px solid rgba(255, 255, 255, 0.6);
			border-radius: 2px;
			color: #fff;
			font-family: 'Exo', sans-serif;
			font-size: 16px;
			font-weight: 400;
			padding: 4px;
			margin-top: 10px;
		}

		.login input[type=submit] {
			width: 260px;
			height: 35px;
			background: #fff;
			border: 1px solid #fff;
			cursor: pointer;
			border-radius: 2px;
			color: #a18d6c;
			font-family: 'Exo', sans-serif;
			font-size: 16px;
			font-weight: 400;
			padding: 6px;
			margin-top: 10px;
		}

		.login input[type=submit]:hover {
			opacity: 0.8;
		}

		.login input[type=submit]:active {
			opacity: 0.6;
		}

		.login input[type=text]:focus {
			outline: none;
			border: 1px solid rgba(255, 255, 255, 0.9);
		}

		.login input[type=password]:focus {
			outline: none;
			border: 1px solid rgba(255, 255, 255, 0.9);
		}

		.login input[type=submit]:focus {
			outline: none;
		}

		::-webkit-input-placeholder {
			color: rgba(255, 255, 255, 0.6);
		}

		::-moz-input-placeholder {
			color: rgba(255, 255, 255, 0.6);
		}
	</style>
	<script src="assets/libs/js/prefixfree.min.js"></script>
</head>

<body>
	<div class="body"></div>
	<div class="grad"></div>
	<div class="header">
		<div>Dash<span>Board</span></div>
	</div>
	<br>
	<form action="login.php" method="post">
		<div class="login">
			<input type="text" placeholder="Username" name="username" size="10" maxlength="10" pattern="[A-Za-z0-9].{0,10}" title="alphanumeric character only" autocomplete="off" required><br>
			<input type="password" placeholder="Password" name="password" size="10" maxlength="10" pattern="[A-Za-z0-9].{0,10}" title="alphanumeric character only" required><br>
			<input type="submit" value="Login">
		</div>
		<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
</body>

</html>