<?php
$servername = "localhost";
$username = "id16428828_sriram13p";
$password = "44MFqMCt_IZtlb%}";
$dbname = "id16428828_termpaper";
date_default_timezone_set("Asia/Kolkata");
	$eid=$_POST['eid'];
	$tid=$_POST['tid'];
    
	$date=date("d-m-y");
	$time=date("h:i:s a");

 	$conn = new mysqli($servername, $username, $password, $dbname);
	
	$sql="update ticket set outtime='$time',outdate='$date',wout='$eid' where tokenID='$tid'";

	if ($conn->query($sql) === TRUE) {
 
     echo 'success';	
	} 
	else 
	{
		echo 'Retry Again';
	}


?>