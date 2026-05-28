<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (isset($_SESSION['attempt_again'])) {
  $now = time();
  if ($now >= $_SESSION['attempt_again']) {
    unset($_SESSION['attempt']);
    unset($_SESSION['attempt_again']);
    unset($_SESSION['msg']);
    unset($_SESSION['check']);
  }
}
?>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Online Safety Campaign</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <nav>
    <ul>
      <li class="link"><a href="index.php">Home</a></li>
      <li class="link"><a href="binformation.php">Information</a></li>
      <li class="link"><a href="blegislation.php">Legislation</a></li>
      <li class="link"><a href="login.php">Login</a></li>
    </ul>

  </nav>
  <header>
    <h1>Online Safety Campaign</h1>
    <!-- Custom Cursors and 3D Illustrations can be added here -->
  </header>

  <main>
    <section id="contact">
      <div class="login-container">
        <h2>Login</h2>


        <!-- Contact Form -->
        <?php
        if (isset($_SESSION['check']) != 1) {
        ?>
          <!-- Contact Form -->
          <form action="login-success.php" method="POST">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required />

            <label for="message">Password:</label>
            <input type="password" id="email" name="password" required />
            <?php
            if (isset($_SESSION['msg'])) {
            ?>
              <div class="login-alert-msg">
                <?php
                echo $_SESSION['msg'];
                ?>
              </div>
            <?php
            }
            ?>
            <button type="submit">Login</button>

          <?php
        } else {
          ?>

            <form action="login-success.php" method="POST">

              <label for="email">Email:</label>
              <input type="email" id="email" name="email" disabled />

              <label for="message">Password:</label>
              <input type="password" id="email" name="password" disabled />
              <?php
              if (isset($_SESSION['msg'])) {
              ?>
                <div class="login-alert-msg">
                  <?php
                  echo $_SESSION['msg'];
                  ?>
                </div>
              <?php
              }
              ?>
              <button type="submit">Login</button>

            <?php } ?>
            </form>

            <!-- Privacy Policy Link -->
            <p>
              Not a member register <a href="registration.php"> here </a>
              <br>
              Before sending a message, please review our
              <a href="privacy-policy.html" target="_blank">Privacy Policy</a>.
            </p>

      </div>

    </section>
  </main>

  <footer>
    <p>You are here: Login</p>
    <div class="footer-content">
      <p>&copy; 2024 Online Safety Campaign</p>
      <a href="twitter.com" class="footer-a">Twitter</a>
      <a href="instagram.com" class="footer-a">Instagram</a>
      <a href="facebook.com" class="footer-a">Facebook</a>
    </div>
  </footer>
</body>

</html>