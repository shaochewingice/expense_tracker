<?php
phpinfo();
try {
  $conn = new PDO('mysql:host=db;port=3306;dbname=expense_db','root','123456');
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
