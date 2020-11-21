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

$sql = "SELECT name,password FROM '$a'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["admin_id"]. " - Name: " . $row["name"]. " " . $row["password"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();



// echo $a;
// echo "<br>";
// echo $n;
// echo "<br>";
// echo $p;
// echo "<br>";



?>