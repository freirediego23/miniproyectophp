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

extract($data);

?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/styles/style.css">
  <title><?= $name ?>'s Dashboard</title>


</head>

<body>
  <div class="top-banner"><img class="top-left-logo" src="/public/devchallenges.svg" alt="logo">
    <p><a href="../services/logout.php">Logout</a></p>
  </div>

  <main class="main">
    <div>

      <div class="top-info">
        <h2>Personal info</h2>
        <p>Basic info, like your name and photo</p>
      </div>
      <div class="top-prof-header">
        <div class="infos">
          <h3>Profile</h3>
          <p>Some info may be visible to other people</p>
        </div>
        <a href="../views/edit.php?id=<?= $id ?>">
          <div class="prof-sect">
            Edit
          </div>
        </a>
      </div>

      <table>
        <tr>
          <td class="td-title">Photo</td>
          <td><img class="row-img" src=../public/<?= $photo ?> alt="profile photo"></td>
        </tr>
        <tr>
          <td class="td-title">Name</td>
          <td><?= $name ?></td>
        </tr>
        <tr>
          <td class="td-title">Bio</td>
          <td><?= $bio ?></td>
        </tr>
        <tr>
          <td class="td-title">Phone</td>
          <td><?= $phone ?></td>
        </tr>
        <tr>
          <td class="td-title">Email</td>
          <td><?= $email ?></td>
        </tr>
        <tr>
          <td class="td-title">Password</td>
          <td>**********</td>
        </tr>
      </table>



    </div>
  </main>
</body>

</html>