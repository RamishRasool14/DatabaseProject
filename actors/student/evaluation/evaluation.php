<?php

$delievery = $_GET['rating1'];
$management = $_GET['rating2'];
$engagement = $_GET['rating3'];
$comments = $_GET['commentText'];
$delievery = $delievery*2;
$management = $management*2;
$engagement = $engagement*2;

// echo $comments;
// echo $delievery;
// echo $engagement;
// echo $management;


// $servername = 'localhost:3308';
// $username = 'root';
// $password = '';
// $dbname = 'demo_db';

$servername = 'localhost';
$username = 'id15668406_hammadjamal';
$password = 's9W^-~a+PlrO]]?j';
$dbname = 'id15668406_project';


// // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$checkbox = $_GET['check'];
  for($i=0;$i<count($checkbox);$i++){
  $del_id = $checkbox[$i]; 
  $split = explode("/",$del_id);
//   print_r($split);
  $sql = "INSERT INTO `evaluation`(`faculty_id`, `course_id`, `student_id`, `sec_id`, `year`, `semester`, `delivery`, `management`, `engagement`, `comments`) VALUES ('$split[0]', '$split[1]', '$split[2]','$split[3]','$split[4]','$split[5]','$delievery','$management','$engagement','$comments');";
// echo "Evaluation",$course_id;
if(mysqli_query($conn, $sql)){
// 	echo "Form Successfully submitted";

    header('Location: eval.php');
}
else{

    // echo 'Something Went Wrong';
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}


// $row = mysqli_fetch_assoc($result);
// if ($row['name']==$name && $row['password']==$passwrd ) {
  
// //   header("Location: administrator.php"); /* Redirect browser */

// } else {
//   echo "0 results";
// }
$conn->close();





?>
