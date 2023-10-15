<?php 
if($_SERVER["REQUEST_METHOD"] === "POST") {
  require_once($_SERVER["DOCUMENT_ROOT"] . "/connection/database.php");

  extract($_POST);
  
  $response = $mysqli->query("SELECT * FROM usuarios WHERE email = '$usuario'");
  //var_dump($response);
  $data = $response->fetch_assoc();
  if($response->num_rows === 1) {
    
   

    if (password_verify($password, $data["contraseña"])) {
      session_start();
      $_SESSION["user"] = $data;
      header("Location: ../views/home.php");
      
  } else {
      header("Location: ../views/loginsite.php?warning=1");
      echo "no hay informacion";
  }
    } 

 

} else {
  echo "You are not using POST method";
  //header("Location: ../views/loginsite.php");
}

?>