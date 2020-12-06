<?php


    $instructor_ID = $_POST['instructor_ID'];
    $course_ID = $_POST['course_ID'];
    $section_ID = $_POST['section_ID'];
    

    $cars = array("Volvo", "BMW", "Toyota");
    $i = 1;

    // session_start();
    // $user_id = $_SESSION['user_id'];
    $servername = 'localhost';
    $username = 'root';
    $password = "";
    $dbname = "demo_db";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if($conn == false){
        echo "CONN FAILED";
    }

    $sql = "SELECT * FROM `ta_application`";
    $result = mysqli_query($conn, $sql);

    if(mysqli_query($conn, $sql)){
        echo "Entertain Personal Information Change Requests";
    } else{
        echo "Query Failed";
    }

?>

<html>
<head>
    <title>Entertain Personal Information Change Requests</title>
</head>

<body>
    <table>
        <tr>
            
            <th>Student ID</th>
            <!-- 1 is for address, 2 is for contact -->
            <th>Request Type</th> 
            <th>Data</th>
            <th>Process</th>
        </tr>

        <?php 
            while($row = mysqli_fetch_assoc($result)){ ?>
                <tr>
                    <td > <?php echo $row['course_id']; ?> </td>
                    
                    <td>
                    
                        <form id = "accept" action="entertain.php" method = "POST">
                            <input type="submit"  value = "Accept">
                            <input type="hidden" name = "instructor_ID" value = "<?php echo $instructor_id ?>" > 
                            <input type="hidden" name = "course_ID" value = "<?php echo $row['course_id']; ?>" >
                            <input type="hidden" name = "section_ID" value = "<?php echo $row['section_id']; ?>" >

                        </form>

                    </td>
                </tr>  
                  
        <?php } ?>
    </table>
</body>
</html>