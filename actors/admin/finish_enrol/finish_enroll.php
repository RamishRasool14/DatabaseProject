<?php
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

    $sql = "SELECT *
            FROM `enrollment_requests`
            where course_id = '$course_id'
            order by sec_id";

    $result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style> 
    .buttonHolder{ text-align: center; }
    input[type=submit]{
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-align : center;
    text-decoration: none;
    cursor: pointer;
    }
    </style>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment requests</title>
</head>
<body>
<h2 align="center" style = "margin: 60px auto">To Enroll students click on the button below</h2> 
<form method="get" action="final.php" align="center"> 
<div class="buttonHolder">
    <input type="submit" name="courseID" value= <?=$course_id ?> class="btn btn-success" />
</div>
</form>
<div class="container">
	<div class="table">
		<div class="table-header">
			<div class="header__item"><a id="name" class="filter__link" href="#">Course ID</a></div>
			<div class="header__item"><a id="wins" class="filter__link filter__link--number" href="#">Sec ID</a></div>
			<div class="header__item"><a id="draws" class="filter__link filter__link--number" href="#">Student ID</a></div>
		</div>
		<div class="table-content">
            <?php  
                while($row = mysqli_fetch_assoc($result))  
                {  
            ?>	
                <div class="table-row">		
                    <div class="table-data"><?php echo $row["course_id"]; ?></div>
                    <div class="table-data"><?php echo $row["sec_id"]; ?></div>
                    <div class="table-data"><?php echo $row["student_id"]; ?></div>
                </div>
            <?php       
                }  
            ?> 
		</div>	
	</div>
</div>
</body>
</html>