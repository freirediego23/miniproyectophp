<?php 

if(isset($_GET['warning']) && $_GET['warning'] == 1) {
  echo '<div class="warning">Warning: This email is already being used!</div>';
}

?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/styles/style.css">
  <title>Login Site</title>
</head>

<body class="test">

  <main class="login-main">
    <div class="login-form-cont">
      <img src="/public/devchallenges.svg" alt="logo" class="dev-logo">
      <h4>Login
      </h4>
      <form action="../services/login.php" method="post">

        <div class="input-cont">
          <img src="/public/letter.svg" alt="icon">
          <input type="text" placeholder="Email" name="usuario">
        </div>
        <br>

        <div class="input-cont">
          <img src="/public/letter.svg" alt="icon">
          <input type="text" placeholder="Password" name="password">
        </div>
        <br>
        <button type="submit" class="index-button">Login</button>
        <div class="social-cont">
          <p>or continue with these social profile</p>
          <div class="social-prof">
            <img src="/public/Google.svg" alt="social-profile-img"><img src="/public/Facebook.svg"
              alt="social-profile-img"><img src="/public/Twitter.svg" alt="social-profile-img"><img
              src="/public/Gihub.svg" alt="social-profile-img">
          </div>
        </div>
        <div class="member">
          <span class="mod">Don't you have an account yet? <a href="../index.php">Register</a></span>
        </div>
        <!-- <a href="../services/logout.php">Logout</a> -->
      </form>
    </div>
  </main>
  <script src="../scripts/index.js"></script>
</body>

</html>