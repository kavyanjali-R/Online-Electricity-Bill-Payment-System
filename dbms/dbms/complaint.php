<?php
$x=$_POST['Bill_id'];

$z=$_POST['comp'];

$servername="localhost";
$username="root";
$password="";
$dbname="db2";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{die("connection failed:".$conn->connect_error);


}




$sql ="INSERT INTO complaint(Bill_id,Complaint_status) VALUES('$x','$z')";
if($conn->query($sql)===TRUE)
{
echo "Complaint Submitted";
}
else
{
echo "error:".$sql."<br>".$conn->error;
}



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
	body{
		background-image: url("1.jpg");
		background-size: cover;
		background-repeat: no-repeat;
		
	}
</style>
<body>
	<center><button type="button " name="b" onclick="location.href='frontsheet.html'" value="pay" style="height: 50px;width: 90px">Homepage</button>
</center>
</body>
</html>

