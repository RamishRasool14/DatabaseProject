<?php
$servername = 'localhost';
$username =  'id15668406_hammadjamal';
$password = 's9W^-~a+PlrO]]?j';
$dbname =  'id15668406_project';
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$category = $_GET['category'];
// echo $category;

if ($category == 'Faculty'){

$sql = "SELECT * FROM `faculty`";
$result = mysqli_query($conn, $sql);
echo "<h2>Following is the Information of Faculty stored in Database</h2>";
echo "<br>";
echo "<table>" ;
echo  "<tr>" ;
echo    "<th>ID</th>";
echo    "<th>Name</th>";
echo    "<th>Password</th>";
echo    "<th>Address</th>";
echo    "<th>Department</th>";
echo    "<th>Contact</th>";
echo    "<th>Salary</th>";
echo  "</tr>" ;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>" ;
    echo "<td>"." ".$row["faculty_id"]." "."</td>";
    echo "<td>"." ".$row["name"]." "."</td>";
    echo "<td>"." ".$row["password"]." "."</td>";
    echo "<td>"." ".$row["address"]." "."</td>";
    echo "<td>"." ".$row["dept_name"]." "."</td>";
    echo "<td>"." ".$row["contact"]." "."</td>";
    echo "<td>"." ".$row["salary"]." "."</td>";
    echo "</tr>";
}
echo "</table>";

}
elseif($category == 'Students'){
$sql = "SELECT * FROM `student`";
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
echo    "<th>Contact</th>";
echo    "<th>Email</th>";
echo  "</tr>" ;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>" ;
    echo "<td>"." ".$row["student_id"]." "."</td>";
    echo "<td>"." ".$row["name"]." "."</td>";
    echo "<td>"." ".$row["password"]." "."</td>";
    echo "<td>"." ".$row["address"]." "."</td>";
    echo "<td>"." ".$row["contact"]." "."</td>";
    echo "<td>"." ".$row["dept_name"]." "."</td>";
    echo "<td>"." ".$row["contact"]." "."</td>";
    echo "<td>"." ".$row["email"]." "."</td>";
    echo "</tr>";
}
echo "</table>";

}
elseif($category == 'Courses') {
  $sql = "SELECT * FROM `course`";
$result = mysqli_query($conn, $sql);

echo "<h2>Following is the Information of Courses stored in Database</h2>";
echo "<br>";

echo "<table>" ;
echo  "<tr>" ;
echo    "<th>Course ID</th>";
echo    "<th>Title</th>";
echo    "<th>Department</th>";
echo    "<th>Credits</th>";
echo    "<th>Cap</th>";
echo  "</tr>" ;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>" ;
    echo "<td>"." ".$row["course_id"]." "."</td>";
    echo "<td>"." ".$row["title"]." "."</td>";
    echo "<td>"." ".$row["dept_name"]." "."</td>";
    echo "<td>"." ".$row["credits"]." "."</td>";
    echo "<td>"." ".$row["cap"]." "."</td>";
}
echo "</table>";


}
else {

  echo "Sorry, your search could not fetch any useful results";
}



?>

<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 70%;
}
body{
  font-family: sans-serif;
  padding: 40px 60px;

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
<body>
  <ul class="pager">
    <li><a href="/actors/admin.html">Home</a></li>
  </ul>
  </body>
</html>
