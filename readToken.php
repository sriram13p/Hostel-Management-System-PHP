<?php
	$servername = "localhost";
	$username = "root";
    $password = "";
    $dbname = "termpaper";

 	$conn = new mysqli($servername, $username, $password, $dbname);
	$id=$_REQUEST['id'];
	$status="active";
	

	$sql = "SELECT tokenID,parentApproval,wardenApproval FROM ticket where studentID='$id' and status='$status'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) 
	{
	while($row = $result->fetch_assoc())
    {
		
        echo $row["tokenID"].";".$row["parentApproval"].";".$row["wardenApproval"];
      
      
	
         
    }
	}

?>