<?php

$a = $_GET['actor'];
$n = $_GET['name'];
$p = $_GET["password"];


$servername = 'localhost:3308';
$username = 'root';
$password = '';
$dbname = 'universitydatabase';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO admin(name,password) VALUES ('$n','$p')";



if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



// echo $a;
// echo "<br>";
// echo $n;
// echo "<br>";
// echo $p;
// echo "<br>";



?>