<?php
class Database {
	private $host = "localhost";
	private $user = 'id15668406_hammadjamal';
	private $password = 's9W^-~a+PlrO]]?j';
	private $database =  'id15668406_project';

  private $result = array();
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
