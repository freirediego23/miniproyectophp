<?php 
if($_SERVER["REQUEST_METHOD"] === "POST") {
  require_once($_SERVER["DOCUMENT_ROOT"] . "../connection/database.php");

  extract($_POST);
try {

  

  if (isset($usuario, $password) && $usuario !== "" && $password !== "") {
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $response = $mysqli->query("INSERT INTO usuarios(email, contraseña) values('$usuario', '$hash');");
    header("Location: ../index.php");
  }

  

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