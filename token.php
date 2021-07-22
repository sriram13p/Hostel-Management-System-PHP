<?php
	$servername = "localhost";
$username = "id16428828_sriram13p";
$password = "44MFqMCt_IZtlb%}";
$dbname = "id16428828_termpaper";

 	$conn = new mysqli($servername, $username, $password, $dbname);
	$id=$_POST['id'];

	$status="active";
	

	$sql = "SELECT * FROM ticket where studentID='$id' and status='$status'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) 
	{
	echo 'success';	 
	}

?>