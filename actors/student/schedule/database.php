<?php 
class Database {
// 	public $host = "localhost:3308";
// 	public $user = "root";
// 	public $password = "";
// 	public $database = "demo_db";
	
	public $host = 'localhost';
    public $user = 'id15668406_hammadjamal';
    public $password = 's9W^-~a+PlrO]]?j';
    public $database = 'id15668406_project';

	public function insertQuery($sql,$arg) {
		$conn = new mysqli($this->host,$this->user,$this->password,$this->database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    if (mysqli_query($conn, $sql)) {
  echo "New ".$arg." created successfully";
	} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
    return $result;
    
	}
  
 //  public $result = array();
	// function runQuery($sql) {
	// 	$conn = new mysqli($this->host,$this->user,$this->password,$this->database);
 //    if ($conn->connect_error) {
 //        die("Connection failed: " . $conn->connect_error);
 //    } 

 //    $result = mysqli_query($conn, $sql);
    
 //    $conn->close();
 //    if($result === True)
 //    {
 //    }
 //    else
 //    {
 //    	echo "her";
 //    	return $mysqli_error($conn);
    	
 //    }

 //    return $result;
    
	// }

	function runQuery($sql) {
		$conn = new mysqli($this->host,$this->user,$this->password,$this->database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $result = mysqli_query($conn, $sql);
    
    $conn->close();

    return $result;
    
	}



}
?>
