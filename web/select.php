<?php
$con=mysql_connect("db","root","123456");
if (!$con)
	{
	die('Could Not Connect:'.mysql_error());
	}

mysql_select_db("expense_db",$con);
$result=mysql_query("SELECT * FROM record");
// check Jan only
// $result=mysql_query("SELECT * FROM record where date like '2021-01-__'");

echo "<table border='1'>
<tr>
<th> Category </th>
<th> Amount </th>
<th> Date </th>
</th>";

while ($row=mysql_fetch_array($result))
	{	
	echo "<tr>";
	echo "<td>" . $row['category'] . "</td>";
	echo "<td>" . $row['price'] . "</td>";
	echo "<td>" . $row['date'] . "</td>";
	echo "</tr>";
	} 
echo "</table>";

mysql_close($con)
?>
