<?php
try {
  $conn = new PDO('mysql:host=db;port=3306;dbname=expense_db','root','123456');
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql="INSERT INTO record (category,price,date) VALUES ('$_POST[category]','$_POST[price]','$_POST[purdate]')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record added successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
