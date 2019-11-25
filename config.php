<?php
	$conn =  mysqli_connect('localhost','root','','dashboard');
	if($conn === false){
    	header("location: /404-page.html");
	}
?>