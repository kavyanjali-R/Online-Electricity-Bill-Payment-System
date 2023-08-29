<?php error_reporting(E_ERROR | E_WARNING | E_PARSE);

$servername="localhost";
$username="root";
$password="";
$dbname="db2";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{die("connection failed:".$conn->connect_error);



}






$r="SELECT * from USERS where Payment_status='NOTPAID'";
$u=$conn->query($r);

print "<table border=3 align='center'> <tr>
        <th>Bill_id</th>
        <th>Payment_status</th>
        
       
</tr>";

while($a=(mysqli_fetch_row($u)))
{
   print"<tr> <td>$a[0]</td>
               <td>$a[4]</td>
               
               
               
</tr>";
}
print "</table>";
$conn->close();


?>