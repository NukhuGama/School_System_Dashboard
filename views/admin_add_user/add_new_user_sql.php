<?php
if (isset($_POST['user_name']) && (!empty($_POST['user_name']))) {
	
	$dbHost     = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName     = 'dashboard';
	$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
	if($db->connect_error){
        die("Unable to connect database: " . $db->connect_error);
    }
	$sql = ("SELECT * FROM login where username = '{$_POST['user_name']}'");
	$retval = mysqli_query($db, $sql);
	if(! $retval ) {
		echo("fail");
	}else{
		$count = mysqli_num_rows($retval);
		if($count == 0){
			$sql = ("INSERT INTO login(username, password, full_name, privelage) VALUES ('{$_POST['user_name']}', password('{$_POST['pass_word']}'), '{$_POST['full_name']}', '{$_POST['privel_age']}')");
			$retval = mysqli_query($db, $sql);
			if(! $retval ) {
				echo("fail");
			}else{
				echo("success");
			}
		}else{
			echo("fail");
		}
	}
}else{
	echo("fail");
}
exit;
?>