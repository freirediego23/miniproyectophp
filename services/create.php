<?php 
if($_SERVER["REQUEST_METHOD"] === "POST") {
  require_once($_SERVER["DOCUMENT_ROOT"] . "../connection/database.php");

  extract($_POST);
try {
  $response = $mysqli->query("INSERT INTO usuarios(email, contraseña) values('$usuario', '$password');");
  header("Location: ../index.php");

} catch (mysqli_sql_exception $e) {
  
  if ($mysqli->errno === 1062) {
    echo "This email is already used";
    header("Location: ../index.php?warning=1");
    
  } else {
    echo "Error: " . $e->getMessage();
  }
}


}

?>