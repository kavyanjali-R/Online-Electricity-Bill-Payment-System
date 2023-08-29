<?php
$x=$_POST['firstname'];
$y=$_POST['lastname'];
$servername="localhost";
$username="root";
$password="";
$dbname="db2";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{die("connection failed:".$conn->connect_error);


}
echo "connected successfully";
$val=$_POST["LOGIN"];
if($val=="LOGIN")
{
 view();
}
function view()
{
$r="select * from users";
$u=mysql_query($r);

print "<table border=1> <tr>
        <th>name</th>
        <th>add1</th>
        <th>add2</th>
        <th>email</th></tr>";

while($a=(mysql_fetch_row($u)))
{
   print "<tr> <td>$a[0]</td>
               <td>$a[1]</td>
               <td>$a[2]</td>
               <td>$a[3]</td>
               <td>$a[4]</td>
               <td>$a[5]</td>
</tr>";
}
print "</table>";
}

?>