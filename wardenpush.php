<?php

$tid=$_POST['tid'];
$stat=$_POST['stat'];


$servername = "localhost";
$username = "id16428828_sriram13p";
$password = "44MFqMCt_IZtlb%}";
$dbname = "id16428828_termpaper";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE ticket SET wardenApproval='$stat' WHERE tokenID='$tid'";

if ($conn->query($sql) === TRUE) {
  echo "success";
}
else
{
	echo "Try Again";
}

$conn->close();



?>
