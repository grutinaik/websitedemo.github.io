<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
	// echo "Success";

	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
	


$sql = "INSERT INTO contact (name, email) VALUES ( '$name' , '$email' )";

$query = mysql_connect($conn , $sql);

if ($query === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}
}

?>