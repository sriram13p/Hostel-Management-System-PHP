<?php

$id = $_REQUEST['username'];
$pass=$_REQUEST['password'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "termpaper";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM student where studentID='$id' and Password='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "success";
  }
} else {
  echo "Invalid Credentials";
}
$conn->close();
?>