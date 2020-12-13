<?php 
class Database {
	private $host = "localhost";
	private $user = "hammad";
	private $password = "Hammad@786";
	private $database = "Database";
  
  private $result = array();
	function runQuery($sql) {
		$conn = new mysqli($this->host,$this->user,$this->password,$this->database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
      while($row = mysqli_fetch_assoc($result)) {
          // echo $row['name'];
          $resultset[] = $row;
      }
    }
    $conn->close();
    

		return $resultset;
	}
}
?>
