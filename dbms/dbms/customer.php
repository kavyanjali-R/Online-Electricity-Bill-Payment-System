<?php error_reporting( E_WARNING | E_PARSE);
$x=$_POST['Bill_id'];

$servername="localhost";
$username="root";
$password="";
$dbname="db2";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{die("connection failed:".$conn->connect_error);


}


$r="SELECT * from bill_gen WHERE Bill_id='$x'";
$u=$conn->query($r);

print "<table border=3 align='center'> <tr>
        <th>bill_id</th>
        <th>Units consumed</th>
        <th>bill read date</th>
        <th>bill expire date</th>
        <th>total_amt</th>
       
</tr>";

while($a=(mysqli_fetch_row($u)))
{
   print"<tr> <td>$a[0]</td>
               <td>$a[1]</td>
               <td>$a[2]</td>
               <td>$a[3]</td>
               <td>$a[4]</td>
               
               
</tr>";
}
print "</table>";
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
    background-repeat:no-repeat;
  }
</style>
<body><center><br>
<button type="button" name="pay" onclick="location.href='pay.html'" value="payment">Payment</button><br>
</center></body>
</html>
