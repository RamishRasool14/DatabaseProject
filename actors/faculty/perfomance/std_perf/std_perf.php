<?php
    $course_id = $_GET["courseID"];

$servername = 'localhost';
$username = 'id15668406_hammadjamal';
$password = 's9W^-~a+PlrO]]?j';
$dbname = 'id15668406_project';
session_start();
$user_id = $_SESSION["user_id"];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
    
    die("Connection failed: " . $conn->connect_error);

    } 

    $sql = "SELECT sec_id
            FROM `section`
            WHERE faculty_id = $user_id AND year = 2020 AND semester = 'fall' AND course_id = '$course_id'";

    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);

    $section =  $row['sec_id'];

    $sql = "SELECT COUNT(*) as count FROM `enrolled` WHERE course_id = '$course_id' AND semester = 'fall' AND year = 2020 AND marks >= 0 AND marks < 10";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $a = $row['count'];

    $sql = "SELECT COUNT(*) as count FROM `enrolled` WHERE course_id = '$course_id' AND semester = 'fall' AND year = 2020 AND marks >= 10 AND marks < 20";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $b = $row['count'];

    $sql = "SELECT COUNT(*) as count FROM `enrolled` WHERE course_id = '$course_id' AND semester = 'fall' AND year = 2020 AND marks >= 20 AND marks < 30";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $c = $row['count'];

    $sql ="SELECT COUNT(*) as count FROM `enrolled` WHERE course_id = '$course_id' AND semester = 'fall' AND year = 2020 AND marks >= 30 AND marks <40";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $d = $row['count'];

    $sql = "SELECT COUNT(*) as count FROM `enrolled` WHERE course_id = '$course_id' AND semester = 'fall' AND year = 2020 AND marks >= 40 AND marks < 50";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $e = $row['count'];

    $sql = "SELECT COUNT(*) as count FROM `enrolled` WHERE course_id = '$course_id' AND semester = 'fall' AND year = 2020 AND marks >= 50 AND marks < 60";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $f = $row['count'];

    $sql = "SELECT COUNT(*) as count FROM `enrolled` WHERE course_id = '$course_id' AND semester = 'fall' AND year = 2020 AND marks >= 60 AND marks < 70";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $g = $row['count'];

    $sql = "SELECT COUNT(*) as count FROM `enrolled` WHERE course_id = '$course_id' AND semester = 'fall' AND year = 2020 AND marks >= 70 AND marks < 80";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $h = $row['count'];

    $sql = "SELECT COUNT(*) as count FROM `enrolled` WHERE course_id = '$course_id' AND semester = 'fall' AND year = 2020 AND marks >= 80 AND marks < 90";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $i = $row['count'];

    $sql = "SELECT COUNT(*) as count FROM `enrolled` WHERE course_id = '$course_id' AND semester = 'fall' AND year = 2020 AND marks >= 90 AND marks <+ 100";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $j = $row['count'];

    $sql = "SELECT AVG(marks) as avg FROM `enrolled` WHERE course_id = '$course_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $mean = $row['avg'];

    $sql = "SELECT STDDEV(marks) as std FROM enrolled  WHERE course_id = '$course_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $std = $row['std'];

    $x = "_______";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <style>
      body{
            align-items: center;
            justify-content: center;
            font-family: 'Open Sans',sans-serif;
            min-height: 100vh;
            display: flex;
            background: #f3f1f1;
            background-image: url("photo.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            }
    </style>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Bar graph</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Percentage', '<?php echo $course_id; ?>'],
          ['0-10' ,  <?php echo $a; ?>],
          ['10-20',  <?php echo $b; ?>],
          ['20-30',  <?php echo $c; ?>],
          ['30-40' ,  <?php echo $d; ?>],
          ['40-50',  <?php echo $e; ?>],
          ['50-60' ,  <?php echo $f; ?>],
          ['60-70',  <?php echo $g; ?>],
          ['70-80',  <?php echo $h; ?>],
          ['80-90',  <?php echo $i; ?>],
          ['90-100' ,  <?php echo $j; ?>]
        ]);

        var options = {
          title : 'Mean : <?php echo $mean; ?>  <?php  echo $x; ?>StdDev : <?php echo $std; ?> ',
          vAxis: {title: 'Number of students'},
          hAxis: {title: 'Percentage%'},
          seriesType: 'bars',
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
</head>
<body>
    <div id="chart_div" style="margin: 150px auto; width: 900px; height: 500px;"></div>
</body>
</html>