<?php

$servername = 'localhost';
$username = 'id15668406_hammadjamal';
$password = 's9W^-~a+PlrO]]?j';
$dbname = 'id15668406_project';

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if($conn == false){
        echo "CONN FAILED";
    }

    $student_ID = $_POST['student_ID'];
    $course_ID = $_POST['course_ID'];
    $section_ID = $_POST['section_ID'];

    // echo $student_ID;
    // echo "<br>";
    // echo $course_ID;
    // echo "<br>";
    // echo $section_ID;  

    $cont = $course_ID;

    $sql = "UPDATE section SET `ta_id` = '$student_ID' WHERE `course_id` = '$course_ID' AND `sec_id` = '$section_ID' ";
    if(mysqli_query($conn, $sql)){
        //echo "TA Assigned";
    } else{
        echo "Query Failed";
    }
    
    //echo "<br>";

    $sql = "DELETE FROM ta_application WHERE `student_id` = '$student_ID' AND `course_id` = '$course_ID' AND `sec_id` = '$section_ID'";
    if(mysqli_query($conn, $sql)){
        //echo "UPDATED TA APPS LIST";
       
    } else{
        echo "Query Failed";
        echo("Error description: " . mysqli_error($conn));
    } 

    header('Location: \actors\faculty\verify_TAship\verify_TAship_apps.php');
      
    die();
        
?>