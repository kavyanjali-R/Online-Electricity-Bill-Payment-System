<?php error_reporting(E_ERROR | E_WARNING | E_PARSE);
$x=$_POST['admin Name'];
$y=$POST['password'];
$servername="localhost";
$username="root";
$password="";
$dbname="db2";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{die("connection failed:".$conn->connect_error);


}
$r="SELECT * from users";
$u=$conn->query($r);

print "<table border=5 align='center'> <tr>
        <th>Bill_id</th>
        <th>Name</th>
        
        <th>Phone_no</th>
        <th>Address</th>
        
        
</tr>";

while($a=(mysqli_fetch_row($u)))
{
   print"<tr> <td>$a[0]</td>
               <td>$a[1]</td>
               <td>$a[2]</td>
               <td>$a[3]</td>
               

               
</tr>";
}
print "</table>";

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<style>
  body
{background-image: url("1.jpg");
background-size: cover;
background-repeat: no-repeat;

}
</style><body><form action="viewpaid.php" action="get">
<br><br><br>

<center>
<button type="button" name="billgen" onclick="location.href='bill_generation.html'" value="Generatebill">Generate Bill</button>
<button type="button" name="billgen" onclick="location.href='viewpaid.php'" value="Generatebill">View Paid</button>


</center>
</form>

</body>
</html><br>
<?php

  $r="SELECT * from complaint";
$u=$conn->query($r);

print "<table border=5 align='center'> <tr>
        <th>Bill_id</th>
        <th>Complaint_id</th>
        <th>Complaint_status</th>
        
        
        
</tr>";

while($a=(mysqli_fetch_row($u)))
{
   print"<tr> <td>$a[0]</td>
               <td>$a[1]</td>
               <td>$a[2]</td>
              

               
</tr>";
}
print "</table>";
$conn->close();
?>



