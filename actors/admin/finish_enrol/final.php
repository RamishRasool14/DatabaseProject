<?php  
    $course_id = $_GET['courseID'];

    $course_id = $_GET['courseID'];

    $servername = 'localhost';
    $username = 'id15668406_hammadjamal';
    $password = 's9W^-~a+PlrO]]?j';
    $dbname = 'id15668406_project';

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
    
    die("Connection failed: " . $conn->connect_error);

    } 

    $sql = "SELECT sec_id
            FROM `enrollment_requests`
            where course_id = '$course_id'
            group by sec_id
            order by sec_id";

    $result = mysqli_query($conn, $sql);

    $arr = array();
    while($row = mysqli_fetch_assoc($result)){
        array_push($arr, $row['sec_id']);
    }

    $i = 0;
    $z = 0;

    while($i < sizeof($arr)){
        $sql = "SELECT *
                FROM `enrollment_requests`
                where course_id = '$course_id' and sec_id = $arr[$i]";
        $result = mysqli_query($conn, $sql);

        while(($row = mysqli_fetch_assoc($result)) and ($z < 40)){
            $sql1 = "INSERT INTO `enrolled` (student_id, course_id, sec_id, semester, year, grade, marks) VALUES
                    ('{$row['student_id']}', '{$row['course_id']}', '{$row['sec_id']}', 'spring', '2020', NULL, NULL)";
            mysqli_query($conn, $sql1);
            $z = $z + 1;
        }
        $z = 0;
        $i = $i + 1;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Successful Enrollment</title>
    <!-- CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />

    <!-- jQuery and JS bundle w/ Popper.js -->
    <style>
      .card {
        background-color: rgba(0, 0, 0, 0.2);
        color: rgb(247, 239, 239);
        font-weight: bold;
      }
    </style>
  </head>
</head>
<body>
    <h1 align = "center" style = "margin: 40px auto; padding: 40px; color: red">Successful Enrollment ! ! !</h1>
    <div class="col-sm">
        <div class="card" style="margin: 40px auto; width: 20rem">
          <div class="card-body">
            <h5 class="card-title">Select another course</h5>
            <p class="card-text"></p>
            <a href="index.php" class="btn btn-secondary"
              >Click to select</a
            >
          </div>
        </div>
      </div>
</body>
</html>