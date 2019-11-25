<?php
if (isset($_POST['action'])) {
	$response = [];
	$dbHost     = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName     = 'dashboard';
	$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
	if($db->connect_error){
        die("Unable to connect database: " . $db->connect_error);
    }
	switch($_POST['action']){
		case 'paid-all':
			$sql = ("UPDATE `record_payment` SET `payment`='Paid' WHERE year = ".date("Y"));
			break;
		case 'unpaid-all':
			$sql = ("UPDATE `record_payment` SET `payment`='Unpaid' WHERE year = ".date("Y"));
			break;
	}
	$retval = mysqli_query($db, $sql);
	if(! $retval ) {
		die('Could not get data: ' . mysql_error());
	}
	$query = $db->query("SELECT id_payment FROM record_payment WHERE year = ".date("Y"));
	if ($query->num_rows > 0) {
    	// output data of each row
    	while($row = $query->fetch_assoc()) {
			 array_push($response, $row['id_payment']);
		}
	}
	echo json_encode($response);
	exit;
}
?>