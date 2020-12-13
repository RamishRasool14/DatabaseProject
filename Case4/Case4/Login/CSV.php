<?php  
require 'database.php';
$database = new Database();
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
      </head>  
      <body>  
          
      
      <br />
           <div class="container" style="width:900px;">  
                <h2 align="center">Export Mysql Table Data to CSV file</h2>  
                <h3 align="center">Admin</h3>                 
                 
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="5%">admin_id</th>  
                               <th width="25%">name</th>  
                               <th width="35%">password</th>  
                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($admin))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row["admin_id"]; ?></td>  
                               <td><?php echo $row["name"]; ?></td>  
                               <td><?php echo $row["password"]; ?></td>  
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>  

                <form method="post" action="export.php" align="center">  
                     <input type="submit" name="export" value="Export Admin" class="btn btn-success" />  
                </form>  
                <br /> 



                     <h3 align="center">Change Requests</h3>                 
                <br />  
                  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="5%">student_id</th>  
                               <th width="25%">refrence_no</th>  
                               <th width="35%">data</th>  

                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($change_requests))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row["course_id"]; ?></td>  
                               <td><?php echo $row["refrence_no"]; ?></td>  
                               <td><?php echo $row["data"]; ?></td>  
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>
<form method="post" action="export.php" align="center">  
                     <input type="submit" name="export" value="Export Change Requests" class="btn btn-success" />  
                </form>  
                <br />



                     <h3 align="center">Courses</h3>                 
                <br />  
                 
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="5%">course_id</th>  
                               <th width="25%">title</th>  
                               <th width="35%">dept_name</th>  
                               <th width="10%">credits</th>  
                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($course))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row["course_id"]; ?></td>  
                               <td><?php echo $row["title"]; ?></td>  
                               <td><?php echo $row["dept_name"]; ?></td>  
                               <td><?php echo $row["credits"]; ?></td>  
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>
                 <form method="post" action="export.php" align="center">  
                     <input type="submit" name="export" value="Export Courses" class="btn btn-success" />  
                </form>  
                <br />





                     <h3 align="center">Departments</h3>                 
                <br />  
                  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="25%">dept_name</th>  
                               <th width="25%">building</th>  

                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($department))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row["dept_name"]; ?></td>  
                               <td><?php echo $row["building"]; ?></td>  
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>
                <form method="post" action="export.php" align="center">  
                     <input type="submit" name="export" value="Export Departments" class="btn btn-success" />  
                </form>  
                <br />








                     <h3 align="center">Enrolled</h3>                 
                <br />  
                  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="15%">student_id</th>  
                               <th width="15%">course_id</th>  
                               <th width="15%">sec_id</th>  
                               <th width="15%">semester</th>  
                               <th width="15%">year</th>  
                               <th width="5%">grade</th>  
                               <th width="15%">marks</th>  

                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($enrolled))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row["student_id"]; ?></td>  
                               <td><?php echo $row["course_id"]; ?></td>  
                               <td><?php echo $row["sec_id"]; ?></td>  
                               <td><?php echo $row["semester"]; ?></td>  
                               <td><?php echo $row["year"]; ?></td>  
                               <td><?php echo $row["grade"]; ?></td>  
                               <td><?php echo $row["marks"]; ?></td>  
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>
                <form method="post" action="export.php" align="center">  
                     <input type="submit" name="export" value="Export Enrolled" class="btn btn-success" />  
                </form>  
                <br />








                     <h3 align="center">Enrollment Requests</h3>                 
                <br />  
                  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="5%">course_id</th>  
                               <th width="5%">sec_id</th>  
                               <th width="5%">student_id</th>  


                               <th width="25%">time_stamp</th>  

                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($enrollment_requests))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row["course_id"]; ?></td>  
                               <td><?php echo $row["sec_id"]; ?></td>  
                               <td><?php echo $row["student_id"]; ?></td>  
                               <td><?php echo $row["time_stamp"]; ?></td>  
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>
                <form method="post" action="export.php" align="center">  
                     <input type="submit" name="export" value="Export Requests" class="btn btn-success" />  
                </form>  
                <br />








                     <h3 align="center">Evaluation</h3>                 
                <br />  
                  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="5%">faculty_id</th>  
                               <th width="10%">course_id</th>  
                               <th width="10%">student_id</th>  
                               <th width="10%">sec_id</th>  
                               <th width="10%">year</th>  
                               <th width="10%">semester</th>  
                               <th width="10%">delivery</th>  
                               <th width="10%">management</th>  
                               <th width="10%">engagement</th>  
                               <th width="10%">comments</th>  

                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($evaluation))  
                     {  
                     ?> 
                     	
 
                          <tr>  
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
                     }  
                     ?>  
                     </table>  
                </div>
                <form method="post" action="export.php" align="center">  
                     <input type="submit" name="export" value="Export Evaluation" class="btn btn-success" />  
                </form>  
                <br />










                     <h3 align="center">Faculty</h3>                 
                <br />  
                  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  

                               <th width="5%">faculty_id</th>  
                               <th width="25%">name</th>  
                               <th width="35%">password</th>  
                               <th width="10%">address</th>  
                               <th width="10%">dept_name</th>  
                               <th width="10%">salary</th>  
                              

                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($faculty))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row["faculty_id"]; ?></td>  
                               <td><?php echo $row["name"]; ?></td>  
                               <td><?php echo $row["password"]; ?></td>  
                               <td><?php echo $row["address"]; ?></td>  
                               <td><?php echo $row["dept_name"]; ?></td>  
                               <td><?php echo $row["salary"]; ?></td>  
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>
                <form method="post" action="export.php" align="center">  
                     <input type="submit" name="export" value="Export Faculty" class="btn btn-success" />  
                </form>  
                <br />













                     <h3 align="center">Help Desk</h3>                 
                <br />  
                  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  

                               <th width="5%">helpdesk_id</th>  
                               <th width="25%">name</th>  
                               <th width="35%">password</th>  

                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($helpdesk))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row["helpdesk_id"]; ?></td>  
                               <td><?php echo $row["name"]; ?></td>  
                               <td><?php echo $row["password"]; ?></td>  
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>
                <form method="post" action="export.php" align="center">  
                     <input type="submit" name="export" value="Export Help Desk" class="btn btn-success" />  
                </form>  
                <br />











                     <h3 align="center">Lecturers</h3>                 
                <br />  
                  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="5%">faculty_id</th>  
                               <th width="25%">course_id</th>  
                               <th width="35%">sec_id</th>  
                               <th width="10%">semester</th>  
                               <th width="10%">year</th>  

                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($lecturer))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row["faculty_id"]; ?></td>  
                               <td><?php echo $row["course_id"]; ?></td>  
                               <td><?php echo $row["sec_id"]; ?></td>  
                               <td><?php echo $row["semester"]; ?></td>  
                               <td><?php echo $row["year"]; ?></td>  
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>
                <form method="post" action="export.php" align="center">  
                     <input type="submit" name="export" value="Export Lecturers" class="btn btn-success" />  
                </form>  
                <br />











                     <h3 align="center">Pre Reqs</h3>                 
                <br />  
                  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="5%">course_id</th>  
                               <th width="25%">prereq_id</th>  
                              

                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($prereq))  
                     {  
                     ?>  	
                          <tr>  
                               <td><?php echo $row["course_id"]; ?></td>  
                               <td><?php echo $row["prereq_id"]; ?></td>  
                              
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>
                <form method="post" action="export.php" align="center">  
                     <input type="submit" name="export" value="Export Pre Reqs" class="btn btn-success" />  
                </form>  
                <br />








                     <h3 align="center">Sections</h3>                 
                <br />  
                  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="5%">course_id</th>  
                               <th width="25%">sec_id</th>  
                               <th width="35%">semester</th>  
                               <th width="10%">year</th>  
                               <th width="10%">building</th>  
                               <th width="10%">room_number</th>  
                               <th width="10%">time_slot_id</th>  

                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($section))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row["course_id"]; ?></td>  
                               <td><?php echo $row["sec_id"]; ?></td>  
                               <td><?php echo $row["semester"]; ?></td>  
                               <td><?php echo $row["year"]; ?></td>  
                               <td><?php echo $row["building"]; ?></td>  
                               <td><?php echo $row["room_number"]; ?></td>  
                               <td><?php echo $row["time_slot_id"]; ?></td>  
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>
                <form method="post" action="export.php" align="center">  
                     <input type="submit" name="export" value="Export Sections" class="btn btn-success" />  
                </form>  
                <br />









                     <h3 align="center">Students</h3>                 
                <br />  
                 
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="5%">student_id</th>  
                               <th width="25%">name</th>  
                               <th width="35%">password</th>  
                               <th width="10%">address</th>  
                               <th width="10%">dept_name</th>  
                               <th width="10%">contact</th>  

                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($student))  
                     {  
                     ?>  
                
                          <tr>  
                               <td><?php echo $row["student_id"]; ?></td>  
                               <td><?php echo $row["name"]; ?></td>  
                               <td><?php echo $row["password"]; ?></td>  
                               <td><?php echo $row["address"]; ?></td>  
                               <td><?php echo $row["dept_name"]; ?></td>  
                               <td><?php echo $row["contact"]; ?></td>  
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>
                <form method="post" action="export.php" align="center">  
                     <input type="submit" name="export" value="Export Students" class="btn btn-success" />  
                </form>  
                <br /> 









                     <h3 align="center">TA Applications</h3>                 
                <br />  
                  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  

                               <th width="5%">student_id</th>  
                               <th width="25%">course_id</th>  
                               <th width="35%">sec_id</th>  

                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($ta_application))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row["student_id"]; ?></td>  
                               <td><?php echo $row["course_id"]; ?></td>  
                               <td><?php echo $row["sec_id"]; ?></td>  
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>
                <form method="post" action="export.php" align="center">  
                     <input type="submit" name="export" value="Export TA Applications" class="btn btn-success" />  
                </form>  
                <br />






                     <h3 align="center">Venues</h3>                 
                <br />  
                  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="5%">building</th>  
                               <th width="25%">room_number</th>  
                               <th width="35%">capacity</th>  

                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($venue))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row["building"]; ?></td>  
                               <td><?php echo $row["room_number"]; ?></td>  
                               <td><?php echo $row["capacity"]; ?></td>  
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>
                <form method="post" action="export.php" align="center">  
                     <input type="submit" name="export" value="Export Venues" class="btn btn-success" />  
                </form>  
                <br />










                     <h3 align="center">Time Slot</h3>                 
                <br />  
                  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="5%">time_slot_id</th>  
                               <th width="25%">day</th>  
                               <th width="35%">start_hr</th>  
                               <th width="10%">start_min</th>  
                               <th width="10%">end_hr</th>  
                               <th width="10%">end_min</th>  

                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($time_slot))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row["course_id"]; ?></td>  
                               <td><?php echo $row["day"]; ?></td>  
                               <td><?php echo $row["start_hr"]; ?></td>  
                               <td><?php echo $row["credits"]; ?></td>  
                               <td><?php echo $row["credits"]; ?></td>  
                               <td><?php echo $row["credits"]; ?></td>  
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>
                <form method="post" action="export.php" align="center">  
                     <input type="submit" name="export" value="Export Time Slot" class="btn btn-success" />  
                </form>  
                <br />















           </div>  
      </body>  
 </html>  