<?php
	$servername = "localhost";
$username = "id16428828_sriram13p";
$password = "44MFqMCt_IZtlb%}";
$dbname = "id16428828_termpaper";

 	$conn = new mysqli($servername, $username, $password, $dbname);
	$date=$_REQUEST['date'];
	$status="active";
	

	$sql = "SELECT reason,outtime,intime,status,outdate,indate FROM ticket where outdate='$date' order by tokenID desc";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) 
	{
	while($row = $result->fetch_assoc())
    {
		
        echo $row["reason"].";".$row["outdate"]."  |  ".$row["outtime"].";".$row["indate"]."  |  ".$row["intime"].";".$row["status"]."/";
      
    }
	}
	else
	{
		echo "No Record Found; ; ; ";
	}

?>
