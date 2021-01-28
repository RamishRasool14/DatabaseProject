<?php
    $courseID = $_GET["courseID"];

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

    $sql = "SELECT faculty_id,course_id, semester, year, AVG(delivery) as delivery, AVG(management) as management, AVG(engagement) as engagement
            FROM `evaluation`
            WHERE faculty_id = $user_id AND course_id = '$courseID'
            GROUP BY faculty_id, course_id, sec_id, semester, year
            ORDER BY year";
    $result = mysqli_query($conn, $sql);
?>
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
      google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Semester');
        data.addColumn('number', 'Management');
        data.addColumn('number', 'Engagement');
        data.addColumn('number', 'Delivery');

        data.addRows([
        <?php
            $x = "_";
            while($row = mysqli_fetch_assoc($result)){ 
        ?>
        ['<?php echo $row['semester']; echo $x; echo $row['year'];   ?>', <?php echo $row['management']; ?>, <?php echo $row['engagement']; ?>, <?php echo $row['delivery']; ?>],
        <?php
            }
        ?>
        ]);

        var options = {
        chart: {
            title: 'Evaluations results of <?php echo $courseID; ?> over the years',
            subtitle: 'out of 10'
        },
        width: 900,
        height: 500,
        axes: {
            x: {
            0: {side: 'top'}
            }
        }
        };

        var chart = new google.charts.Line(document.getElementById('line_top_x'));

        chart.draw(data, google.charts.Line.convertOptions(options));
    }
  </script>
</head>
<body>
  <div id="line_top_x" style="margin: 150px auto; width: 900px; height: 500px;"></div>
</body>
</html>