<?php

$id = $_REQUEST['username'];


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

$sql = "SELECT * FROM student where studentID='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["studentID"].";".$row["studentName"].";".$row["FatherName"].";".$row["FatherNumber"];
  }
}
$conn->close();
?>