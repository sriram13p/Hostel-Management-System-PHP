<?php
		$servername = "localhost";
$username = "id16428828_sriram13p";
$password = "44MFqMCt_IZtlb%}";
$dbname = "id16428828_termpaper";

 	$conn = new mysqli($servername, $username, $password, $dbname);
	
	$status="active";
	

	$sql = "SELECT student.studentID,ticket.expout,ticket.expin,student.FatherNumber,ticket.tokenID,ticket.reason FROM student,ticket WHERE student.studentID=ticket.studentID and ticket.parentApproval='1' and wardenApproval='0' and ticket.status='active'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) 
	{
	while($row = $result->fetch_assoc())
    {
		
        echo $row["studentID"].";".$row["reason"].";".$row["expout"].";".$row["expin"].";".$row["tokenID"].";".$row["tokenID"].";".$row["FatherNumber"]."/";
      
    }
	}
	else
	{
		echo "No Record Found; ; ; ; ; ; ;";
	}

?>