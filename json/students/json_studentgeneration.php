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
    // $query = $db->query("SELECT generation, COUNT(*) AS total FROM student GROUP BY generation");
    $query = $db->query("SELECT COUNT({$_POST['table']}) AS total FROM student GROUP BY {$_POST['table']} ORDER BY {$_POST['table']}");


    if ($query->num_rows > 0) {
        $data['status'] = 'ok';
        $userData = $query->fetch_assoc();
        $data['result1'] = $userData;
        $userData = $query->fetch_assoc();
        $data['result2'] = $userData;
        $userData = $query->fetch_assoc();
        $data['result3'] = $userData;
        $userData = $query->fetch_assoc();
    }

    //returns data as JSON format
    echo json_encode($data);
}