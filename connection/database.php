<?php 
try {
  $mysqli = new mysqli("localhost", "root", "", "login_db");
} catch (mysqli_sql_exception $e) {
  echo "Error: " . $e->getMessage();
}

?>