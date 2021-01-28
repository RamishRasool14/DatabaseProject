<?php 
  $courseID = $_GET["courseID"];
  
$servername = 'localhost';
$username = 'id15668406_hammadjamal';
$password = 's9W^-~a+PlrO]]?j';
$dbname = 'id15668406_project';

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error){
      die("Connection failed: " . $conn->connect_error);
  }
  
  if($courseID == 'Cs202'){
    $x = 'Data Mining'/* 500 */;
    $y = 'Big data Analytics' /* 510 */;
    $z = 'Databases';

    $sql = "SELECT Count(*) as c, grade
            FROM `enrolled` as A 
            WHERE A.course_id = 'Cs202' AND A.student_id IN (select student_id 
                                                             From `enrolled` as B 
                                                             Where B.course_id = 'Cs500' OR B.course_id ='Cs510' OR B.course_id = 'Cs340')
            GROUP BY grade
            ORDER BY grade";
    $result = mysqli_query($conn, $sql);

    $sql1 = "SELECT Count(*) as c, grade
            FROM `enrolled` as A 
            WHERE A.course_id = 'Cs500' AND A.student_id IN (select student_id 
                                                     From `enrolled` as B 
                                                     Where B.course_id = 'Cs202' OR B.course_id ='Cs510' OR B.course_id = 'Cs340')
            GROUP BY grade
            ORDER BY grade";
    $result1 = mysqli_query($conn, $sql1);

    $sql2 = "SELECT Count(*) as c, grade
            FROM `enrolled` as A 
            WHERE A.course_id = 'Cs510' AND A.student_id IN (select student_id 
                                                     From `enrolled` as B 
                                                     Where B.course_id = 'Cs500' OR B.course_id ='Cs202' OR B.course_id = 'Cs340')
            GROUP BY grade
            ORDER BY grade";
    $result2 = mysqli_query($conn, $sql2);

    $sql3 = "SELECT Count(*) as c, grade
            FROM `enrolled` as A 
            WHERE A.course_id = 'Cs340' AND A.student_id IN (select student_id 
                                                     From `enrolled` as B 
                                                     Where B.course_id = 'Cs500' OR B.course_id ='Cs510' OR B.course_id = 'Cs202')
            GROUP BY grade
            ORDER BY grade";
    $result3 = mysqli_query($conn, $sql3);
  }
  if($courseID == 'Cal2'){
    $x = 'Machine learning'/* 520 */;
    $y = 'Computer Vision'/* 430 */;
    $z = 'Deep Learning'/* 530 */;

    $sql = "SELECT Count(*) as c, grade
            FROM `enrolled` as A 
            WHERE A.course_id = 'Cal2' AND A.student_id IN (select student_id 
                                                            From `enrolled` as B 
                                                            Where B.course_id = 'Cs520' OR B.course_id ='Cs430' OR B.course_id = 'Cs530')
            GROUP BY grade
            ORDER BY grade";
    $result = mysqli_query($conn, $sql);

    $sql1 = "SELECT Count(*) as c, grade
            FROM `enrolled` as A 
            WHERE A.course_id = 'Cs520' AND A.student_id IN (select student_id 
                                                     From `enrolled` as B 
                                                     Where B.course_id = 'Cal2' OR B.course_id ='Cs430' OR B.course_id = 'Cs530')
            GROUP BY grade
            ORDER BY grade";
    $result1 = mysqli_query($conn, $sql1);

    $sql2 = "SELECT Count(*) as c, grade
            FROM `enrolled` as A 
            WHERE A.course_id = 'Cs430' AND A.student_id IN (select student_id 
                                                     From `enrolled` as B 
                                                     Where B.course_id = 'Cs520' OR B.course_id ='Cal2' OR B.course_id = 'Cs530')
            GROUP BY grade
            ORDER BY grade";
    $result2 = mysqli_query($conn, $sql2);

    $sql3 = "SELECT Count(*) as c, grade
            FROM `enrolled` as A 
            WHERE A.course_id = 'Cs530' AND A.student_id IN (select student_id 
                                                     From `enrolled` as B 
                                                     Where B.course_id = 'Cs520' OR B.course_id ='Cs430' OR B.course_id = 'Cal2')
            GROUP BY grade
            ORDER BY grade";
    $result3 = mysqli_query($conn, $sql3);
  }
  if($courseID == 'LA1'){
    $x = 'Computer Vision';
    $y = 'Deep learning';
    $z = 'Machine Learning';

    $sql = "SELECT Count(*), grade
            FROM `enrolled` as A 
            WHERE A.course_id = 'LA1' AND A.student_id IN (select student_id 
                                                          From `enrolled` as B 
                                                          Where B.course_id = 'Cs430' OR B.course_id ='Cs530' OR B.course_id = 'Cs520')
            GROUP BY grade
            ORDER BY grade";
    $result = mysqli_query($conn, $sql);

    $sql1 = "SELECT Count(*) as c, grade
            FROM `enrolled` as A 
            WHERE A.course_id = 'Cs520' AND A.student_id IN (select student_id 
                                                     From `enrolled` as B 
                                                     Where B.course_id = 'LA1' OR B.course_id ='Cs430' OR B.course_id = 'Cs530')
            GROUP BY grade
            ORDER BY grade";
    $result1 = mysqli_query($conn, $sql1);

    $sql2 = "SELECT Count(*) as c, grade
            FROM `enrolled` as A 
            WHERE A.course_id = 'Cs430' AND A.student_id IN (select student_id 
                                                     From `enrolled` as B 
                                                     Where B.course_id = 'Cs520' OR B.course_id ='LA1' OR B.course_id = 'Cs530')
            GROUP BY grade
            ORDER BY grade";
    $result2 = mysqli_query($conn, $sql2);

    $sql3 = "SELECT Count(*) as c, grade
            FROM `enrolled` as A 
            WHERE A.course_id = 'Cs530' AND A.student_id IN (select student_id 
                                                     From `enrolled` as B 
                                                     Where B.course_id = 'Cs520' OR B.course_id ='Cs430' OR B.course_id = 'LA1')
            GROUP BY grade
            ORDER BY grade";
    $result3 = mysqli_query($conn, $sql3);
  }
  if($courseID == 'Cs334'){
    $x = 'Data Mining';
    $y = 'Big data Analytics';
    $z = 'Machine Learning';

    $sql = "SELECT Count(*), grade
            FROM `enrolled` as A 
            WHERE A.course_id = 'Cs334' AND A.student_id IN (select student_id 
                                                            From `enrolled` as B 
                                                            Where B.course_id = 'Cs500' OR B.course_id ='Cs510' OR B.course_id = 'Cs520')
            GROUP BY grade
            ORDER BY grade";
    $result = mysqli_query($conn, $sql);

    $sql1 = "SELECT Count(*) as c, grade
            FROM `enrolled` as A 
            WHERE A.course_id = 'Cs500' AND A.student_id IN (select student_id 
                                                     From `enrolled` as B 
                                                     Where B.course_id = 'Cs334' OR B.course_id ='Cs510' OR B.course_id = 'Cs520')
            GROUP BY grade
            ORDER BY grade";
    $result1 = mysqli_query($conn, $sql1);

    $sql2 = "SELECT Count(*) as c, grade
            FROM `enrolled` as A 
            WHERE A.course_id = 'Cs510' AND A.student_id IN (select student_id 
                                                     From `enrolled` as B 
                                                     Where B.course_id = 'Cs500' OR B.course_id ='Cs334' OR B.course_id = 'Cs520')
            GROUP BY grade
            ORDER BY grade";
    $result2 = mysqli_query($conn, $sql2);

    $sql3 = "SELECT Count(*) as c, grade
            FROM `enrolled` as A 
            WHERE A.course_id = 'Cs520' AND A.student_id IN (select student_id 
                                                     From `enrolled` as B 
                                                     Where B.course_id = 'Cs500' OR B.course_id ='Cs510' OR B.course_id = 'Cs334')
            GROUP BY grade
            ORDER BY grade";
    $result3 = mysqli_query($conn, $sql3);
  }
  if($courseID == 'Cs340'){
    $x = 'Data Mining';
    $y = 'Big data Analytics';
    $z = 'Software Engineering';

    $sql = "SELECT Count(*), grade
            FROM `enrolled` as A 
            WHERE A.course_id = 'Cs340' AND A.student_id IN (select student_id 
                                                            From `enrolled` as B 
                                                            Where B.course_id = 'Cs500' OR B.course_id ='Cs510' OR B.course_id = 'Cs350')
            GROUP BY grade
            ORDER BY grade";
    $result = mysqli_query($conn, $sql);

    $sql1 = "SELECT Count(*) as c, grade
    FROM `enrolled` as A 
    WHERE A.course_id = 'Cs500' AND A.student_id IN (select student_id 
                                             From `enrolled` as B 
                                             Where B.course_id = 'Cs340' OR B.course_id ='Cs510' OR B.course_id = 'Cs350')
    GROUP BY grade
    ORDER BY grade";
    $result1 = mysqli_query($conn, $sql1);

    $sql2 = "SELECT Count(*) as c, grade
        FROM `enrolled` as A 
        WHERE A.course_id = 'Cs510' AND A.student_id IN (select student_id 
                                                From `enrolled` as B 
                                                Where B.course_id = 'Cs500' OR B.course_id ='Cs340' OR B.course_id = 'Cs350')
        GROUP BY grade
        ORDER BY grade";
    $result2 = mysqli_query($conn, $sql2);

    $sql3 = "SELECT Count(*) as c, grade
        FROM `enrolled` as A 
        WHERE A.course_id = 'Cs350' AND A.student_id IN (select student_id 
                                                From `enrolled` as B 
                                                Where B.course_id = 'Cs500' OR B.course_id ='Cs510' OR B.course_id = 'Cs340')
        GROUP BY grade
        ORDER BY grade";
    $result3 = mysqli_query($conn, $sql3);
  }
  $grade = array('A', 'A-', 'A+', 'B', 'B-', 'B+');
  $arr1 = array(0, 0, 0, 0, 0, 0);
  while($row = mysqli_fetch_assoc($result)){
    if($row['grade'] == $grade[0]){$arr1[0] = $row['c'];}
    else if($row['grade'] == $grade[1]){$arr1[1] = $row['c'];}
    else if($row['grade'] == $grade[2]){$arr1[2] = $row['c'];}
    else if($row['grade'] == $grade[3]){$arr1[3] = $row['c'];}
    else if($row['grade'] == $grade[4]){$arr1[4] = $row['c'];}
    else if($row['grade'] == $grade[5]){$arr1[5] = $row['c'];}
  }

  $arr2 = array(0, 0, 0, 0, 0, 0);
  while($row = mysqli_fetch_assoc($result1)){
    if($row['grade'] == $grade[0]){$arr[0] = $row['c'];}
    else if($row['grade'] == $grade[1]){$arr2[1] = $row['c'];}
    else if($row['grade'] == $grade[2]){$arr2[2] = $row['c'];}
    else if($row['grade'] == $grade[3]){$arr2[3] = $row['c'];}
    else if($row['grade'] == $grade[4]){$arr2[4] = $row['c'];}
    else if($row['grade'] == $grade[5]){$arr2[5] = $row['c'];}
  }

  $arr3 = array(0, 0, 0, 0, 0, 0);
  while($row = mysqli_fetch_assoc($result2)){
    if($row['grade'] == $grade[0]){$arr3[0] = $row['c'];}
    else if($row['grade'] == $grade[1]){$arr3[1] = $row['c'];}
    else if($row['grade'] == $grade[2]){$arr3[2] = $row['c'];}
    else if($row['grade'] == $grade[3]){$arr3[3] = $row['c'];}
    else if($row['grade'] == $grade[4]){$arr3[4] = $row['c'];}
    else if($row['grade'] == $grade[5]){$arr3[5] = $row['c'];}
  }

  $arr4 = array(0, 0, 0, 0, 0, 0);
  while($row = mysqli_fetch_assoc($result3)){
    if($row['grade'] == $grade[0]){$arr4[0] = $row['c'];}
    else if($row['grade'] == $grade[1]){$arr4[1] = $row['c'];}
    else if($row['grade'] == $grade[2]){$arr4[2] = $row['c'];}
    else if($row['grade'] == $grade[3]){$arr4[3] = $row['c'];}
    else if($row['grade'] == $grade[4]){$arr4[4] = $row['c'];}
    else if($row['grade'] == $grade[5]){$arr4[5] = $row['c'];}
  }
?>
<!DOCTYPE html>
<html lang="en">
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
          ['Grade', '<?php echo $x; ?>', '<?php echo $y; ?>', '<?php echo $z; ?>', '<?php echo $courseID; ?>'],
          <?php
            $i = 0;
            while($i < 6)
            {
          ?>
            ['<?php echo $grade[$i]; ?>',  <?php echo $arr2[$i]; ?>, <?php echo $arr3[$i]; ?>, <?php echo $arr4[$i]; ?>, <?php echo $arr1[$i]; ?>],
          <?php
            $i = $i + 1;
            }
          ?>
          ]);

        var options = {
          title : 'Grade breakdown of students',
          vAxis: {title: 'Number of students'},
          hAxis: {title: 'Grades'},
          seriesType: 'bars',
          series: {3: {type: 'line'}}
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