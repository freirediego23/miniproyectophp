<?php 
session_start();

if (!isset($_SESSION["user"])) {
  header("Location: ../index.php");
  var_dump($_SESSION["user"]);
  exit();
}


require_once("../model/usuarios.php");





$user =  $_SESSION["user"];
$id = $user["id"]; // test
$data = getByID($id);


var_dump($data);

extract($data);
//var_dump($data); // test
?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/styles/style.css">
  <title>Document</title>


</head>

<body>



  <h3>Welcome</h3>
  <p><?= $name ?></p>


  <a href="../views/edit.php?id=<?= $id ?>">Editar</a>
  <div class="container">

    <div class="left-column">

      <div class="row">Photo</div>
      <div class="row">Name</div>
      <div class="row">Bio</div>
      <div class="row">Phone</div>
      <div class="row">Email</div>
      <div class="row">Password</div>
    </div>
    <div class="right-column">
      <div class="row"><img src=../public/<?= $photo ?> alt="profile photo"></div>
      <div class="row"><?= $name ?></div>
      <div class="row"><?= $bio ?></div>
      <div class="row"><?= $phone ?></div>
      <div class="row"><?= $email ?></div>

      <div class="row">*********</div>
    </div>
  </div>


  <div>

  </div>


  <p><a href="../services/logout.php">Logout</a></p>
</body>

</html>