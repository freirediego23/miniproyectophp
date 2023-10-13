<?php  
error_reporting(E_ALL);
ini_set('display_errors', 1);
if($_SERVER["REQUEST_METHOD"] === "POST") {
  require_once($_SERVER["DOCUMENT_ROOT"] . "../connection/database.php");

  extract($_POST);
 
  $imagen = $_FILES["imagen"]["name"];
  $finalImage = str_replace(" ", "", $imagen);
  $tmp_name = $_FILES["imagen"]["tmp_name"];
  $type = $_FILES["imagen"]["type"];
  //$folder = "../public/";
  //$route = $folder . $finalImage;
  $route_db = "/public/$finalImage";
  $route = $_SERVER["DOCUMENT_ROOT"] . $route_db;

  //$imageData = file_get_contents($imagen);
  // if(!$finalImage){
  //   header("Location: ../views/home.php");
  //  } else {
  //   header("Location: ../views/home.php");
  //  }
  //var_dump($route);
if (move_uploaded_file($tmp_name, $route) == true) {
  
  

try {
  $response = $mysqli->query("UPDATE usuarios SET email = '$mail', contraseña ='$password', photo='$finalImage' ,name='$name', bio='$bio', phone='$phone' WHERE id = $id");
  header("Location: ../views/home.php");
} catch (mysqli_sql_exception $e) {
  
  echo "error message";
}

} 
else {
   $response = $mysqli->query("UPDATE usuarios SET email = '$mail', contraseña ='$password' ,name='$name', bio='$bio', phone='$phone' WHERE id = $id");
  header("Location: ../views/home.php");
}



}
?>