<?php 
// session_start();
if(isset($_GET['warning']) && $_GET['warning'] == 1) {
  echo '<div class="warning">Warning: This email is already being used!</div>';
}
// if($_SERVER["REQUEST_METHOD"]=== "POST"){
//   extract($_POST);
//   var_dump($_POST);

//  $user = $_POST['usuario'];
//  $password = $_POST['password'];

// if($user  && $password){
//   $_SESSION['usuario'] = $user;

//   header("Location: home.php");
//   exit();
// } else {
//   $error = "Usuario o password incorrecto!";
// }

// }

// THIS PAGE IS TO CREATE NEW USERS
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
      <h4>Join thousands of learners from around the world
      </h4>

      <p>Master web development by making real-life projects. There are multiple paths
        for you to choose.
      </p>

      <form action="/services/create.php" method="post">

        <input type="text" placeholder="Email" name="usuario">
        <br>

        <input type="text" placeholder="Password" name="password">
        <br>
        <button type="submit">Start coding now</button>
        <div>
          <p>or continue with these social profile</p>
        </div>
        <span>Already a member? <a href="/views/loginsite.php">Login</a></span>


      </form>
    </div>
  </main>
  <script src="/scripts/index.js"></script>
</body>

</html>