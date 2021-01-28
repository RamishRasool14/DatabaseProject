<?php

require 'database.php';
$database = new Database();
session_start();
// echo $_SESSION["user_id"];
$users = $_SESSION["user_id"];
$users1 = $_SESSION["user_id"];

// echo $users;

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

$ex = $database->runQuery("SELECT esfc.name,esfc.student_id,esfc.course_id,esfc.faculty_id,esfc.semester,esfc.year, esfc.sec_id, course.title, course.dept_name
FROM
(SELECT faculty.name,secjoinenroll.student_id,secjoinenroll.course_id,secjoinenroll.faculty_id,secjoinenroll.semester,secjoinenroll.YEAR, secjoinenroll.sec_id
FROM 
(SELECT enrolled.student_id,section.course_id,section.faculty_id,section.semester,section.year, section.sec_id
FROM (
SELECT student_id,course_id,sec_id,semester,year FROM `enrolled` WHERE student_id = '$users' AND grade IS NULL
    ) as enrolled
INNER JOIN section
ON section.course_id = enrolled.course_id AND section.sec_id = enrolled.sec_id AND section.semester = enrolled.semester AND section.year = enrolled.year) as secjoinenroll
INNER JOIN faculty
ON faculty.faculty_id = secjoinenroll.faculty_id) as esfc
INNER JOIN course
ON course.course_id = esfc.course_id

WHERE esfc.course_id NOT IN (SELECT course_id FROM evaluation )");



 ?>  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Evaluation Form</title>

    <meta name="author" content="Codeconvey" />
    
    <link rel="stylesheet" href="css/style.css">
    <!--Only for demo purpose - no need to add.-->
    <link rel="stylesheet" href="css/demo.css" />

    <style>


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


body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:white;
  background-color:#1F2739;
}

    </style>
  
</head>
<body>
<section>
  <div class="table-responsive" id="employee_table">
<form method="get" action="evaluation.php"> 
                     <table class="table table-bordered">  
                          <tr>  
                            <th width="5%"></th>
                               <th width="5%">Instructor</th>  
                               <th width="10%">Course ID</th>  
                               <th width="10%">Course</th>  
                               <th width="10%">Semester</th>
                               <th width="10%">Year</th>
                               
                               <th width="10%">Section</th>  

                          </tr>  
                     <?php  
                     // echo print_r($ex);
                     $i=0;
                     while($row = mysqli_fetch_array($ex))  
                     {  
                     ?>                       
 
                          <tr>  
                             <td><input type="radio" id="checkAl" name="check[]" value="<?php echo $row["faculty_id"]."/".$row["course_id"]."/".$users1."/".$row['sec_id']."/".$row['year']."/".$row['semester']; ?>"></td>
 
                               <td><?php echo $row["name"]; ?></td>  
                               <td><?php echo $row["course_id"]; ?></td>  
                               <td><?php echo $row["title"]; ?></td>  
                               <td><?php echo $row["semester"]; ?></td>  
                               <td><?php echo $row["year"]; ?></td>  
                               <td><?php echo $row["sec_id"]?></td> 
                               
                          </tr>  
                     <?php   
                     $i++;     
                     }  
                     ?>  </table>
                </div>
                <br />
           </div>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
       
<label>Delievery</label><br>
  
<span class="star-rating" required>
  <input type="radio" name="rating1" value="1"><i></i>
  <input type="radio" name="rating1" value="2"><i></i>
  <input type="radio" name="rating1" value="3"><i></i>
  <input type="radio" name="rating1" value="4"><i></i>
  <input type="radio" name="rating1" value="5"><i></i>
</span>

  <div class="clear"></div> 
  <hr class="survey-hr">
<label>Management</label><br>
<span class="star-rating">
  <input type="radio" name="rating2" value="1"><i></i>
  <input type="radio" name="rating2" value="2"><i></i>
  <input type="radio" name="rating2" value="3"><i></i>
  <input type="radio" name="rating2" value="4"><i></i>
  <input type="radio" name="rating2" value="5"><i></i>
</span>


  <div class="clear"></div> 
  <hr class="survey-hr">
<label>Engagement</label><br>
<span class="star-rating">
  <input type="radio" name="rating3" value="1"><i></i>
  <input type="radio" name="rating3" value="2"><i></i>
  <input type="radio" name="rating3" value="3"><i></i>
  <input type="radio" name="rating3" value="4"><i></i>
  <input type="radio" name="rating3" value="5"><i></i>
</span>
  <div class="clear"></div> 
  <hr class="survey-hr"> 
<label for="m_3189847521540640526commentText" required>Comments</label><br/><br/>
<textarea cols="75" name="commentText" rows="5" style="100%" required></textarea><br>
<br>
  <div class="clear"></div> 
<input style="background:#43a7d5;color:#fff;padding:12px;border:0" type="submit" value="Submit Your Review">&nbsp;
</form>
                  </div>
           
        </div>
    </div>
    </div>
</section>
     


    <!-- Analytics -->

  </body>
</html>