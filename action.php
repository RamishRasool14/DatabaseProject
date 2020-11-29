<?php

$actor = $_POST['actor'];
$name = $_POST['name'];
$passwrd = $_POST["password"];


$servername = 'localhost';
$username = 'hammad';
$password = 'Hammad@786';
$dbname = 'Database';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `admin` WHERE `name` = '$name' AND `password` = '$passwrd'";
// echo $sql;
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
if ($row['name']==$name && $row['password']==$passwrd ) {
  //
  // $row = mysqli_fetch_assoc($result);
  // echo $row['name'] . ' ';
  // echo $row["password"];
  // header()
  header("Location: administrator.php"); /* Redirect browser */

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
