<?php
mysql_connect("localhost","root","") or die(mysql-error());
mysql_select_db("db2")or die(mysql-error());
$val=$_POST["LOGIN"];
if($val=="LOGIN")
{
 view();
}
function view()
{
$Bill_id=$_POST["Bill_id"];
$Name=$_POST["name"];

$q="insert into users values('$Bill_id','$Name')";
mysql_query($q);
$r="select * from users";
$u=mysql_query($r);

print "<table border=1> <tr>
        <th>Bill_id</th>
        <th>Name</th>
	";

while($a=(mysql_fetch_row($u)))
{
   print "<tr> <td>$a[0]</td>
               <td>$a[1]</td>
		";
}
print "</table>";
}

?>