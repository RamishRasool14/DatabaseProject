<?php
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

    $sql = "SELECT name, student_id, password, contact, address, dept_name, email
            FROM `student`
            WHERE student_id = $user_id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html><head>
   <meta charset="utf-8">
	<title>Student Informatuon</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css">
   <link rel="stylesheet" href="css/magnific-popup.css">
	<script src="js/modernizr.js"></script>
	<link rel="shortcut icon" href="favicon.png" >
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
   <header id="home"><nav id="nav-wrap">

      <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
      <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

      <ul id="nav" class="nav">
         <li><a class="smoothscroll" href="#about">About</a></li>
      </ul> <!-- end #nav -->

   </nav> <!-- end #nav-wrap -->

      <div class="row banner">
         <div class="banner-text">
            <h1 class="responsive-headline"><?php echo $row['name'];?></h1>
            <h3>Undergrad <?php echo $row['dept_name']; ?> Student at <span>LUMS</span><hr />
         </div>
      </div></header>
   <section id="about">

      <div class="row">

         <div class="three columns">

            <img class="profile-pic"  src="images/profilepic.jpg" alt="" />

         </div>

         <div class="nine columns main-col">
            <div class="row">

               <div class="columns contact-details">

                  <h2>Personal Information</h2>
                  <p class="address">
						   <span><?php echo $row['name'];?></span><br>
						   <span><?php echo $row['address'];?><br>
                     </span><br>
						   <span><?php echo $row['contact'];?></span><br>
                     <span><?php echo $row['email'];?></span>
                  </p>
               </div>
            </div>
         </div>
      </div>
     

</body>
<div>
 <ul class="pager">
    <li ><a style = "color: black;" href="/actors/student.html">Home</a></li>
  </ul>
</div>
</html>
