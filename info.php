<?php
$servername = 'localhost';
$username = 'hammad';
$password = 'Hammad@786';
$dbname = 'Database';
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$category = $_GET['category'];
// echo $category;

if ($category == 'Faculty'){

$sql = "SELECT * FROM `Faculty`";
$result = mysqli_query($conn, $sql);

echo "<h2>Following is the Information of Faculty stored in Database</h2>";
echo "<br>";
echo "<table>" ;
echo  "<tr>" ;
echo    "<th>ID</th>";
echo    "<th>Name</th>";
echo    "<th>Password</th>";
echo    "<th>Contact</th>";
echo    "<th>Address</th>";
echo    "<th>Salary</th>";
echo  "</tr>" ;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>" ;
    echo "<td>"." ".$row["ID"]." "."</td>";
    echo "<td>"." ".$row["Name"]." "."</td>";
    echo "<td>"." ".$row["Password"]." "."</td>";
    echo "<td>"." ".$row["Contact"]." "."</td>";
    echo "<td>"." ".$row["Address"]." "."</td>";
    echo "<td>"." ".$row["Salary"]." "."</td>";
    echo "</tr>";
}
echo "</table>";

}
elseif($category == 'Students'){
$sql = "SELECT * FROM `Students`";
$result = mysqli_query($conn, $sql);

echo "<h2>Following is the Information of Students stored in Database</h2>";
echo "<br>";

echo "<table>" ;
echo  "<tr>" ;
echo    "<th>ID</th>";
echo    "<th>Name</th>";
echo    "<th>Password</th>";
echo    "<th>Address</th>";
echo    "<th>Contact</th>";
echo    "<th>Department</th>";
echo  "</tr>" ;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>" ;
    echo "<td>"." ".$row["ID"]." "."</td>";
    echo "<td>"." ".$row["Name"]." "."</td>";
    echo "<td>"." ".$row["Password"]." "."</td>";
    echo "<td>"." ".$row["Address"]." "."</td>";
    echo "<td>"." ".$row["Contact"]." "."</td>";
    echo "<td>"." ".$row["Dept_Name"]." "."</td>";
    echo "</tr>";
}
echo "</table>";

}
elseif($category == 'Courses') {
  $sql = "SELECT * FROM `Courses`";
$result = mysqli_query($conn, $sql);

echo "<h2>Following is the Information of Courses stored in Database</h2>";
echo "<br>";

echo "<table>" ;
echo  "<tr>" ;
echo    "<th>Course ID</th>";
echo    "<th>Department</th>";
echo    "<th>Instructor ID</th>";
echo    "<th>Section ID</th>";
echo  "</tr>" ;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>" ;
    echo "<td>"." ".$row["Course_ID"]." "."</td>";
    echo "<td>"." ".$row["Dept_Name"]." "."</td>";
    echo "<td>"." ".$row["Inst_ID"]." "."</td>";
    echo "<td>"." ".$row["Section_ID"]." "."</td>";
}
echo "</table>";

    
}



?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
h2{
    padding: 12px;
}
</style>
</head>
</html>



