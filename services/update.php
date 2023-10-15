<?php  
error_reporting(E_ALL);
ini_set('display_errors', 1);

if($_SERVER["REQUEST_METHOD"] === "POST") {
  require_once($_SERVER["DOCUMENT_ROOT"] . "../connection/database.php");

  extract($_POST);
  $hash = password_hash($password, PASSWORD_DEFAULT);
  $imagen = $_FILES["imagen"]["name"];
  $finalImage = str_replace(" ", "", $imagen);
  $tmp_name = $_FILES["imagen"]["tmp_name"];
  $type = $_FILES["imagen"]["type"];
 
  $route_db = "/public/$finalImage";
  $route = $_SERVER["DOCUMENT_ROOT"] . $route_db;

  $oldEmail = $_POST["mail"];
  
  if (isset($_POST['password']) && !empty($_POST['password']) ) {
    // Hash the new password
    $newPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    // Update the password in the database
    $response = $mysqli->query("UPDATE usuarios SET email = '$mail', contraseña = '$newPassword', photo = '$finalImage', name = '$name', bio = '$bio', phone = '$phone' WHERE id = $id");
} else {
    // If no new password is provided, update other user information without changing the password
    $response = $mysqli->query("UPDATE usuarios SET photo = '$finalImage', name = '$name', bio = '$bio', phone = '$phone' WHERE id = $id");
}
// Redirect to home.php
header("Location: ../views/home.php");


  // If there is img, update this
if (move_uploaded_file($tmp_name, $route) == true) {
  
try {
  

  $response = $mysqli->query("UPDATE usuarios SET email = '$mail', contraseña ='$hash', photo='$finalImage' ,name='$name', bio='$bio', phone='$phone' WHERE id = $id");
  header("Location: ../views/home.php");
} catch (mysqli_sql_exception $e) {
  
  echo "error message";
}

} // Update this if no img is provided
else {
   $response = $mysqli->query("UPDATE usuarios SET email = '$mail', contraseña ='$hash' ,name='$name', bio='$bio', phone='$phone' WHERE id = $id");
  header("Location: ../views/home.php");
}



}
?>