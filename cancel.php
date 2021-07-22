<?php

$tid=$_REQUEST['tid'];

$servername = "localhost";
$username = "id16428828_sriram13p";
$password = "44MFqMCt_IZtlb%}";
$dbname = "id16428828_termpaper";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE ticket SET status='cancelled' WHERE tokenID='$tid'";

if ($conn->query($sql) === TRUE) {
  echo "success";
}

$conn->close();

?>