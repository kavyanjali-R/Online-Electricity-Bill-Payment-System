<?php
$x=$_POST['username'];
$y=$_POST['address'];
$z=$_POST['phno'];

$servername="localhost";
$username="root";
$password="";
$dbname="db2";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{die("connection failed:".$conn->connect_error);

}
echo "connected successfully"."<br>";

$sql ="INSERT INTO users(Name,Address,Phone_no) VALUES('$x','$y','$z')";


if($conn->query($sql)===TRUE)
{
echo "success";
}
else
{
echo "error:".$sql."<br>".$conn->error;
}


$conn->close();


?>