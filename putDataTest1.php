<?php
$servername = "localhost";
$username = "id16428828_sriram13p";
$password = "44MFqMCt_IZtlb%}";
$dbname = "id16428828_termpaper";

	$eid=$_POST['eid'];
	$tid=$_POST['tid'];
date_default_timezone_set("Asia/Kolkata");
$date=date("d-m-y");
	$time=date("h:i:s a");
	$status="Completed";

 	$conn = new mysqli($servername, $username, $password, $dbname);
	
	$sql="update ticket set intime='$time',indate='$date',win='$eid',status='$status' where tokenID='$tid'";

	if ($conn->query($sql) === TRUE) {
 
     echo 'success';	
	} 
	else 
	{
		echo 'Retry Again';
	}


?>