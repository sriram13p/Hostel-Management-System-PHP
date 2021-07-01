<?php

$tid = $_REQUEST['tid'];
$zero="0";
$status="active";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "termpaper";
$value1='TokenID:';

$value=$tid;


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM ticket where tokenID='$tid' and parentApproval='$zero' and status='$status'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row  onClick="document.location.reload(true)"
  while($row = $result->fetch_assoc()) {
    echo '
	<html>
<head>
    <title>KLHostel</title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />



<style type="text/css">

    body
    {
        background:#f2f2f2;
    }

    .payment
	{
		border:1px solid #f2f2f2;
		height:280px;
        border-radius:20px;
        background:#fff;
	}
   .payment_header
   {
	   background:rgba(255,102,0,1);
	   padding:20px;
       border-radius:20px 20px 0px 0px;
	   
   }
   
   .check
   {
	   margin:0px auto;
	   width:50px;
	   height:50px;
	   border-radius:100%;
	   background:#fff;
	   text-align:center;
   }
   
   .check i
   {
	   vertical-align:middle;
	   line-height:50px;
	   font-size:30px;
   }

    .content 
    {
        text-align:center;
    }

    .content  h1
    {
        font-size:25px;
        padding-top:25px;
    }

    .content a
    {
        width:200px;
        height:35px;
        color:#fff;
        border-radius:30px;
        padding:5px 10px;
        background:rgba(255,102,0,1);
        transition:all ease-in-out 0.3s;
    }

    .content a:hover
    {
        text-decoration:none;
        background:#000;
    }
   
</style
</head>
<body>
<div class="container">
   <div class="row">
      <div class="col-md-6 mx-auto mt-5">
         <div class="payment">
			

            <div class="payment_header">
               <div><center><h5>Hostel Permission Management</h5></center></div>
            </div>



			<div class="container">
            <div class="content">
               <form action="parent1.php" method="post" class="form-group">
					<div class="form-group">
					<br>
					<input type="text" class="form-control" id="tid" name="tid" value='.$value.' placeholder="Token ID" readonly>
					</div>
					<div class="form-group">
					<select class="form-control" id="stat" name="stat">
						<option>--SELECT--</option>
						<option value="1">Approve</option>
						<option value="2">Deny</option>
					</select>
					</div>
					<div class="form-group">
					<button class="form-control">Submits</button>
					</div>
			</form>
            </div>
			</div>
            
         </div>
      </div>
   </div>
</div>
</body>
</html>
	
	';
  }
} else {
  echo '
  <html>
<head>
    <title>KLHostel</title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<style type="text/css">

    body
    {
        background:#f2f2f2;
    }

    .payment
	{
		border:1px solid #f2f2f2;
		height:280px;
        border-radius:20px;
        background:#fff;
	}
   .payment_header
   {
	   background:rgba(255,102,0,1);
	   padding:20px;
       border-radius:20px 20px 0px 0px;
	   
   }
   
   .check
   {
	   margin:0px auto;
	   width:50px;
	   height:50px;
	   border-radius:100%;
	   background:#fff;
	   text-align:center;
   }
   
   .check i
   {
	   vertical-align:middle;
	   line-height:50px;
	   font-size:30px;
   }

    .content 
    {
        text-align:center;
    }

    .content  h1
    {
        font-size:25px;
        padding-top:25px;
    }

    .content a
    {
        width:200px;
        height:35px;
        color:#fff;
        border-radius:30px;
        padding:5px 10px;
        background:rgba(255,102,0,1);
        transition:all ease-in-out 0.3s;
    }

    .content a:hover
    {
        text-decoration:none;
        background:#000;
    }
   
</style
</head>
<body>
<div class="container">
   <div class="row">
      <div class="col-md-6 mx-auto mt-5">
         <div class="payment">


            <div class="payment_header">
               <div class="check"><i class="fa fa-check" aria-hidden="true"></i></div>
            </div>



            <div class="content">
               <h1>Already Responded /Ticket was cancelled.</h1>
               <p></p>
            </div>
            
         </div>
      </div>
   </div>
</div>
</body>
</html>
  
  
  
  ';
}
$conn->close();


?>