<?php
// Start the session
session_start();
$actor = $_GET['actor'];
$name = $_GET['uname'];
$passwrd = $_GET["psw"];
 
$servername = 'localhost';
$username = 'id15668406_hammadjamal';
$password = 's9W^-~a+PlrO]]?j';
$dbname = 'id15668406_project';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  
  die("Connection failed: " . $conn->connect_error);

}
if($actor == 0){
    
    header("Location: /index2.html");
}
if($actor == 1){
  
  $sql = "SELECT * FROM `faculty` WHERE `faculty_id` = '$name' AND `password` = '$passwrd'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  
  if ($row['faculty_id']==$name && $row['password']==$passwrd ) {
    $_SESSION["user_id"] = $name;
    header("Location: actors/faculty.html");
  
  } else {
    
    header("Location: index2.html");
  
  }
}

if($actor == 2){
  
  $sql = "SELECT * FROM `helpdesk` WHERE `helpdesk_id` = '$name' AND `password` = '$passwrd'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  
  if ($row['helpdesk_id']==$name && $row['password']==$passwrd ) {
    $_SESSION["user_id"] = $name;
    header("Location: actors/helpdesk.html");
  
  } else {
    
    header("Location: index2.html");
  
  }
}

if($actor == 3){
  
  $sql = "SELECT * FROM `student` WHERE `student_id` = '$name' AND `password` = '$passwrd'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  
  if ($row['student_id']==$name && $row['password']==$passwrd ) {
    $_SESSION["user_id"] = $name;
    header("Location: actors/student.html");
  
  } else {
    
    header("Location: index2.html");
  
  }
}

if($actor == 4){
  
  $sql = "SELECT * FROM `admin` WHERE `admin_id` = '$name' AND `password` = '$passwrd'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  
  if ($row['admin_id']==$name && $row['password']==$passwrd ) {
    $_SESSION["user_id"] = $name;
    header("Location: actors/admin.html");
  
  } else {
    
    header("Location: index2.html");
  
  }
}

$conn->close();

?>
