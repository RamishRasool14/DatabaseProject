<?php

$ID = $_GET['studentID'];
$R_n = $_GET['reference_num'];
$data = $_GET["_data"];


$servername = 'localhost:3306';
$username = 'root';
$password = '';
$dbname = 'test';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO 'change_requests' ('student_id', 'reference_no', '_data')
        VALUES ('$ID','$R_n','$data')";
$result = $conn->query($sql);


$conn->close();



// echo $a;
// echo "<br>";
// echo $n;
// echo "<br>";
// echo $p;
// echo "<br>";



?>