<?php
  $year = $_GET["year"];
  $semester = $_GET["semester"];
  $facultyID = $_GET["facultyID"];
  $courseID = $_GET["courseID"];
  $secID = $_GET["secID"];
//   echo $year;
//   echo $semester;
//   echo $facultyID;
//   echo $courseID;
//   echo $secID;

  if($year == "0" OR $semester == "0" OR $secID == "0"){
  session_start();
    $_SESSION['facultyID'] = $facultyID;
    $_SESSION['courseID'] = $courseID;
    $_SESSION['secID'] = $secID;
    $_SESSION['year'] = $year;
    $_SESSION['semester'] = $semester;
    header("Location: see_eval2.php");
  }

  $servername = 'localhost';
$username = 'id15668406_hammadjamal';
$password = 's9W^-~a+PlrO]]?j';
$dbname = 'id15668406_project';

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 

  $sql = "SELECT faculty_id, course_id, sec_id, year, semester, AVG(delivery) as delivery, AVG(management) as management, AVG(engagement) as engagement
          FROM `evaluation`
          WHERE faculty_id = $facultyID AND course_id = '$courseID' AND sec_id = $secID AND year = $year AND semester = '$semester'
          GROUP BY faculty_id, course_id, sec_id, year, semester";

  $sql1 = "SELECT name
          FROM faculty
          WHERE faculty_id = $facultyID";
  $result = mysqli_query($conn, $sql);
  $result1 = mysqli_query($conn, $sql1);

  $row = mysqli_fetch_assoc($result);
  $row1 = mysqli_fetch_assoc($result1);

  $delivery = $row['delivery'];
  $management = $row['management'];
  $engagement = $row['engagement'];

?>
<!DOCTYPE html>
<html>
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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Category', 'Score', 'Out of'],
          ['.',  0, 10],
          ['Engagemnt', <?php echo $engagement; ?>, 10],
          ['.',  0, 10],
          ['.',  0, 10],
          ['Delivery',  <?php echo $delivery; ?>, 10],
          ['.',  0, 10],
          ['.',  0, 10],
          ['Management',<?php echo $management; ?>, 10]
        ]);

        var options = {
          title : 'Instructor : <?php echo $row1['name']; echo '_____   '; ?> Course ID : <?php echo $row['course_id'];?>  ',
          vAxis: {title: 'Score'},
          hAxis: {title: 'Category'},
          seriesType: 'bars',
          series: {1: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="margin: 70px auto; width: 900px; height: 500px;"></div>
  </body>
</html>