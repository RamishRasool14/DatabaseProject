<?php  
require 'database.php';
$database = new Database();
session_start();
$user = $_SESSION["user_id"];
// echo $user;

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

if(isset($_POST['save1000'])){
  $y = null;
  $checkbox = $_POST['check'];
  for($i=0;$i<count($checkbox);$i++){
  $del_id = $checkbox[$i]; 
  $split = explode("/",$del_id);
  // echo $split[0];
  $result11 = $database->runQuery("SELECT prereq_id FROM prereq WHERE course_id = '$split[0]'");
  while($row = mysqli_fetch_array($result11))  
  {
  $y = $row["prereq_id"];}
  if(is_null($y))
  {
    $sql = "INSERT INTO `enrollment_requests`(`course_id`, `sec_id`, `student_id`) VALUES ('$split[0]','$split[1]','$split[2]')";
    if ($conn->query($sql) === TRUE) {
  echo "Requst added successfully";
} else {
  echo "Error: "."<br>" . $conn->error;
  }
}
  else
  {    
    // echo "string";
    $result = $database->runQuery("SELECT student_id,course_id FROM `enrolled` WHERE student_id = '$split[2]' AND course_id = '$y'");
    // echo print_r($result);
    list($total) = mysqli_fetch_array($result);
    // echo "->".$total;
    if($total == 0)
    {

    echo "Cannot Enroll in course. Pre requisties have not been met";

    }
    else
    {
      // echo "string";
      // echo print_r($split);

    $sql = "INSERT INTO `enrollment_requests`(`course_id`, `sec_id`, `student_id`) VALUES ('$split[0]','$split[1]','$split[2]')";
    if ($conn->query($sql) === TRUE) {
  echo "Request added successfully";
} else {
  $a = 'Duplicate';
  $error = "Error: ".$conn->error;
  $res = strpos($a, $error);
  // echo $str_contains($error, $a);

if ($conn->query($sql) === TRUE) {
  echo "Requst added successfully";
} else {
  echo "Error: "."<br>" . $conn->error;
  }
}

  }

    }
}
}


$evaluation= $database->runQuery("SELECT * FROM

(

SELECT new.instructor,new.faculty_id,new.course_id,new.title,new.dept_name,new.credits,new.sec_id,new.semester,new.year,new.time_slot_id,new.day,new.start_hr,new.start_min,new.end_hr,new.end_min, evaluation.avd, evaluation.avm, evaluation.ave
FROM(
SELECT q.instructor,q.faculty_id,q.course_id,q.title,q.dept_name,q.credits,q.sec_id,q.semester,q.year,time_slot.time_slot_id,time_slot.day,time_slot.start_hr,time_slot.start_min,time_slot.end_hr,time_slot.end_min FROM (

SELECT t.name as instructor, t.faculty_id,t.course_id,course.title,course.dept_name,course.credits,t.sec_id,t.semester,t.year,t.time_slot_id FROM course INNER JOIN( 

SELECT faculty.name,faculty.faculty_id,f.course_id,f.sec_id,f.semester,f.year,f.time_slot_id FROM faculty INNER JOIN ( 

SELECT s.faculty_id, s.course_id, s.sec_id, s.semester,s.year,s.time_slot_id FROM section as s WHERE s.semester = 'Spring' AND s.year = 2020 

) as f ON f.faculty_id = faculty.faculty_id

 ) as t ON t.course_id = course.course_id

 ) as q INNER JOIN time_slot ON q.time_slot_id = time_slot.time_slot_id

 ) as new
LEFT JOIN (SELECT course_id,faculty_id, AVG(delivery) as avd,AVG(management) as avm,AVG(engagement) as ave FROM evaluation GROUP BY(course_id)) as evaluation
ON new.faculty_id = evaluation.faculty_id AND new.course_id = evaluation.course_id

)as final


WHERE (final.faculty_id, final.course_id,final.sec_id) NOT IN
(
SELECT faculty_id,course_id,sec_id
FROM enrollment_requests
)");

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
}

h3{
  font-size:2em; 
  font-weight:bold ;
  line-height:1em;
  text-align: center;
  color: white;
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

.container {
	  text-align: left;
	  overflow: hidden;
	  width: 80%;
	  margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
}

.container td, .container th {
	  padding-bottom: 2%;
	  padding-top: 2%;
  padding-left:2%;  
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
	  background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
	  background-color: #2C3446;
}

.container th {
	  background-color: #1F2739;
}

.container td:first-child { color: #FB667A; }

.container tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
	   -moz-box-shadow: 0 6px 6px -6px #0E1119;
	        box-shadow: 0 6px 6px -6px #0E1119;
}

.container td:hover {
  background-color: #FFF842;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
	  transition-duration: 0.4s;
	  transition-property: all;
  transition-timing-function: line;
}

@media (max-width: 800px) {
.container td:nth-child(4),
.container th:nth-child(4) { display: none; }
}
           </style>
      </head>  
      <body>  
          
      
      <br />
                     <h3 align="center">Enrollment</h3>                 
                <br />  
                  
                <div class="table-responsive" id="employee_table">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">  
                     <table class="table table-bordered">  
                          <tr>  
                            <th width="5%"></th>
                               <th width="5%">Instructor</th>  
                               <th width="10%">Course ID</th>  
                               <th width="10%">Course</th>  
                               <th width="10%">Department</th>  
                               <th width="10%">Credits</th>  
                               <th width="10%">Section</th> 
                               <th width="10%">Timing</th> 
                               <th width="10%">Delivery</th>  
                               <th width="10%">Management</th>  
                               <th width="10%">Engagement</th>    

                          </tr>  
                     <?php  
                     $i=0;
                     while($row = mysqli_fetch_array($evaluation))  
                     {  
                     ?>                     	
 
                          <tr>  
                             <td><input type="checkbox" id="checkAl" name="check[]" value="<?php echo $row["course_id"]."/".$row["sec_id"]."/".$_SESSION["user_id"]; ?>"></td>

                               <td><?php echo $row["instructor"]; ?></td>  
                               <td><?php echo $row["course_id"]; ?></td>  
                               <td><?php echo $row["title"]; ?></td>  
                               <td><?php echo $row["dept_name"]; ?></td>  
                               <td><?php echo $row["credits"]; ?></td>  
                               <td><?php echo $row["sec_id"]; ?></td>  
                               <td><?php echo $row["day"]." ".$row["start_hr"].":".$row["start_min"]."-".$row["end_hr"].":".$row["end_min"]; ?></td>  
                               <td><?php echo $row["avd"]; ?></td>  
                               <td><?php echo $row["avm"]; ?></td>  
                               <td><?php echo $row["ave"]; ?></td>  
                               
                          </tr>  
                     <?php   
                     $i++;     
                     }  
                     ?>  </table>
                     <p ><button  type="submit" class="btn btn-success" name="save1000">Enroll</button></p>
                   </form> 
                </div>
                <br />
           </div> 
           <form>
            <A HREF="javascript:javascript:history.go(-1)">Back</A>
</form>
    </body>  
 </html>  