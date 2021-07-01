<?php
	$servername = "localhost";
	$username = "root";
    $password = "";
    $dbname = "termpaper";

 	$conn = new mysqli($servername, $username, $password, $dbname);

	$expectedout=$_POST['expectedout'];
	$expectedin=$_POST['expectedin'];
	$reason=$_POST['reason'];
	$studentID=$_POST['studentID'];
	$status="active";
	$zero="0";

	

	$sql = "INSERT INTO ticket(studentID, expout, expin,reason,parentApproval, wardenApproval, status) VALUES ('$studentID','$expectedout','$expectedin','$reason','$zero','$zero','$status')";
	if ($conn->query($sql) === TRUE) {
 
     echo 'success';	
	} 
	else 
	{
		echo 'Retry Again';
	}


?>