<?php

$id=$_REQUEST["id"];
$sub=$_REQUEST["sub"];
$msg=$_REQUEST["msg"];



$servername = "localhost";
$username = "id16428828_sriram13p";
$password = "44MFqMCt_IZtlb%}";
$dbname = "id16428828_termpaper";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO report(id, subject, content)
VALUES ('$id', '$sub', '$msg')";

if ($conn->query($sql) === TRUE) {
  echo "Recorded Successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>