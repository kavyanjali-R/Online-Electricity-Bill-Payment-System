<?php error_reporting(E_ERROR | E_WARNING | E_PARSE);
$a=$_POST['billid'];
$x=$_POST['cardno'];
$y=$_POST['CVVnumber'];
$z=$_POST['password'];
$v=$_POST['amt'];
$c=$_POST['paydate'];


$servername="localhost";
$username="root";
$password="";
$dbname="db2";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{die("connection failed:".$conn->connect_error);


}




$sql ="INSERT into payment VALUES('$a','$x','$y','$z','$v','$c')";
if($conn->query($sql)===TRUE)
{

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
		background-size: cover;
		background-repeat: no-repeat;
	}


</style>
<body>
<center><br><br><br><button type="button " name="b" onclick="location.href='chekmark.html'" value="pay" style="height: 50px;width: 150px" placeholder="update">Pay Bill</button>
	<form method="post" action="payment.php">

    	


</center></body>
</html>

<?php

$Bill_id=$_POST['Bill_id'];
$servername="localhost";
$username="root";
$password="";
$dbname="db2";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)	
{die("connection failed:".$conn->connect_error);


}

$sql="INSERT into adminview VALUES('$a
','PAID')";

if($conn->query($sql)===TRUE)
{

}
else
{
echo "error:".$sql."<br>".$conn->error;
}


	




$conn->close();






 ?>