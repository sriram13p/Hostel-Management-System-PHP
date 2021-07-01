<?php
	$servername = "localhost";
	$username = "root";
    $password = "";
    $dbname = "termpaper";

 	$conn = new mysqli($servername, $username, $password, $dbname);
	
	$status="active";
	

	$sql = "SELECT student.studentID,ticket.expout,ticket.expin,student.FatherNumber,ticket.tokenID,ticket.reason FROM student,ticket WHERE student.studentID=ticket.studentID and ticket.parentApproval='1' and ticket.status='active'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) 
	{
	while($row = $result->fetch_assoc())
    {
		
        echo $row["student.studentID"].";".$row["ticket.reason"].";".$row["ticket.expout"].";".$row["ticket.expin"].";".$row["ticket.tokenID"].";".$row["ticket.tokenID"].";".$row["student.FatherNumber"]."/";
      
    }
	}
	else
	{
		echo "No Record Found; ; ; ; ; ;";
	}

?>