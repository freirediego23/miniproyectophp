<?php  

if($_SERVER["REQUEST_METHOD"] === "POST") {
  require_once($_SERVER["DOCUMENT_ROOT"] . "../connection/database.php");

  extract($_POST);
  

try {
  $response = $mysqli->query("UPDATE usuarios SET email = '$mail', contraseña ='$password', name='$name', bio='$bio', phone='$phone' WHERE id = $id");
  header("Location: ../views/home.php");

} catch (mysqli_sql_exception $e) {
  
  echo "error message";
}


}
?>