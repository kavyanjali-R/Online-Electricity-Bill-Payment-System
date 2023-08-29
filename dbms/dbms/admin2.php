
<?php error_reporting(E_ERROR | E_WARNING | E_PARSE);

$servername="localhost";
$username="root";
$pass1="";
$dbname="db2";
$conn=new MYSQLi($servername,$username,$pass1,$dbname);
if($conn->connect_error)
{die("connection failed:".$conn->connect_error);


}
{
$x=$_POST['admin_name'];
$y=$_POST['password'];

$sql="SELECT * FROM admin WHERE admin_name='".$x."' AND password='".$y."' LIMIT 1";
$res=$conn->query($sql);

if($res->num_rows>0)
{
  
header('location:admin6.php');
}else

{
  echo ("INVALID ADMIN NAME OR PASSWORD");
  exit();
}
}
?>