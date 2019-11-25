<?php
	include('session.php');
	require('config.php');
	if (isset($_POST['username']) and isset($_POST['password'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$query = "SELECT * FROM `login` WHERE username='$username' and password=password('$password')";
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($result);
		if ($count == 1){
			$row = mysqli_fetch_assoc($result);
			$_SESSION['username'] = $username;
			$_SESSION['privelage'] = $row['privelage'];
			$_SESSION['status'] = 1;
		}
	}
	if (isset($_SESSION['status'])){
		header("location: redirect.php");
	}else{
		header("location: index.php");
	}
