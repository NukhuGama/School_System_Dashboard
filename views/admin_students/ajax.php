<?php
if (isset($_POST['action'])) {
	
	$dbHost     = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName     = 'dashboard';
	$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
	if($db->connect_error){
        die("Unable to connect database: " . $db->connect_error);
    }
	$sql = ("SELECT payment FROM record_payment where id_payment = '{$_POST['action']}'");
	$retval = mysqli_query($db, $sql);
	if(! $retval ) {
		die('Could not get data: ' . mysql_error());
	}
    while($row = mysqli_fetch_array($retval,MYSQLI_NUM)) {
        switch ($row[0]) {
			case 'Paid':
				$query = $db->query("UPDATE record_payment SET payment= 'Unpaid' WHERE id_payment = '{$_POST['action']}'");
				break;
			case 'Unpaid':
				$query = $db->query("UPDATE record_payment SET payment= 'Paid' WHERE id_payment = '{$_POST['action']}'");
				break;
    	}
    }
	$query = $db->query("SELECT payment FROM record_payment where id_payment = '{$_POST['action']}'");
	if ($query->num_rows > 0) {
    	// output data of each row
    	while($row = $query->fetch_assoc()) {
			echo $row['payment'];
		}
	}
	exit;
}
?>