<?php  
require 'database.php';
$database = new Database();
// $id = $_GET['user_id'];
session_start();
$id = $_SESSION["user_id"];
// echo $id;
// $admin= $database->runQuery("SELECT * FROM `admin`");
// $change_requests= $database->runQuery("SELECT * FROM `change_requests`");
// $course = $database->runQuery("SELECT * FROM `course`");

// $department= $database->runQuery("SELECT * FROM `department`");
// $enrolled= $database->runQuery("SELECT * FROM `enrolled`");
// $enrollment_requests= $database->runQuery("SELECT * FROM `enrollment_requests`");
// $evaluation= $database->runQuery("SELECT * FROM `evaluation`");
// $faculty= $database->runQuery("SELECT * FROM `faculty`");
// $helpdesk= $database->runQuery("SELECT * FROM `helpdesk`");
// $lecturer= $database->runQuery("SELECT * FROM `lecturer`");
// $prereq= $database->runQuery("SELECT * FROM `prereq`");
// $section= $database->runQuery("SELECT * FROM `section`");
// $student= $database->runQuery("SELECT * FROM `student`");
// $ta_application= $database->runQuery("SELECT * FROM `ta_application`");

$m = $database->runQuery(

 "SELECT time_slot.time_slot_id, time_slot.day, time_slot.start_hr, time_slot.start_min,time_slot.end_hr,time_slot.end_min,n.title
FROM time_slot
INNER JOIN

    (SELECT distinct(course.title),new.time_slot_id

          FROM course

          INNER JOIN (

          SELECT enrolled.course_id,section.time_slot_id FROM enrolled INNER JOIN section ON enrolled.sec_id=section.sec_id AND enrolled.year=section.year AND enrolled.semester=section.semester AND section.course_id=enrolled.course_id AND section.semester = 'fall' AND section.year = '2020' WHERE enrolled.student_id = $id
          ) AS new

    ON new.course_id = course.course_id ) as n

ON n.time_slot_id = time_slot.time_slot_id WHERE day = 'M'" 


);

$t= $database->runQuery("SELECT time_slot.time_slot_id, time_slot.day, time_slot.start_hr, time_slot.start_min,time_slot.end_hr,time_slot.end_min,n.title
FROM time_slot
INNER JOIN

    (SELECT distinct(course.title),new.time_slot_id

          FROM course

          INNER JOIN (

          SELECT enrolled.course_id,section.time_slot_id FROM enrolled INNER JOIN section ON enrolled.sec_id=section.sec_id AND enrolled.year=section.year AND enrolled.semester=section.semester AND section.course_id=enrolled.course_id AND section.semester = 'fall' AND section.year = '2020' WHERE enrolled.student_id = $id
          ) AS new

    ON new.course_id = course.course_id ) as n

ON n.time_slot_id = time_slot.time_slot_id WHERE day = 'T'");

$w= $database->runQuery("SELECT time_slot.time_slot_id, time_slot.day, time_slot.start_hr, time_slot.start_min,time_slot.end_hr,time_slot.end_min,n.title
FROM time_slot
INNER JOIN

    (SELECT distinct(course.title),new.time_slot_id

          FROM course

          INNER JOIN (

          SELECT enrolled.course_id,section.time_slot_id FROM enrolled INNER JOIN section ON enrolled.sec_id=section.sec_id AND enrolled.year=section.year AND enrolled.semester=section.semester AND section.course_id=enrolled.course_id AND section.semester = 'fall' AND section.year = '2020' WHERE enrolled.student_id = $id
          ) AS new

    ON new.course_id = course.course_id ) as n

ON n.time_slot_id = time_slot.time_slot_id WHERE day = 'W'");
$r= $database->runQuery("SELECT time_slot.time_slot_id, time_slot.day, time_slot.start_hr, time_slot.start_min,time_slot.end_hr,time_slot.end_min,n.title
FROM time_slot
INNER JOIN

    (SELECT distinct(course.title),new.time_slot_id

          FROM course

          INNER JOIN (

          SELECT enrolled.course_id,section.time_slot_id FROM enrolled INNER JOIN section ON enrolled.sec_id=section.sec_id AND enrolled.year=section.year AND enrolled.semester=section.semester AND section.course_id=enrolled.course_id AND section.semester = 'fall' AND section.year = '2020' WHERE enrolled.student_id = $id
          ) AS new

    ON new.course_id = course.course_id ) as n

ON n.time_slot_id = time_slot.time_slot_id WHERE day = 'R'");
$f= $database->runQuery("SELECT time_slot.time_slot_id, time_slot.day, time_slot.start_hr, time_slot.start_min,time_slot.end_hr,time_slot.end_min,n.title
FROM time_slot
INNER JOIN

    (SELECT distinct(course.title),new.time_slot_id

          FROM course

          INNER JOIN (

          SELECT enrolled.course_id,section.time_slot_id FROM enrolled INNER JOIN section ON enrolled.sec_id=section.sec_id AND enrolled.year=section.year AND enrolled.semester=section.semester AND section.course_id=enrolled.course_id AND section.semester = 'fall' AND section.year = '2020' WHERE enrolled.student_id = $id
          ) AS new

    ON new.course_id = course.course_id ) as n

ON n.time_slot_id = time_slot.time_slot_id WHERE day = 'F'");



// while($row = mysqli_fetch_array($result))  
// {
//   print_r($row);
//   echo PHP_EOL;
// }  

// $venue= $database->runQuery("SELECT * FROM `venue`");


 ?>  
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Weekly Schedule</title>
</head>
<body>
  <header class="cd-main-header text-center flex flex-column flex-center">

    <h1 class="text-xl">Weekly Schedule</h1>
  </header>

  <div class="cd-schedule cd-schedule--loading margin-top-lg margin-bottom-lg js-cd-schedule">
    <div class="cd-schedule__timeline">
      <ul>
        <li><span>08:00</span></li>
        <li><span>08:30</span></li>
        <li><span>09:00</span></li>
        <li><span>09:30</span></li>
        <li><span>10:00</span></li>
        <li><span>10:30</span></li>
        <li><span>11:00</span></li>
        <li><span>11:30</span></li>
        <li><span>12:00</span></li>
        <li><span>12:30</span></li>
        <li><span>01:00</span></li>
        <li><span>01:30</span></li>
        <li><span>02:00</span></li>
        <li><span>02:30</span></li>
        <li><span>03:00</span></li>
        <li><span>03:30</span></li>
        <li><span>04:00</span></li>
        <li><span>04:30</span></li>
        <li><span>05:00</span></li>
        <li><span>05:30</span></li>
        <li><span>06:00</span></li>
        <li><span>06:30</span></li>      
        
        
      </ul>
    </div> <!-- .cd-schedule__timeline -->
  
    <div class="cd-schedule__events">
      <ul>
        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>Monday</span></div>
  
          <ul>
             <?php  
                     while($row = mysqli_fetch_array($m))  
                     {  
                     ?> 
            <li class="cd-schedule__event"> 
              <a data-start="<?php echo (strval($row["start_hr"]) . ":" . strval($row["start_min"]))?>" data-end="<?php echo (strval($row["end_hr"]) . ":" . strval($row["end_min"]))?>"  data-content="event-rowing-workout" data-event="event-2" href="#0">
                <em class="cd-schedule__name"><?php echo $row["title"]; ?> </em>
              </a>
            </li>

             <?php       
                     }  
                     ?>  
  
            
          </ul>

        </li>
  
        <li class="cd-schedule__group">
          
          <div class="cd-schedule__top-info"><span>Tuesday</span></div>
  
          <ul>
            <?php  
                     while($row = mysqli_fetch_array($t))  
                     {  
                     ?> 
            <li class="cd-schedule__event"> 
              <a data-start="<?php echo (strval($row["start_hr"]) . ":" . strval($row["start_min"]))?>" data-end="<?php echo (strval($row["end_hr"]) . ":" . strval($row["end_min"]))?>"  data-content="event-rowing-workout" data-event="event-2" href="#0">
                <em class="cd-schedule__name"><?php echo $row["title"]; ?> </em>
              </a>
            </li>

             <?php       
                     }  
                     ?>  
            
          </ul>
        </li>
  
        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>Wednesday</span></div>
  
          <ul>
            <?php  
                     while($row = mysqli_fetch_array($w))  
                     {  
                     ?> 
            <li class="cd-schedule__event"> 
              <a data-start="<?php echo (strval($row["start_hr"]) . ":" . strval($row["start_min"]))?>" data-end="<?php echo (strval($row["end_hr"]) . ":" . strval($row["end_min"]))?>"  data-content="event-rowing-workout" data-event="event-2" href="#0">
                <em class="cd-schedule__name"><?php echo $row["title"]; ?> </em>
              </a>
            </li>

             <?php       
                     }  
                     ?>  
          </ul>
        </li>
  
        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>Thursday</span></div>
  
          <ul>
            <?php  
                     while($row = mysqli_fetch_array($r))  
                     {  
                     ?> 
            <li class="cd-schedule__event"> 
              <a data-start="<?php echo (strval($row["start_hr"]) . ":" . strval($row["start_min"]))?>" data-end="<?php echo (strval($row["end_hr"]) . ":" . strval($row["end_min"]))?>"  data-content="event-rowing-workout" data-event="event-2" href="#0">
                <em class="cd-schedule__name"><?php echo $row["title"]; ?> </em>
              </a>
            </li>

             <?php       
                     }  
                     ?>  
          </ul>
        </li>
  
        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>Friday</span></div>
  
          <ul>
            <?php  
                     while($row = mysqli_fetch_array($f))  
                     {  
                     ?> 
            <li class="cd-schedule__event"> 
              <a data-start="<?php echo (strval($row["start_hr"]) . ":" . strval($row["start_min"]))?>" data-end="<?php echo (strval($row["end_hr"]) . ":" . strval($row["end_min"]))?>"  data-content="event-rowing-workout" data-event="event-2" href="#0">
                <em class="cd-schedule__name"><?php echo $row["title"]; ?> </em>
              </a>
            </li>

             <?php       
                     }  
                     ?>  
          </ul>
        </li>
      </ul>
    </div>
  
    <div class="cd-schedule-modal">
      <header class="cd-schedule-modal__header">
        <div class="cd-schedule-modal__content">
          <span class="cd-schedule-modal__date"></span>
          <h3 class="cd-schedule-modal__name"></h3>
        </div>
  
        <div class="cd-schedule-modal__header-bg"></div>
      </header>
  
      <div class="cd-schedule-modal__body">
        <div class="cd-schedule-modal__event-info"></div>
        <div class="cd-schedule-modal__body-bg"></div>
      </div>
  
      <a href="#0" class="cd-schedule-modal__close text-replace">Close</a>
    </div>
  
    <div class="cd-schedule__cover-layer"></div>
  </div> <!-- .cd-schedule -->

  <script src="assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
  <script src="assets/js/main.js"></script>
</body>
</html>