<?php 

session_start();
if(isset($_GET['warning']) && $_GET['warning'] == 1) {
  echo '<div class="warning">Warning: No photo was entered!</div>';
}

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
  <link rel="stylesheet" href="../styles/style.css">
  <title>Document</title>
</head>

<body>

  <main class="wrapper">
    <a href="home.php">
      < Back</a>
        <div class="edit-container">

          <div>
            <h4>Change Info</h4>
            <p>Changes will be reflected to every services</p>



            <form action=" /services/update.php" enctype="multipart/form-data" method="post">
              <div class="row"><img src=../public/<?= $photo ?> alt="profile photo">
                <label for="fileInput" class="custom-file-upload">
                  CHANGE PHOTOS
                </label>
                <input type="file" id="fileInput" name="imagen" hidden>
              </div>
              <label for="">Name</label>
              <input class="inpname" type=" text" readonly hidden name="id" value=<?= $id ?>><br>
              <input class="inpname" type="text" name="name" value=<?= $name ?>>
              <br>
              <label for="">Bio</label>
              <br>
              <input class="inpname" type="text" name="bio" value=<?= $bio?>>
              <br>
              <label for="">Phone</label><br>
              <input class="inpname" type="text" name="phone" value=<?= $phone ?>>
              <br>
              <label for="">Email</label><br>
              <input class="inpname" type="text" name="mail" value=<?= $email ?>>
              <br>
              <label for="">Password</label><br>
              <input class="inpname" type="text" name="password" value="<?= $contraseña ?>">
              <br>


              <button type="submit">Save</button>
            </form>


          </div>
        </div>
  </main>


</body>

</html>