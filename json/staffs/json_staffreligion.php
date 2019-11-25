<?php
if (!empty($_POST['table'])) {
    $data = array();

    //database details
    $dbHost     = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName     = 'dashboard';

    //create connection and select DB
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    if ($db->connect_error) {
        die("Unable to connect database: " . $db->connect_error);
    }
    //get user data from the database
    $query = $db->query("SELECT COUNT({$_POST['table']}) AS total FROM staff GROUP BY {$_POST['table']} ORDER BY {$_POST['table']}");

    if ($query->num_rows > 0) {
        $data['status'] = 'ok';
        $userData1 = $query->fetch_assoc();
        $data['result1'] = $userData1;

        $userData2 = $query->fetch_assoc();
        $data['result2'] = $userData2;

        $userData3 = $query->fetch_assoc();
        $data['result3'] = $userData3;

        $userData4 = $query->fetch_assoc();
        $data['result4'] = $userData4;

        $userData5 = $query->fetch_assoc();
        $data['result5'] = $userData5;

        $userData6 = $query->fetch_assoc();
        $data['result6'] = $userData6;
    }

    //returns data as JSON format
    echo json_encode($data);
}
