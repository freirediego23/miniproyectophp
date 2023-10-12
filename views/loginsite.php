<?php 

if(isset($_GET['warning']) && $_GET['warning'] == 1) {
  echo '<div class="warning">Warning: This email is already being used!</div>';
}

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
      <h4>Login
      </h4>
      <form action="../services/login.php" method="post">

        <input type="text" placeholder="Email" name="usuario">
        <br>

        <input type="text" placeholder="Password" name="password">
        <br>
        <button type="submit">Login</button>
        <div>
          <p>or continue with these social profile</p>
        </div>
        <span>Don't you have an account yet? <a href="../index.php">Register</a></span><br>
        <a href="../services/logout.php">Logout</a>
      </form>
    </div>
  </main>
  <script src="../scripts/index.js"></script>
</body>

</html>