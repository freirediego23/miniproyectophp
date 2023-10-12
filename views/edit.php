<?php 

session_start();

if (!isset($_SESSION["user"])) {
  header("Location: ../index.php");
  var_dump($_SESSION["user"]);
  exit();
}

$user =  $_SESSION["user"];

$id = $user["id"]; // test

require_once("../model/usuarios.php");

$data = getByID($id);

extract($data);




?>




<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <main>
    <div>
      <a href="home.php">
        < Back</a>
          <div>
            <h4>Change Info</h4>
            <p>Changes will be reflected to every services</p>
            <div class="photo-container">
              <span>CHANGE PHOTOS</span></p>
            </div>

            <form action="../services/update.php" method="post">
              <label for="">Name</label>
              <input type="text" readonly name="id" value=<?= $id ?>><br>
              <input type="text" name="name" value=<?= $name ?>>
              <br>
              <label for="">Bio</label>
              <br>
              <input type="text" name="bio" value=<?= $bio?>>
              <br>
              <label for="">Phone</label>
              <input type="text" name="phone" value=<?= $phone ?>>
              <br>
              <label for="">Email</label>
              <input type="text" name="mail" value=<?= $email ?>>
              <br>
              <label for="">Password</label>
              <input type="text" name="password" value="<?= $contraseña ?>">
              <br>


              <button type="submit">Save</button>
            </form>


          </div>
    </div>
  </main>


</body>

</html>