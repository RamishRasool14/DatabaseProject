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

$sql = "SELECT name,password FROM $a";

$result = mysqli_query($conn,$sql) or die ("Error: $sql ");
$row = mysqli_fetch_assoc($result);
if($row['name'] == $n & $row['password'] == $p)
{
	echo "Logged In";

	header("Location: actors/$a.html?name=$n");
	

}
else
{
	echo "Incorrect Username or Password";
}
// print_r($row['name']);

$conn->close();

?>