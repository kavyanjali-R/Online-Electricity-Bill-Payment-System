<?php error_reporting(E_ERROR | E_WARNING | E_PARSE);

$x=$_POST['Bill_id'];

$y=$_POST['unit_consumed'];
$z=$_POST['bill_read_date'];
$c=$_POST['bill_expire_date'];
$servername="localhost";
$username="root";
$password="";
$dbname="db2";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{die("connection failed:".$conn->connect_error);



}
if(isset($_POST['a']) && $y<150)
{
	$d=$_POST['unit_consumed'];
	$mul=$d*5;
}
else if(isset($_POST['a'])){
	$d=$_POST['unit_consumed'];
	$mul=($y-150)*10+(150*5);
	echo "UNITS CONSUMED IS GREATER THAN 150....!!";
}
$sql="INSERT INTO bill_gen VALUES ('$x','$y','$z','$c','$mul')";



if($conn->query($sql)===TRUE)
{
echo "";
}
else
{
echo "error:".$sql."<br>".$conn->error;
}


$conn->close();


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style >
	body{
		background-image: url("1.jpg");
		background-repeat: no-repeat;
		background-size: cover;
	}
</style>
<body><center><h2>Bill Generated</h2><br><br><br><br>
	<button type="button"  onclick="location.href='frontsheet.html'">HomePage</button></center>

</body>
</html>