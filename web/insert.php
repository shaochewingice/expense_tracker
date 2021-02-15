<?php
$con=mysql_connect("db","root","123456");
if (!$con)
	{
	die('Could Not Connect:'.mysql_error());
	}

mysql_select_db("expense_db",$con);
$sql="INSERT INTO record (Category,Price,Date) VALUES ('$_POST[category]','$_POST[price]','$_POST[purdate]')";

if (!mysql_query($sql,$con))
	{
	die('Error:'.mysql_error());
	}
echo "1 record added";

mysql_close($con)
?>
