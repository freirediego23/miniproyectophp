<?php 
if($_SERVER["REQUEST_METHOD"] === "POST") {
  require_once($_SERVER["DOCUMENT_ROOT"] . "../connection/database.php");

  extract($_POST);
  
  $response = $mysqli->query("SELECT * FROM usuarios WHERE email = '$usuario' AND contraseña = '$password'");
  var_dump($response);
  
  if($response->num_rows === 1) {
    session_start();
    $_SESSION["user"] = $response->fetch_assoc();
    var_dump($_SESSION["user"]);
    header("Location: ../views/home.php");
  } else {
    header("Location: ../views/loginsite.php?warning=1");
    echo "no hay informacion";
  }

echo "THIS IS LOGIN";
} else {
  echo "You are not using POST method";
}

?>