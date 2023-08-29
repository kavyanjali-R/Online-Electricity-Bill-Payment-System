<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<table>
<tr>
<th>Id</th>
<th>Username</th>
<th>Password</th>
</tr>
<?php
$x=$_POST['admin Name'];
$y=$_POST['password'];
$servername="localhost";
$username="root";
$password="";
$dbname="db2";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{die("connection failed:".$conn->connect_error);


}
echo "connected successfully";

$val=$_POST['LOGIN'];
if($val=='LOGIN')
{
 view();
}
function view()
{
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Bill_id"]. "</td><td>" . $row["Name"] ."</td><td>".$row["Address"] ."</td><td>".$row["Phone_no"]."</td><td>".$row["Payment_amt"]."</td><td>".$row["Payment_status"] "</td><td>";

}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>
