<?php
$servername = 'localhost';
$username = 'id15668406_hammadjamal';
$password = 's9W^-~a+PlrO]]?j';
$dbname = 'id15668406_project';

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
    
    die("Connection failed: " . $conn->connect_error);

    }

    $sql = "SELECT course_id
            FROM `section`
            WHERE faculty_id = 1 AND year = 2020 AND semester = 'fall'";

    $result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Select course</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- DATE-PICKER -->
		<link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<form action = "future_grades.php" method = "get">
					<h3>Select course</h3>
					<div class="form-row last">
						<div class="form-wrapper">
							<label style = "color: red">*</label>
							<select name = "courseID" id="" class="form-control" required>
                                <option value = "0">Select course ID:</option>
                                <option value = 'Cs202'>Cs202</option>
                                <option value = 'Cal2'>Cal2</option>
                                <option value = 'LA1'>LA1</option>
                                <option value = 'Cs334'>Cs334</option> 
                                <option value = 'Cs340'>Cs340</option>      
							</select>
							<i class="zmdi zmdi-chevron-down"></i>
						</div>
					</div>
					<button data-text="See results" type="submit">
						<span>See results</span>
					</button>
				</form>
			</div>
		</div>
		
		<script src="js/jquery-3.3.1.min.js"></script>

		<!-- DATE-PICKER -->
		<script src="vendor/date-picker/js/datepicker.js"></script>
		<script src="vendor/date-picker/js/datepicker.en.js"></script>

		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>