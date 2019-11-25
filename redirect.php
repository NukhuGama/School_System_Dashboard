<?php
   	include('config.php');
	include('session.php');
	if(isset($_SESSION['status'])){
		if($_SESSION['privelage'] == 0){
			header("location: user_home.php");
		}elseif($_SESSION['privelage'] == 1){
			header("location: admin_home.php");
		}else{
			session_destroy();
			header("location: index.php");
		}
	}
?>