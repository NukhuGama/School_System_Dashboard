<?php
if(!empty($_POST['table'])){
    $data = array();
    //$data1 = array();
    
    //database details
    $dbHost     = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName     = 'dashboard';
    
    //create connection and select DB
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    if($db->connect_error){
        die("Unable to connect database: " . $db->connect_error);
    }
    //get user data from the database


    $query = $db->query("SELECT AVG(score) AS average FROM record_score  INNER JOIN  
    `subject` ON (`record_score`.`id_subject`=`subject`.`id_subject`) INNER JOIN `student`
    ON (`student`.`id_student` = `record_score`.`id_student`) WHERE (`student`.`major`='Social' AND `subject`.`major`='Social') GROUP BY `subject`.`name`,`record_score`.`year`");


if($query->num_rows > 0){ 
        $data['status'] = 'ok';
        $userData = $query->fetch_assoc();
        $data['result1'] = $userData;
        $userData = $query->fetch_assoc();
        $data['result2'] = $userData;
        $userData = $query->fetch_assoc();
        $data['result3'] = $userData;
        $userData = $query->fetch_assoc();
        $data['result4'] = $userData;
        $userData = $query->fetch_assoc();
        $data['result5'] = $userData;
        $userData = $query->fetch_assoc();
        $data['result6'] = $userData;
        $userData = $query->fetch_assoc();
        $data['result7'] = $userData;
        $userData = $query->fetch_assoc();
        $data['result8'] = $userData;
        $userData = $query->fetch_assoc();
        $data['result9'] = $userData;
        $userData = $query->fetch_assoc();
        $data['result10'] = $userData;

        $userData = $query->fetch_assoc();
        $data['result11'] = $userData;
        $userData = $query->fetch_assoc();
        $data['result12'] = $userData;
        $userData = $query->fetch_assoc();
        $data['result13'] = $userData;
        $userData = $query->fetch_assoc();
        $data['result14'] = $userData;
        $userData = $query->fetch_assoc();
        $data['result15'] = $userData;
        $userData = $query->fetch_assoc();
        $data['result16'] = $userData;
        $userData = $query->fetch_assoc();
        $data['result17'] = $userData;
        $userData = $query->fetch_assoc();
        $data['result18'] = $userData;
        $userData = $query->fetch_assoc();
        $data['result19'] = $userData;
        $userData = $query->fetch_assoc();
        $data['result20'] = $userData;
        $userData = $query->fetch_assoc();
        $data['result21'] = $userData;
      

    }

    echo json_encode($data);

    


    


    // 
   // echo json_encode($data);


   
    
    //returns data as JSON format
    
}
?>