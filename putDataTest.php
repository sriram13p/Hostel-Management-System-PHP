<?php
	$servername = "localhost";
	$username = "root";
    $password = "";
    $dbname = "termpaper";

	$eid=$_POST['eid'];
	$tid=$_POST['tid'];
	$d=mktime(11, 14, 54, 8, 12, 2014);
	$date=date("d-m-Y h:i:sa", $d);

 	$conn = new mysqli($servername, $username, $password, $dbname);
	
	$sql="update ticket set outtime='$date',wout='$eid' where tokenID='$tid'";

	if ($conn->query($sql) === TRUE) {
 
     echo 'success';	
	} 
	else 
	{
		echo 'Retry Again';
	}


?>