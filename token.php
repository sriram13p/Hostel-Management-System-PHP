<?php
	$servername = "localhost";
	$username = "root";
    $password = "";
    $dbname = "termpaper";

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