<?php 
    session_start();
    $facultyID = $_SESSION['facultyID'];
    $courseID = $_SESSION['courseID'];
    $secID = $_SESSION['secID'];
    $year = $_SESSION['year'];
    $semester = $_SESSION['semester'];

    $servername = 'localhost';
$username = 'id15668406_hammadjamal';
$password = 's9W^-~a+PlrO]]?j';
$dbname = 'id15668406_project';

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if($year == "0" AND $semester == "0" AND $secID == "0"){
        $sql = "SELECT faculty_id, course_id, sec_id, year, semester, AVG(delivery) as delivery, AVG(management) as management, AVG(engagement) as engagement
                FROM `evaluation`
                WHERE faculty_id = $facultyID AND course_id = '$courseID'
                GROUP BY faculty_id, course_id, sec_id, year, semester";
    }

    else if($year == "0" AND $semester == "0"){
        $sql = "SELECT faculty_id, course_id, sec_id, year, semester, AVG(delivery) as delivery, AVG(management) as management, AVG(engagement) as engagement
                FROM `evaluation`
                WHERE faculty_id = $facultyID AND course_id = '$courseID' AND sec_id = $secID
                GROUP BY faculty_id, course_id, sec_id, year, semester";
    }

    else if($semester == "0" AND $secID == "0"){
        $sql = "SELECT faculty_id, course_id, sec_id, year, semester, AVG(delivery) as delivery, AVG(management) as management, AVG(engagement) as engagement
                FROM `evaluation`
                WHERE faculty_id = $facultyID AND course_id = '$courseID' AND year = $year
                GROUP BY faculty_id, course_id, sec_id, year, semester";        
    }
    
    else if($secID == "0" AND $year == "0"){
        $sql = "SELECT faculty_id, course_id, sec_id, year, semester, AVG(delivery) as delivery, AVG(management) as management, AVG(engagement) as engagement
                FROM `evaluation`
                WHERE faculty_id = $facultyID AND course_id = '$courseID' AND semester = '$semester'
                GROUP BY faculty_id, course_id, sec_id, year, semester"; 
    }

    else if($year == "0"){
        $sql = "SELECT faculty_id, course_id, sec_id, year, semester, AVG(delivery) as delivery, AVG(management) as management, AVG(engagement) as engagement
                FROM `evaluation`
                WHERE faculty_id = $facultyID AND course_id = '$courseID' AND semester = '$semester'  AND sec_id = $secID
                GROUP BY faculty_id, course_id, sec_id, year, semester"; 
    }

    else if($secID == "0"){
        $sql = "SELECT faculty_id, course_id, sec_id, year, semester, AVG(delivery) as delivery, AVG(management) as management, AVG(engagement) as engagement
                FROM `evaluation`
                WHERE faculty_id = $facultyID AND course_id = '$courseID' AND semester = '$semester' AND year = $year
                GROUP BY faculty_id, course_id, sec_id, year, semester"; 
    }

    else if($semester == "0"){
        $sql = "SELECT faculty_id, course_id, sec_id, year, semester, AVG(delivery) as delivery, AVG(management) as management, AVG(engagement) as engagement
                FROM `evaluation`
                WHERE faculty_id = $facultyID AND course_id = '$courseID' AND sec_id = $secID AND year = $year
                GROUP BY faculty_id, course_id, sec_id, year, semester"; 
    }
    
    $result = mysqli_query($conn, $sql);
    
    $sql1 = "SELECT name
             FROM faculty
             WHERE faculty_id = $facultyID";

    $result1 = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_assoc($result1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 align = "center" style = "margin: 0px auto; padding: 60px; color: red">Evaluation Results ! ! !</h1>
     <div class='container'>
         <div class='table'>
             <div class='table-header'>
                 <div class='header__item'><a id='wins' class='filter__link filter__link--number'>name</a></div>
                 <div class='header__item'><a id='wins' class='filter__link filter__link--number'>Instructor ID</a></div>
                 <div class='header__item'><a id='wins' class='filter__link filter__link--number'>course ID</a></div>
                 <div class='header__item'><a id='wins' class='filter__link filter__link--number'>sec ID</a></div>
                 <div class='header__item'><a id='wins' class='filter__link filter__link--number'>semester</a></div>
                 <div class='header__item'><a id='wins' class='filter__link filter__link--number'>year</a></div>
                 <div class='header__item'><a id='wins' class='filter__link filter__link--number'>delivery</a></div>
                 <div class='header__item'><a id='wins' class='filter__link filter__link--number'>management</a></div>
                 <div class='header__item'><a id='wins' class='filter__link filter__link--number'>engagement</a></div>
             </div>
             <div class='table-content'>
                <?php  
                    while($row = mysqli_fetch_assoc($result)){  
                ?>
                    <div class='table-row'>
                        <div class='table-data'><?php echo $row1['name'] ?></div>
                        <div class='table-data'><?php echo $row['faculty_id'] ?></div>
                        <div class='table-data'><?php echo $row['course_id'] ?></div>
                        <div class='table-data'><?php echo $row['sec_id'] ?></div>
                        <div class='table-data'><?php echo $row['semester'] ?></div>
                        <div class='table-data'><?php echo $row['year'] ?></div>
                        <div class='table-data'><?php echo $row['delivery'] ?></div>
                        <div class='table-data'><?php echo $row['management'] ?></div>
                        <div class='table-data'><?php echo $row['engagement']?></div>
                    </div>
                <?php
                    }
                ?>
             </div>
        </div>
</body>
</html>