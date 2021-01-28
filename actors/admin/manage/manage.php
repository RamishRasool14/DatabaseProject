<?php  
require 'database.php';
$database = new Database();

// $host = "localhost:3308";
// $user = "root";
// $password = "";
// $databases = "demo_db";


$host = 'localhost';
$user = 'id15668406_hammadjamal';
$password = 's9W^-~a+PlrO]]?j';
$databases = 'id15668406_project';

$conn = new mysqli($host,$user,$password,$databases);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

if(isset($_POST['save'])){
  $checkbox = $_POST['check'];
  for($i=0;$i<count($checkbox);$i++){
  $del_id = $checkbox[$i]; 
  // echo $del_id;
  mysqli_query($conn,"DELETE FROM admin WHERE admin_id='".$del_id."'");
  // $message = "Data deleted successfully";
  // echo $message;
}
}

if(isset($_POST['save1'])){
  $checkbox = $_POST['check'];
  for($i=0;$i<count($checkbox);$i++){
  $del_id = $checkbox[$i]; 
  $split = explode("/",$del_id);
  // print_r($split);
  mysqli_query($conn,"DELETE FROM `change_requests` WHERE student_id = '$split[0]' AND reference_no = '$split[1]' AND info = '$split[2]'  ");
  // $message = "Data deleted successfully";
  // echo $message;
}
}

if(isset($_POST['save20'])){
  $checkbox = $_POST['check'];
  for($i=0;$i<count($checkbox);$i++){
  $del_id = $checkbox[$i]; 
  $split = explode("/",$del_id);
  // print_r($split);
  mysqli_query($conn,"DELETE FROM `section` WHERE faculty_id = '$split[0]' AND course_id = '$split[1]' AND sec_id = '$split[2]' AND semester = '$split[3]' AND year = '$split[4]' AND building = '$split[5]' AND room_number = '$split[6]' AND time_slot_id = '$split[7]' AND ta_id = '$split[8]'  ");
  // $message = "Data deleted successfully";
  // echo $message;
}
}

if(isset($_POST['save3'])){
  $checkbox = $_POST['check'];
  for($i=0;$i<count($checkbox);$i++){
  $del_id = $checkbox[$i]; 
  $split = explode("/",$del_id);
  // print_r($split);
  mysqli_query($conn,"DELETE FROM course WHERE course_id='".$del_id."'");
  // $message = "Data deleted successfully";
  // echo $message;
}
}

if(isset($_POST['save4'])){
  $checkbox = $_POST['check'];
  for($i=0;$i<count($checkbox);$i++){
  $del_id = $checkbox[$i]; 
  $split = explode("/",$del_id);
  // print_r($split);
  mysqli_query($conn,"DELETE FROM `department` WHERE dept_name = '$split[0]' AND building = '$split[1]'  ");
  // $message = "Data deleted successfully";
  // echo $message;
}
}

if(isset($_POST['save50'])){
  $checkbox = $_POST['check'];
  for($i=0;$i<count($checkbox);$i++){
  $del_id = $checkbox[$i]; 
  $split = explode("/",$del_id);
  // print_r($split);
  mysqli_query($conn,"DELETE FROM `prereq` WHERE course_id = '$split[0]' AND prereq_id = '$split[1]'  ");
  // $message = "Data deleted successfully";
  // echo $message;
}
}

if(isset($_POST['save100'])){
  $checkbox = $_POST['check'];
  for($i=0;$i<count($checkbox);$i++){
  $del_id = $checkbox[$i]; 
  $split = explode("/",$del_id);
  // print_r($split);
  mysqli_query($conn,"DELETE FROM `enrollment_requests` WHERE course_id = '$split[0]' AND sec_id = '$split[1]' AND student_id = '$split[2]' AND time_stamp = '$split[3]'  ");
  // $message = "Data deleted successfully";
  // echo $message;
}
}

if (isset($_POST['prereq1'])) {
    $dept_building = $_POST['prereq1'];
    $dept_name = $_POST['prereq2'];
    
    
    $sql = "INSERT INTO `prereq`(`course_id`, `prereq_id`) VALUES ('$dept_name','$dept_building')";

    if ($conn->query($sql) === TRUE) {
  echo "Pre Requisite added successfully";
} else {
  echo "Error: "."<br>" . $conn->error;
}
}   


if(isset($_POST['save5'])){
  $checkbox = $_POST['check'];
  for($i=0;$i<count($checkbox);$i++){
  $del_id = $checkbox[$i]; 
  $split = explode("/",$del_id);
  mysqli_query($conn,"DELETE FROM `enrolled` WHERE student_id = '$split[0]' AND course_id = '$split[1]' AND sec_id = '$split[2]' AND semester = '$split[3]' AND year = '$split[4]' AND grade = '$split[5]'  ");
}
}

if (isset($_POST['admin_name'])) {
    $admin_name = $_POST['admin_name'];
    $admin_password = $_POST['admin_password'];
    $sql = "INSERT INTO admin (name,password)
VALUES ('$admin_name','$admin_password')";


// if ($database->runQuery($sql) === TRUE) {
//   echo "Admin added Successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $database->error();
// }

if ($conn->query($sql) === TRUE) {
  echo "Admin added Successfully";
} else {
  echo "Error: "."<br>" . $conn->error;
}

}

if (isset($_POST['student_id_change_request'])) {
    $student_id_change_request = $_POST['student_id_change_request'];
    $reference_no_change_request = $_POST['reference_no_change_request'];
    $data_change_request = $_POST['data_change_request'];
    
    $sql = "INSERT INTO `change_requests`(`student_id`, `reference_no`, `info`) VALUES ('$student_id_change_request','$reference_no_change_request','$data_change_request')";

    if ($conn->query($sql) === TRUE) {
  echo "New request created successfully";
} else {
  echo "Error: "."<br>" . $conn->error;
}
}   

if (isset($_POST['helpdesk'])) {
    $student_id_change_request = $_POST['helpdesk'];
    $reference_no_change_request = $_POST['reference_no_change_request'];
    $data_change_request = $_POST['data_change_request'];
    
    $sql = "INSERT INTO `helpdesk`(`helpdesk_id`, `name`, `password`) VALUES ('$student_id_change_request','$reference_no_change_request','$data_change_request')";

    if ($conn->query($sql) === TRUE) {
  echo "New HelpDesk entry created successfully";
} else {
  echo "Error: "."<br>" . $conn->error;
}
}  

if (isset($_POST['1234'])) {
    $student_id_enrolled = $_POST['1234'];
    $course_id_enrolled = $_POST['12345'];
    $sec_id_enrolled = $_POST['sec_id_enrolled'];
    $semester_enrolled = $_POST['semester_enrolled'];
    $year_enrolled = $_POST['year_enrolled'];
    $grade_enrolled = $_POST['grade_enrolled'];
    $marks_enrolled = $_POST['marks_enrolled'];
    
    
    
    
    $sql = "INSERT INTO `faculty`(`faculty_id`, `name`, `password`, `address`, `dept_name`, `contact`, `salary`) VALUES ('$student_id_enrolled','$course_id_enrolled','$sec_id_enrolled','$semester_enrolled','$year_enrolled','$grade_enrolled','$marks_enrolled')";

    if ($conn->query($sql) === TRUE) {
  echo "Faculty Added successfully";
} else {
  echo "Error: "."<br>" . $conn->error;
}
}  

if (isset($_POST['course_id'])) {
    $course_id = $_POST['course_id'];
    $dept_name = $_POST['dept_name'];
    $credits = $_POST['credits'];
    $title = $_POST['title'];
    $cap = $_POST['capp'];
    
    
    $sql = "INSERT INTO `course`(`course_id`, `title`, `dept_name`, `credits`, `cap`)VALUES ('$course_id','$title','$dept_name','$credits','$cap')";
    // echo $sql;

    if ($conn->query($sql) === TRUE) {
  echo "Course added successfully";
} else {
  echo "Error: "."<br>" . $conn->error;
}
}   

else
{

}

if (isset($_POST['dept_building'])) {
    $dept_building = $_POST['dept_building'];
    $dept_name = $_POST['dept_name'];
    
    
    $sql = "INSERT INTO `department`(`dept_name`, `building`) VALUES ('$dept_name','$dept_building')";

    if ($conn->query($sql) === TRUE) {
  echo "Department added successfully";
} else {
  echo "Error: "."<br>" . $conn->error;
}
}   

else
{

}

if(isset($_POST['save10'])){
  $checkbox = $_POST['check'];
  for($i=0;$i<count($checkbox);$i++){
  $del_id = $checkbox[$i]; 
  $split = explode("/",$del_id);
  // print_r($split);
  mysqli_query($conn,"DELETE FROM `venue` WHERE building = '$split[0]' AND room_number = '$split[1]' AND capacity = '$split[2]'  ");
  // $message = "Data deleted successfully";
  // echo $message;
}
}

if(isset($_POST['save30'])){
  $checkbox = $_POST['check'];
  for($i=0;$i<count($checkbox);$i++){
  $del_id = $checkbox[$i]; 
  $split = explode("/",$del_id);
  // print_r($split);
  mysqli_query($conn,"DELETE FROM `helpdesk` WHERE helpdesk_id = '$split[0]' AND name = '$split[1]' AND password = '$split[2]'  ");
  // $message = "Data deleted successfully";
  // echo $message;
}
}

if(isset($_POST['save13'])){
  $checkbox = $_POST['check'];
  for($i=0;$i<count($checkbox);$i++){
  $del_id = $checkbox[$i]; 
  $split = explode("/",$del_id);
  // print_r($split);
  mysqli_query($conn,"DELETE FROM `faculty` WHERE faculty_id = '$split[0]' AND name = '$split[1]' AND password = '$split[2]' AND address = '$split[3]' AND dept_name = '$split[4]' AND contact = '$split[5]' AND salary = '$split[6]'  ");
  // $message = "Data deleted successfully";
  // echo $message;
}
}

if(isset($_POST['save1000'])){
  $checkbox = $_POST['check'];
  for($i=0;$i<count($checkbox);$i++){
  $del_id = $checkbox[$i]; 
  $split = explode("/",$del_id);
  // print_r($split);
  mysqli_query($conn,"DELETE FROM `evaluation` WHERE faculty_id = '$split[0]' AND course_id = '$split[1]' AND student_id = '$split[2]' AND sec_id = '$split[3]' AND year = '$split[4]' AND semester = '$split[5]' AND delivery = '$split[6]' AND management = '$split[7]' AND engagement = '$split[8]' AND comments = '$split[9]'  ");
  // $message = "Data deleted successfully";
  // echo $message;
}
}

if(isset($_POST['save15'])){
  $checkbox = $_POST['check'];
  for($i=0;$i<count($checkbox);$i++){
  $del_id = $checkbox[$i]; 
  // echo $del_id;
  mysqli_query($conn,"DELETE FROM `time_slot` WHERE time_slot_id = '$del_id'  ");
  // $message = "Data deleted successfully";
  // echo $message;
}
}

if(isset($_POST['save11'])){
  $checkbox = $_POST['check'];
  for($i=0;$i<count($checkbox);$i++){
  $del_id = $checkbox[$i]; 
  $split = explode("/",$del_id);
  // print_r($split);
  mysqli_query($conn,"DELETE FROM `student` WHERE student_id = '$split[0]' AND name = '$split[1]' AND password = '$split[2]' AND address = '$split[3]' AND dept_name = '$split[4]' AND contact = '$split[5]'  ");
  // $message = "Data deleted successfully";
  // echo $message;
}
}

if (isset($_POST['course_id_enrolled'])) {
    $student_id_enrolled = $_POST['student_id_enrolled'];
    $course_id_enrolled = $_POST['course_id_enrolled'];
    $sec_id_enrolled = $_POST['sec_id_enrolled'];
    $semester_enrolled = $_POST['semester_enrolled'];
    $year_enrolled = $_POST['year_enrolled'];
    $grade_enrolled = $_POST['grade_enrolled'];
    $marks_enrolled = $_POST['marks_enrolled'];
    
    
    
    
    $sql = "INSERT INTO `enrolled`(`student_id`, `course_id`, `sec_id`, `semester`, `year`, `grade`, `marks`) VALUES ('$student_id_enrolled','$course_id_enrolled','$sec_id_enrolled','$semester_enrolled','$year_enrolled','$grade_enrolled','$marks_enrolled')";
    // echo $sql;

    if ($conn->query($sql) === TRUE) {
  echo "Student Enrolled in Course successfully";
} else {
  echo "Error: "."<br>" . $conn->error;
}
}   

else
{

}

if (isset($_POST['1venue'])) {
    $student_id_change_request = $_POST['1venue'];
    $reference_no_change_request = $_POST['2'];
    $data_change_request = $_POST['3'];
    
    $sql = "INSERT INTO `venue`(`building`, `room_number`, `capacity`) VALUES ('$student_id_change_request','$reference_no_change_request','$data_change_request')";

    if ($conn->query($sql) === TRUE) {
  echo "New Venue Added successfully";
} else {
  echo "Error: "."<br>" . $conn->error;
}
}   

else
{

}

if (isset($_POST['2student'])) {
    $student_id_enrolled = $_POST['1student'];
    $course_id_enrolled = $_POST['2student'];
    $sec_id_enrolled = $_POST['sec_id_enrolled'];
    $semester_enrolled = $_POST['semester_enrolled'];
    $year_enrolled = $_POST['year_enrolled'];
    $grade_enrolled = $_POST['grade_enrolled'];
    $email = $_POST['email'];
    
    
    
    
    $sql = "INSERT INTO `student`(`student_id`, `name`, `password`, `address`, `dept_name`, `contact`, `email`) VALUES ('$student_id_enrolled','$course_id_enrolled','$sec_id_enrolled','$semester_enrolled','$year_enrolled','$grade_enrolled','$email')";

    if ($conn->query($sql) === TRUE) {
  echo "Student added successfully";
} else {
  echo "Error: "."<br>" . $conn->error;
}
}   


if (isset($_POST['55555'])) {
    $student_id_enrolled = $_POST['1'];
    $course_id_enrolled = $_POST['22'];
    $sec_id_enrolled = $_POST['333'];
    $semester_enrolled = $_POST['4444'];
    $year_enrolled = $_POST['55555'];  
    
    
    
    $sql = "INSERT INTO `lecturer`(`faculty_id`, `course_id`, `sec_id`, `semester`, `year`) VALUES ('$student_id_enrolled','$course_id_enrolled','$sec_id_enrolled','$semester_enrolled','$year_enrolled')";
    echo $sql;

    if ($conn->query($sql) === TRUE) {
  echo "Student added successfully";
} else {
  echo "Error: "."<br>" . $conn->error;
}
}   

if (isset($_POST['timeslot'])) {
    $student_id_enrolled = $_POST['timeslot'];
    $course_id_enrolled = $_POST['timeslot1'];
    $sec_id_enrolled = $_POST['sec_id_enrolled'];
    $semester_enrolled = $_POST['semester_enrolled'];
    $year_enrolled = $_POST['year_enrolled'];
    $grade_enrolled = $_POST['grade_enrolled'];
    
    
    
    
    $sql = "INSERT INTO `time_slot`(`time_slot_id`, `day`, `start_hr`, `start_min`, `end_hr`, `end_min`) VALUES ('$student_id_enrolled','$course_id_enrolled','$sec_id_enrolled','$semester_enrolled','$year_enrolled','$grade_enrolled')";

    if ($conn->query($sql) === TRUE) {
  echo "TimeSlot added successfully";
} else {
  echo "Error: "."<br>" . $conn->error;
}
}   


if (isset($_POST['3section'])) {
  // echo "string";
  $x = $_POST['instructor_id_sec'];
    $student_id_enrolled = $_POST['11'];
    $course_id_enrolled = $_POST['3section'];
    $sec_id_enrolled = $_POST['sec_id_enrolled'];
    $semester_enrolled = $_POST['semester_enrolled'];
    $year_enrolled = $_POST['year_enrolled'];
    $grade_enrolled = $_POST['grade_enrolled'];
    $marks_enrolled = $_POST['marks_enrolled'];
    $y = $_POST['ta_id_sec'];
    
    
    
    
    $sql = "INSERT INTO `section`(`faculty_id`, `course_id`, `sec_id`, `semester`, `year`, `building`, `room_number`, `time_slot_id`, `ta_id`) VALUES ('$x','$student_id_enrolled','$course_id_enrolled','$sec_id_enrolled','$semester_enrolled','$year_enrolled','$grade_enrolled','$marks_enrolled','$y')";

    if ($conn->query($sql) === TRUE) {
  echo "Section added successfully";
} else {
  echo "Error: "."<br>" . $conn->error;
}
}   



$admin= $database->runQuery("SELECT * FROM `admin`");
$change_requests= $database->runQuery("SELECT * FROM `change_requests`");
$course = $database->runQuery("SELECT * FROM `course`");

$department= $database->runQuery("SELECT * FROM `department`");
$enrolled= $database->runQuery("SELECT * FROM `enrolled`");
$enrollment_requests= $database->runQuery("SELECT * FROM `enrollment_requests`");
$evaluation= $database->runQuery("SELECT * FROM `evaluation`");
$faculty= $database->runQuery("SELECT * FROM `faculty`");
$helpdesk= $database->runQuery("SELECT * FROM `helpdesk`");
$lecturer= $database->runQuery("SELECT * FROM `lecturer`");
$prereq= $database->runQuery("SELECT * FROM `prereq`");
$section= $database->runQuery("SELECT * FROM `section`");
$student= $database->runQuery("SELECT * FROM `student`");
$ta_application= $database->runQuery("SELECT * FROM `ta_application`");
$time_slot= $database->runQuery("SELECT * FROM `time_slot`");
$venue= $database->runQuery("SELECT * FROM `venue`");



 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Administrator</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
           <style>
           /*	
	Side Navigation Menu V2, RWD
	===================
	Author: https://github.com/pablorgarcia
 */

@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:white;
  background-color:#1F2739;
  overflow-x: hidden
  /*margin : 25px 25px;*/
}

h3{
  font-size:2em; 
  font-weight:bold ;
  line-height:1em;
  text-align: center;
  color: white;
}

#input{
     color : black;
}
h2 {
  font-size:3em; 
  font-weight: bold;
  text-align: center;
  display: block;
  line-height:1em;
  padding-bottom: 2em;
  color: white;
}

h2 a {
  font-weight: 700;
  text-transform: uppercase;
  color: #FB667A;
  text-decoration: none;
}

.blue { color: #185875; }
.yellow { color: #FFF842; }

.container th h1 {
    font-weight: bold;
    font-size: 1em;
  text-align: left;
  color: #185875;
}

.container td {
    font-weight: normal;
    font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
     -moz-box-shadow: 0 2px 2px -2px #0E1119;
          box-shadow: 0 2px 2px -2px #0E1119;
}



/*.container td, .container th {*/
/*    padding-bottom: 2%;*/
/*    padding-top: 2%;*/
/*  padding-left:2%;  */
/*}*/

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
    background-color: #323C50;
}

/* Background-color of the even rows */
/*.container tr:nth-child(even) {*/
/*    background-color: #2C3446;*/
/*}*/

.container th {
    background-color: #1F2739;
}

.container td:first-child { color: #FB667A; }

/*.container tr:hover {*/
/*   background-color: #464A52;*/
/*-webkit-box-shadow: 0 6px 6px -6px #0E1119;*/
/*     -moz-box-shadow: 0 6px 6px -6px #0E1119;*/
/*          box-shadow: 0 6px 6px -6px #0E1119;*/
/*}*/

/*.container td:hover {*/
/*  background-color: #FFF842;*/
/*  color: #403E10;*/
/*  font-weight: bold;*/
  
/*  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;*/
/*  transform: translate3d(6px, -6px, 0);*/
  
/*  transition-delay: 0s;*/
/*    transition-duration: 0.4s;*/
/*    transition-property: all;*/
/*  transition-timing-function: line;*/
/*}*/

/*@media (max-width: 800px) {*/
/*.container td:nth-child(4),*/
/*.container th:nth-child(4) { display: none; }*/
/*}*/
           </style>
      </head>  
      <body>  
          
      
      <br />
           <div class="container" style="width:900px;">  
                <h2 align="center">Add/Delete Enteries</h2>  
                <h3 align="center">Admin</h3>                 
                 
                <div class="table-responsive" id="employee_table">  
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                     <table class="table table-bordered">  
                          <tr>  
                              <th width="5%"></th>
                               <th width="5%">Admin Id</th>  
                               <th width="25%">Name</th>  
                               <th width="35%">Password</th>  
                          </tr>  
                     <?php  
                     $i=0;
                     while($row = mysqli_fetch_array($admin))  
                     {  
                     ?>  
                          <tr>  
                              <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row["admin_id"]; ?>"></td>
                               <td><?php echo $row["admin_id"]; ?></td>  
                               <td><?php echo $row["name"]; ?></td>  
                               <td><?php echo $row["password"]; ?></td>  
                          </tr>  
                     <?php      
                     $i++; 
                     }  
                     ?> 
                     </table>  

                     <p ><button type="submit" class="btn btn-success" name="save">DELETE</button></p>
                   </form>
                   <table class="table table-bordered">  
                          <tr>  
                              <th width="5%"></th>
                               <th width="5%"></th>  
                               <th width="25%">Name</th>  
                               <th width="35%">Password</th>  
                          </tr>  

                      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" name = "123" align="center">  
                          <tr>  
                               <td> </td> <td> </td>
                               <td><input style = "color : black;" type="text" id="fname" name="admin_name" name = "123" required></td>  
                               <td><input type="text" style = "color : black;"  id="lname" name="admin_password" name = "123" required></td> 
                          </tr>   
                    </table>
                     <input align="center" type="submit" name="123" value="Add Admin" class="btn btn-success"  /> 
                </form> 
                </div>

                <!-- <form method="post" action="export.php" align="center">   -->
                      
                <br /> 



                     <h3 align="center">Change Requests</h3>                 
                <br />  
                  
                <div class="table-responsive" id="employee_table"> 
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
                     <table class="table table-bordered">  
                          <tr>  
                            <th width="5%"><input type="checkbox" id="checkAl">   Select All</th>
                               <th width="5%">Student Id</th>  
                               <th width="25%">Reference Number</th>  
                               <th width="35%">Information</th>  

                          </tr>  
                     <?php  
                     $i=0;
                     while($row = mysqli_fetch_array($change_requests))  
                     {  
                     ?>  
                          <tr>  
                            <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row["student_id"]."/".$row["reference_no"]."/".$row["info"]; ?>"></td>
                               <td><?php echo $row["student_id"]; ?></td>  
                               <td><?php echo $row["reference_no"]; ?></td>  
                               <td><?php echo $row["info"]; ?></td>  
                          </tr>  
                     <?php     
                     $i++;   
                     }  
                     ?>

                     </table>  

                     <p ><button type="submit" class="btn btn-success" name="save1">DELETE</button></p>
                     <table class="table table-bordered">

                               <th width="5%">Student Id</th>  
                               <th width="25%">Reference Number</th>  
                               <th width="35%">Information</th>  
                   </form>
                     <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" align="center">  
                          <tr>  
                            <!-- <th width="5%"></th> -->
                               <td><input type="text" style = "color : black;"  id="fname" name="student_id_change_request" required></td>
                               <td><input type="text" style = "color : black;"  id="fname" name="reference_no_change_request" required></td>  
                               <td><input type="text" style = "color : black;"  id="lname" name="data_change_request" required></td> 
                          </tr>   

                   </table>
                     <input type="submit" name="export" value="Add Requests" class="btn btn-success" align="center" /> 
                </form>  

                </div>
                <br />



                     <h3 align="center">Courses</h3>                 
                <br />  
                 
                <div class="table-responsive" id="employee_table">  
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                     <table class="table table-bordered">  
                          <tr>  
                            <th width="5%"><input type="checkbox" id="checkAl">   Select All</th>
                               <th width="5%">Course Id</th>  
                               <th width="25%">Title</th>  
                               <th width="35%">Department</th>  
                               <th width="10%">Credit Hours</th>  
                               <th width="10%">Capacity</th>  
                               
                          </tr>  
                     <?php  
                     $i=0;
                     while($row = mysqli_fetch_array($course))  
                     {  
                     ?>  
                          <tr>  
                            <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row["course_id"]; ?>"></td>
                               <td><?php echo $row["course_id"]; ?></td>  
                               <td><?php echo $row["title"]; ?></td>  
                               <td><?php echo $row["dept_name"]; ?></td>  
                               <td><?php echo $row["credits"]; ?></td>  
                               <td><?php echo $row["cap"]; ?></td>  
                               
                          </tr>  
                     <?php     
                     $i++;   
                     }  
                     ?>  
                     </table>  

                     <p ><button type="submit" class="btn btn-success" name="save3">DELETE</button></p>
                     </form> 

                <table class = "table table-bordered">

                               <th width="5%">Course Id</th>  
                               <th width="25%">Title</th>  
                               <th width="35%">Department</th>  
                               <th width="10%">Credit Hours</th>    
                               <th width="10%">Capacity</th>  
                               <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" align="center">  
                          <tr> 
                               <td><input type="text" style = "color : black;"  id="fname" name="course_id" required></td> 
                               <td><input type="text" style = "color : black;"  id="fname" name="title" required></td>
                               <td><input type="text" style = "color : black;"  id="fname" name="dept_name" required></td>  
                               <td><input type="text" style = "color : black;"  id="lname" name="credits" required></td> 
                               <td><input type="text" style = "color : black;"  id="lname" name="capp" required></td> 
                          </tr>  

                </table>
                     <input type="submit" name="export" value="Add Course" class="btn btn-success" align="center" />  
                </form> 

                </div> 
                <br />





                     <h3 align="center">Departments</h3>                 
                <br />  
                  
                <div class="table-responsive" id="employee_table">  
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                     <table class="table table-bordered">  
                          <tr>  
                            <th width="5%"><input type="checkbox" id="checkAl">   Select All</th>
                               <th width="25%">Department Name</th>  
                               <th width="25%">Building</th>  

                          </tr>  
                     <?php  
                     $i=0;
                     while($row = mysqli_fetch_array($department))  
                     {  
                     ?>  
                          <tr>  
                            <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row["dept_name"]."/".$row["building"]; ?>"></td>
                               <td><?php echo $row["dept_name"]; ?></td>  
                               <td><?php echo $row["building"]; ?></td>  
                          </tr>  
                     <?php     
                     $i++;   
                     }  
                     ?>  
                     </table> 
                     <p ><button type="submit" class="btn btn-success" name="save4">DELETE</button></p>
                     </form> 
                <table class = "table table-bordered">

                               <th width="25%">Department Name</th>  
                               <th width="25%">Building</th>  

                      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" align="center">  
                          <tr>  
                               <td><input type="text" style = "color : black;"  id="fname" name="dept_name" required></td>  
                               <td><input type="text" style = "color : black;"  id="lname" name="dept_building" required></td> 
                          </tr>                    
                </table>

                     <input type="submit" name="export" value="Add Department" class="btn btn-success" align="center" />  
                </form> 

                </div>
                <br />








                     <h3 align="center">Enrolled</h3>                 
                <br />  
                  
                <div class="table-responsive" id="employee_table"> 
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
                     <table class="table table-bordered">  
                          <tr>  
                            <th width="5%"><input type="checkbox" id="checkAl">   Select All</th>
                               <th width="15%">Student ID</th>  
                               <th width="15%">Course ID</th>  
                               <th width="15%">Section ID</th>  
                               <th width="15%">Semester</th>  
                               <th width="15%">Year</th>  
                               <th width="5%">Grade</th>  
                               <th width="15%">Marks</th>  

                          </tr>  
                     <?php  
                     $i=0;
                     while($row = mysqli_fetch_array($enrolled))  
                     {  
                     ?>  
                          <tr>  
                            <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row["student_id"]."/".$row["course_id"]."/".$row["sec_id"]."/".$row["semester"]."/".$row["year"]."/".$row["grade"]; ?>"></td>
                               <td><?php echo $row["student_id"]; ?></td>  
                               <td><?php echo $row["course_id"]; ?></td>  
                               <td><?php echo $row["sec_id"]; ?></td>  
                               <td><?php echo $row["semester"]; ?></td>  
                               <td><?php echo $row["year"]; ?></td>  
                               <td><?php echo $row["grade"]; ?></td>  
                               <td><?php echo $row["marks"]; ?></td>  
                          </tr>  
                     <?php    
                     $i++;    
                     }  
                     ?>  
                     </table>  

                     <p ><button type="submit" class="btn btn-success" name="save5">DELETE</button></p>
                     </form> 

                     <table class = "table table-bordered">


                               
                               <th width="15%">Student ID</th>  
                               <th width="15%">Course ID</th>  
                               <th width="15%">Section ID</th>  
                               <th width="15%">Semester</th>  
                               <th width="15%">Year</th>  
                               <th width="5%">Grade</th>  
                               <th width="15%">Marks</th>  

                               <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" align="center">  
                          <tr> 
                               <td><input type="text" style = "color : black;"  id="fname" name="student_id_enrolled" required></td> 
                               <td><input type="text" style = "color : black;"  id="fname" name="course_id_enrolled" required></td>
                               <td><input type="text" style = "color : black;"  id="fname" name="sec_id_enrolled" required></td>  
                               <td><input type="text" style = "color : black;"  id="lname" name="semester_enrolled" required></td>
                               <td><input type="text" style = "color : black;"  id="lname" name="year_enrolled" required></td>
                               <td><input type="text" style = "color : black;"  id="lname" name="grade_enrolled" required></td>
                               <td><input type="text" style = "color : black;"  id="lname" name="marks_enrolled" ></td>
                                
                          </tr>  

                       
                     </table>
                     <input type="submit" name="export" value="Add Course" class="btn btn-success" align="center" />  
                </form> 

                </div> 
                <br />








                     <h3 align="center">Enrollment Requests</h3>                 
                <br />  
                  
                <div class="table-responsive" id="employee_table">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">  
                     <table class="table table-bordered">  
                          <tr>  
                            <th width="5%"><input type="checkbox" id="checkAl">   Select All</th>
                               <th width="5%">Course ID</th>  
                               <th width="5%">Section ID</th>  
                               <th width="5%">Student ID</th>  


                               <th width="25%">Time Stamp</th>  

                          </tr>  
                     <?php  
                     $i=0;
                     while($row = mysqli_fetch_array($enrollment_requests))  
                     {  
                     ?>  
                          <tr>  
                            <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row["course_id"]."/".$row["sec_id"]."/".$row["student_id"]."/".$row["time_stamp"]; ?>"></td>
                               <td><?php echo $row["course_id"]; ?></td>  
                               <td><?php echo $row["sec_id"]; ?></td>  
                               <td><?php echo $row["student_id"]; ?></td>  
                               <td><?php echo $row["time_stamp"]; ?></td>  
                          </tr>  
                     <?php     
                     $i++;   
                     }  
                     ?>  
                       </table>
                     <p ><button type="submit" class="btn btn-success" name="save100">DELETE</button></p>
                   </form> 
                </div>
                <br />








                     <h3 align="center">Evaluation</h3>                 
                <br />  
                  
                <div class="table-responsive" id="employee_table">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">  
                     <table class="table table-bordered">  
                          <tr>  
                            <th width="5%"><input type="checkbox" id="checkAl">   Select All</th>
                               <th width="5%">Faculty ID</th>  
                               <th width="10%">Course ID</th>  
                               <th width="10%">Student ID</th>  
                               <th width="10%">Section ID</th>  
                               <th width="10%">Year</th>  
                               <th width="10%">Semester</th>  
                               <th width="10%">Delivery</th>  
                               <th width="10%">Management</th>  
                               <th width="10%">Engagement</th>  
                               <th width="10%">Comments</th>  

                          </tr>  
                     <?php  
                     $i=0;
                     while($row = mysqli_fetch_array($evaluation))  
                     {  
                     ?> 
                     	
 
                          <tr>  

                             <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row["faculty_id"]."/".$row["course_id"]."/".$row["student_id"]."/".$row["sec_id"]."/".$row["year"]."/".$row["semester"]."/".$row["delivery"]."/".$row["management"]."/".$row["engagement"]."/".$row["comments"]; ?>"></td>
                               <td><?php echo $row["faculty_id"]; ?></td>  
                               <td><?php echo $row["course_id"]; ?></td>  
                               <td><?php echo $row["student_id"]; ?></td>  
                               <td><?php echo $row["sec_id"]; ?></td>  
                               <td><?php echo $row["year"]; ?></td>  
                               <td><?php echo $row["semester"]; ?></td>  
                               <td><?php echo $row["delivery"]; ?></td>  
                               <td><?php echo $row["management"]; ?></td>  
                               <td><?php echo $row["engagement"]; ?></td>  
                               <td><?php echo $row["comments"]; ?></td>  
                               
                          </tr>  
                     <?php   
                     $i++;     
                     }  
                     ?>  </table>
                     <p ><button type="submit" class="btn btn-success" name="save1000">DELETE</button></p>
                   </form> 
                </div>
                <br />










                     <h3 align="center">Faculty</h3>                 
                <br />  
                  
                <div class="table-responsive" id="employee_table">  
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                     <table class="table table-bordered">  
                          <tr>  
                            <th width="5%"><input type="checkbox" id="checkAl">   Select All</th>

                               <th width="5%">Faculty ID</th>  
                               <th width="25%">Name</th>  
                               <th width="35%">Password</th>  
                               <th width="10%">Address</th>  
                               <th width="10%">Department</th> 

                               <th width="10%">Contact</th> 
                               <th width="10%">Salary</th>  
                              

                          </tr>  
                     <?php  
                     $i=0;
                     while($row = mysqli_fetch_array($faculty))  
                     {  
                     ?>  
                          <tr>  

                             <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row["faculty_id"]."/".$row["name"]."/".$row["password"]."/".$row["address"]."/".$row["dept_name"]."/".$row["contact"]."/".$row["salary"]; ?>"></td>

                               <td><?php echo $row["faculty_id"]; ?></td>  
                               <td><?php echo $row["name"]; ?></td>  
                               <td><?php echo $row["password"]; ?></td>  
                               <td><?php echo $row["address"]; ?></td>  
                               <td><?php echo $row["dept_name"]; ?></td> 
                               <td><?php echo $row["contact"]; ?></td> 

                               <td><?php echo $row["salary"]; ?></td>  
                          </tr>  
                     <?php      
                     $i++;  
                     }  
                     ?>  
                     </table>  
                     <p ><button type="submit" class="btn btn-success" name="save13">DELETE</button></p>
                   </form>
                </div>
                <table class = "table table-bordered">


                               <th width="5%">Faculty ID</th>  
                               <th width="25%">Name</th>  
                               <th width="35%">Password</th>  
                               <th width="10%">Address</th>  
                               <th width="10%">Department</th> 
                               <th width="10%">Contact</th> 
                               <th width="10%">Salary</th> 

                  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" align="center">  
                          <tr> 
                             <td><input type="text" style = "color : black;"  id="fname" name="1234" required></td> 
                               <td><input type="text" style = "color : black;"  id="fname" name="12345" required></td>
                               <td><input type="text" style = "color : black;"  id="fname" name="sec_id_enrolled" required></td>  
                               <td><input type="text" style = "color : black;"  id="lname" name="semester_enrolled" required></td>
                               <td><input type="text" style = "color : black;"  id="lname" name="year_enrolled" required></td>
                               <td><input type="text" style = "color : black;"  id="lname" name="grade_enrolled" required></td>
                               <td><input type="text" style = "color : black;"  id="lname" name="marks_enrolled" ></td>
                               
                          </tr>  

                  
                </table>
                <form method="post" action="export.php" align="center">  
                     <input type="submit" name="export" value="Add Faculty" class="btn btn-success" />  
                </form>  
                <br />

                     <h3 align="center">Help Desk</h3>                 
                <br />  
                  
                <div class="table-responsive" id="employee_table">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">  
                     <table class="table table-bordered">  
                          <tr>  
                            <th width="5%"><input type="checkbox" id="checkAl">   Select All</th>

                               <th width="5%">HelpDesk ID</th>  
                               <th width="25%">Name</th>  
                               <th width="35%">Password</th>  

                          </tr>  
                     <?php  
                     $i=0;
                     while($row = mysqli_fetch_array($helpdesk))  
                     {  
                     ?>  
                          <tr>  

                               <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row["helpdesk_id"]."/".$row["name"]."/".$row["password"]; ?>"></td>

                               <td><?php echo $row["helpdesk_id"]; ?></td>  
                               <td><?php echo $row["name"]; ?></td>  
                               <td><?php echo $row["password"]; ?></td>  
                               <tr>  
                            <!-- <th width="5%"></th> -->
                          </tr>   

                          </tr>  
                     <?php    
                     $i++;    
                     }  
                     ?>  
                      </table>
                     <p ><button type="submit" class="btn btn-success" name="save30">DELETE</button></p>
                   </form>
                     <table class = "table table-bordered">  
                      <tr>

                               <th width="5%">HelpDesk ID</th>  
                               <th width="25%">Name</th>  
                               <th width="35%">Password</th>  
                      </tr> 
                      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" align="center">  

                               <td><input type="text" style = "color : black;"  id="fname" name="helpdesk" required></td>
                               <td><input type="text" style = "color : black;"  id="fname" name="reference_no_change_request" required></td>  
                               <td><input type="text" style = "color : black;"  id="lname" name="data_change_request" required></td> 
               
                

                </table> 
                     <input type="submit" name="export" value="Add Help Desk" class="btn btn-success" />  
                </form>  
                 </div>
                <br />











                     <h3 align="center">Lecturers</h3>                 
                <br />  
                  
                <div class="table-responsive" id="employee_table"> 
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
                     <table class="table table-bordered">  
                          <tr>  
                            <th width="5%"><input type="checkbox" id="checkAl">   Select All</th>
                               <th width="5%">Faculty ID</th>  
                               <th width="25%">Course ID</th>  
                               <th width="35%">Section ID</th>  
                               <th width="10%">Semester</th>  
                               <th width="10%">Year</th>  

                          </tr>  
                     <?php  
                     $i=0;
                     while($row = mysqli_fetch_array($lecturer))  
                     {  
                     ?>  
                          <tr>  

                             <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row["faculty_id"]."/".$row["course_id"]."/".$row["sec_id"]."/".$row["semester"]."/".$row["year"]; ?>"></td>
                               <td><?php echo $row["faculty_id"]; ?></td>  
                               <td><?php echo $row["course_id"]; ?></td>  
                               <td><?php echo $row["sec_id"]; ?></td>  
                               <td><?php echo $row["semester"]; ?></td>  
                               <td><?php echo $row["year"]; ?></td>  
                          </tr>  
                     <?php    
                     $i++;    
                     }  
                     ?>  
                     </table>  

                     <p ><button type="submit" class="btn btn-success" name="save10">DELETE</button></p>
                   </form>

                   <table class = "table table-bordered">

                               <th width="5%">Faculty ID</th>  
                               <th width="25%">Course ID</th>  
                               <th width="35%">Section ID</th>  
                               <th width="10%">Semester</th>  
                               <th width="10%">Year</th>  
                               <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" align="center">  


                          <tr>  
                               <td><input type="text" style = "color : black;"  id="fname" name="1" required></td>
                               <td><input type="text" style = "color : black;"  id="fname" name="22" required></td>  
                               <td><input type="text" style = "color : black;"  id="lname" name="333" required></td> 
                               <td><input type="text" style = "color : black;"  id="lname" name="4444" required></td> 
                               <td><input type="text" style = "color : black;"  id="lname" name="55555" required></td> 
                               
                          </tr>  

                     
                   </table>
                     <input type="submit" name="export" value="Add Lecturers" class="btn btn-success" />  
                </form>  
                </div>
                <br />











                     <h3 align="center">Pre Reqs</h3>                 
                <br />  
                  
                <div class="table-responsive" id="employee_table"> 
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
                     <table class="table table-bordered">  
                          <tr>  
                            <th width="5%"><input type="checkbox" id="checkAl">   Select All</th>
                               <th width="5%">Course ID</th>  
                               <th width="25%">Pre-Requisite</th>  
                              

                          </tr>  
                     <?php  
                     $i=0;
                     while($row = mysqli_fetch_array($prereq))  
                     {  
                     ?>  	
                          <tr>  

                            <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row["course_id"]."/".$row["prereq_id"]; ?>"></td>
                               <td><?php echo $row["course_id"]; ?></td>  
                               <td><?php echo $row["prereq_id"]; ?></td>  
                              
                          </tr>  
                     <?php     
                     $i++;   
                     }  
                     ?>  
                     </table>  
                     <p ><button type="submit" class="btn btn-success" name="save50">DELETE</button></p>
                   </form>

                   <table class = "table table-bordered">

                    <tr>
                               <th width="5%">Course ID</th>  
                               <th width="25%">Pre-Requisite</th> 
                    </tr>

                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" align="center">  
                     <tr>  
                               <td><input type="text" style = "color : black;"  id="fname" name="prereq1" required></td>  
                               <td><input type="text" style = "color : black;"  id="lname" name="prereq2" required></td> 
                          </tr>     

                              
                     

                   </table>
                     <input type="submit" name="export" value="Add Pre Reqs" class="btn btn-success" />  
                </form>  
                </div>
                <br />








                     <h3 align="center">Sections</h3>                 
                <br />  
                  
                <div class="table-responsive" id="employee_table"> 
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
                     <table class="table table-bordered">  
                          <tr>  
                            <th width="5%"><input type="checkbox" id="checkAl">   Select All</th>

                               <th width="5%">Faculty ID</th> 
                               <th width="5%">Course ID</th>  
                               <th width="25%">Section ID</th>  
                               <th width="35%">Semester</th>  
                               <th width="10%">Year</th>  
                               <th width="10%">Building</th>  
                               <th width="10%">Room Number</th>

                               <th width="10%">Time Slot ID</th>
                              <th width="10%">TA Student ID</th>


                          </tr>  
                     <?php  
                     $i=0;
                     while($row = mysqli_fetch_array($section))  
                     {  
                     ?>  
                          <tr>  

                            <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row["faculty_id"]."/".$row["course_id"]."/".$row["sec_id"]."/".$row["semester"]."/".$row["year"]."/".$row["building"]."/".$row["room_number"]."/".$row["time_slot_id"]."/".$row["ta_id"]; ?>"></td>
                            <td><?php echo $row["faculty_id"]; ?></td> 
                               
                               <td><?php echo $row["course_id"]; ?></td> 

                               <td><?php echo $row["sec_id"]; ?></td>  
                               <td><?php echo $row["semester"]; ?></td>  
                               <td><?php echo $row["year"]; ?></td>  
                               <td><?php echo $row["building"]; ?></td>  
                               <td><?php echo $row["room_number"]; ?></td>  
                               <td><?php echo $row["time_slot_id"]; ?></td> 
                               <td><?php echo $row["ta_id"]; ?></td> 
                                
                          </tr>  
                     <?php     
                     $i++;   
                     }  

                     ?>
                     </table>
                     <p ><button type="submit" class="btn btn-success" name="save20">DELETE</button></p>
                   </form>

                   <table class = "table table-bordered">

                               <th width="5%">Faculty ID</th> 
                               <th width="5%">Course ID</th>  
                               <th width="25%">Section ID</th>  
                               <th width="35%">Semester</th>  
                               <th width="10%">Year</th>  
                               <th width="10%">Building</th>  
                               <th width="10%">Room Number</th>  
                               <th width="10%">Time Slot ID</th>  
                              <th width="10%">TA Student ID</th>

                      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" align="center">  
                          <tr> 
                              <td><input type="text" style = "color : black;"  id="fname" name="instructor_id_sec" required></td> 
                               <td><input type="text" style = "color : black;"  id="fname" name="11" required></td> 
                               <td><input type="text" style = "color : black;"  id="fname" name="3section" required></td>
                               <td><input type="text" style = "color : black;"  id="fname" name="sec_id_enrolled" required></td>  
                               <td><input type="text" style = "color : black;"  id="lname" name="semester_enrolled" required></td>
                               <td><input type="text" style = "color : black;"  id="lname" name="year_enrolled" required></td>
                               <td><input type="text" style = "color : black;"  id="lname" name="grade_enrolled" required></td>
                               <td><input type="text" style = "color : black;"  id="lname" name="marks_enrolled" ></td>
                               <td><input type="text" style = "color : black;"  id="lname" name="ta_id_sec" ></td>
                               
                                
                          </tr>  
                     </table>  
                     <input type="submit" name="export" value="Add Section" class="btn btn-success" align="center" />  
                </form> 

                </div> 
                <br />









                     <h3 align="center">Students</h3>                 
                <br />  
                 
                <div class="table-responsive" id="employee_table">  
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                     <table class="table table-bordered">  
                          <tr>  
                            <th width="5%"><input type="checkbox" id="checkAl">   Select All</th>
                               <th width="5%">Student ID</th>  
                               <th width="25%">Name</th>  
                               <th width="35%">Password</th>  
                               <th width="10%">Address</th>  
                               <th width="10%">Department</th>  
                               <th width="10%">Contact</th>  
                               <th width="10%">Email</th>  
                               


                          </tr>  
                     <?php  
                     $i=0;
                     while($row = mysqli_fetch_array($student))  
                     {  
                     ?>  
                
                          <tr>   <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row["student_id"]."/".$row["name"]."/".$row["password"]."/".$row["address"]."/".$row["dept_name"]."/".$row["contact"]; ?>"></td>
                               <td><?php echo $row["student_id"]; ?></td>  
                               <td><?php echo $row["name"]; ?></td>  
                               <td><?php echo $row["password"]; ?></td>  
                               <td><?php echo $row["address"]; ?></td>  
                               <td><?php echo $row["dept_name"]; ?></td>  
                               <td><?php echo $row["contact"]; ?></td>  
                               <td><?php echo $row["email"]; ?></td>  
                               
                          </tr>  
                     <?php       
                     $i++; 
                     }  
                     ?>  
                     </table>  
                     <p ><button type="submit" class="btn btn-success" name="save11">DELETE</button></p>
                   </form>

                     

                <table class = "table table-bordered">
                               <th width="5%">Student ID</th>  
                               <th width="25%">Name</th>  
                               <th width="35%">Password</th>  
                               <th width="10%">Address</th>  
                               <th width="10%">Department</th>  
                               <th width="10%">Contact</th>  
                               <th width="10%">Email</th>  
                               <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" align="center">  
                          <tr> 
                               <td><input type="text" style = "color : black;"  id="fname" name="1student" required></td> 
                               <td><input type="text" style = "color : black;"  id="fname" name="2student" required></td>
                               <td><input type="text" style = "color : black;"  id="fname" name="sec_id_enrolled" required></td>  
                               <td><input type="text" style = "color : black;"  id="lname" name="semester_enrolled" required></td>
                               <td><input type="text" style = "color : black;"  id="lname" name="year_enrolled" required></td>
                               <td><input type="text" style = "color : black;"  id="lname" name="grade_enrolled" required></td>
                               <td><input type="text" style = "color : black;"  id="lname" name="email" required></td>
                               
                                
                          </tr> 

                  
                </table><input type="submit" name="export" value="Add Student" class="btn btn-success" align="center" />  
                </form> 

                </div> 
                <br /> 


                     <h3 align="center">Venues</h3>                 
                <br />  
                  
                <div class="table-responsive" id="employee_table"> 
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
                     <table class="table table-bordered">  
                          <tr>  
                            <th width="5%"><input type="checkbox" id="checkAl">   Select All</th>
                               <th width="5%">Building</th>  
                               <th width="25%">Room Number</th>  
                               <th width="35%">Capacity</th>  

                          </tr>  
                     <?php  
                     $i=0;
                     while($row = mysqli_fetch_array($venue))  
                     {  
                     ?>  
                          <tr>  

                            <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row["building"]."/".$row["room_number"]."/".$row["capacity"]; ?>"></td>
                               <td><?php echo $row["building"]; ?></td>  
                               <td><?php echo $row["room_number"]; ?></td>  
                               <td><?php echo $row["capacity"]; ?></td>  
                          </tr>  
                     <?php     
                     $i++;   
                     }  
                     ?>   </table>
                     <p ><button type="submit" class="btn btn-success" name="save10">DELETE</button></p>
                   </form>
                <table class = "table table-bordered">
                               <th width="5%">Building</th>  
                               <th width="25%">Room Number</th>  
                               <th width="35%">Capacity</th>  
                     <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" align="center">  
                          <tr>  
                               <td><input type="text" style = "color : black;"  id="fname" name="1venue" required></td>
                               <td><input type="text" style = "color : black;"  id="fname" name="2" required></td>  
                               <td><input type="text" style = "color : black;"  id="lname" name="3" required></td> 
                          </tr>  
                     </table>  

                  
              
                     <input type="submit" name="export" value="Add Venue" class="btn btn-success" align="center" />  
                </form>  
                </div> 
                <br />










                     <h3 align="center">Time Slot</h3>                 
                <br />  
                  
                <div class="table-responsive" id="employee_table">  
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                     <table class="table table-bordered">  
                          <tr>  
                            <th width="1%"><input type="checkbox" id="checkAl">   Select All</th>
                               <th width="2%">time_slot_id</th>  
                               <th width="2%">day</th>  
                               <th width="2%">start_hr</th>  
                               <th width="2%">start_min</th>  
                               <th width="2%">end_hr</th>  
                               <th width="2%">end_min</th>  

                          </tr>  
                     <?php  
                     $i=0;
                     while($row = mysqli_fetch_array($time_slot))  
                     {  
                     ?>  
                          <tr>  
                             <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row["time_slot_id"]; ?>"></td>
                               <td><?php echo $row["time_slot_id"]; ?></td>  
                               <td><?php echo $row["day"]; ?></td>  
                               <td><?php echo $row["start_hr"]; ?></td>  
                               <td><?php echo $row["start_min"]; ?></td>  
                               <td><?php echo $row["end_hr"]; ?></td>  
                               <td><?php echo $row["end_min"]; ?></td>  
                          </tr>  
                     <?php     
                     $i++;   
                     }  
                     ?>  
                     </table>  
                     <p ><button type="submit" class="btn btn-success" name="save15">DELETE</button></p>
                   </form>
               
                <table class = "table table-bordered">

                               <th width="2%">time_slot_id</th>  
                               <th width="2%">day</th>  
                               <th width="2%">start_hr</th>  
                               <th width="2%">start_min</th>  
                               <th width="2%">end_hr</th>  
                               <th width="2%">end_min</th>  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" align="center">  
                          <tr>  
                               <td><input type="text" style = "color : black;"  id="fname" name="timeslot" required></td> 
                               <td><input type="text" style = "color : black;"  id="fname" name="timeslot1" required></td>
                               <td><input type="text" style = "color : black;"  id="fname" name="sec_id_enrolled" required></td>  
                               <td><input type="text" style = "color : black;"  id="lname" name="semester_enrolled" required></td>
                               <td><input type="text" style = "color : black;"  id="lname" name="year_enrolled" required></td>
                               <td><input type="text" style = "color : black;"  id="lname" name="grade_enrolled" required></td>
                               
                          </tr>  
                     </table>  

                  
              
                     <input type="submit" name="export" value="Add Time Slot" class="btn btn-success" align="center" />  
                </form>  
                 </div>
                <br />















           </div>  
<!--            <script>
$("#checkAl").click(function () {
$('input:checkbox').not(this).prop('checked', this.checked);
});
</script>
 -->      </body>  
 </html>  