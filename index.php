<?php 
// session_start();
if(isset($_GET['warning']) && $_GET['warning'] == 1) {
  echo '<div class="warning">Warning: This email is already being used!</div>';
}


// THIS PAGE IS TO CREATE NEW USERS
?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/styles/style.css">
  <title>Document</title>
</head>

<body class="test">
  <div>
    <main class="login-main">
      <div class="login-form-cont">
        <img src="/public/devchallenges.svg" alt="logo" class="dev-logo">
        <h4>Join thousands of learners from around the world
        </h4>

        <p class="form-info">Master web development by making real-life projects. There are multiple paths
          for you to choose
        </p>

        <form action="/services/create.php" method="post">
          <div class="input-cont">
            <img src="/public/letter.svg" alt="icon">
            <input type="text" placeholder="Email" name="usuario">
            <br>
          </div>

          <div class="input-cont">
            <img src="/public/lock.svg" alt="icon">
            <input type="text" placeholder="Password" name="password">
          </div>


          <button class="index-button" type="submit">Start coding now</button>
          <div class="social-cont">
            <p>or continue with these social profile</p>
            <div class="social-prof">
              <img src="/public/Google.svg" alt="social-profile-img"><img src="/public/Facebook.svg"
                alt="social-profile-img"><img src="/public/Twitter.svg" alt="social-profile-img"><img
                src="/public/Gihub.svg" alt="social-profile-img">
            </div>
          </div>
          <div class="member">
            <span>Already a member? <a href="/views/loginsite.php">Login</a></span>
          </div>

        </form>
      </div>
    </main>
  </div>
  <script src="/scripts/index.js"></script>
</body>

</html>