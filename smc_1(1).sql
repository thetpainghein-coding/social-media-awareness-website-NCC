<!DOCTYPE html>

<?php
session_start();
$email = $_SESSION['email'];
include("dbconnect.php");

$sql1 = "SELECT * from socialmediaapps";
$result = $conn->query($sql1);

?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Online Safety Campaign</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <nav>
    <ul>
      <li class="link"><a href="home.php">Home</a></li>
      <li class="link"><a href="information.php">Information</a></li>
      <li>
        Campaigns
        <ul>
          <li class="link">
            <a href="popular-apps.php">Popular Apps</a>
          </li>
          <li class="link">
            <a href="parents-help.php">Parents Help</a>
          </li>
          <li class="link">
            <a href="livestreaming.php">Livestreaming</a>
          </li>
        </ul>
      </li>

      <li class="link"><a href="contact.php">Contact</a></li>
      <li class="link"><a href="legislation.php">Legislation</a></li>
      <li class="link"><a href="logout.php">Logout</a></li>
    </ul>
    <form action="/search" method="get" class="search-input">
      <input type="text" id="search" name="search" placeholder="Search..." />
      <button type="submit">Search</button>
    </form>
  </nav>
  <header>
    <!-- Custom Cursors and 3D Illustrations can be added here -->
  </header>

  <main>
    <section class="popular-apps-page">
      <h2>Most Popular Social Media Apps</h2>
      <div class="popular-apps-container">
        <?php
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
        ?>
            <div class="popular-app">
              <h3><?php echo $row['name']; ?></h3>
              <p><img src="<?php echo "images\\" . $row['logo']; ?>" width="100px" height="100px"></p>
              <p>
                <a type="button" class="btn btn-outline-success" href="<?php echo $row['link']; ?>"> Login </a>
              </p>
              <p><strong><a type="button" class="btn btn-outline-primary" href="<?php echo $row['privacylink']; ?>"> Privacy Guide </a></strong> </p>
            </div>
        <?php
          }
        }
        ?>
      </div>
    </section>
  </main>
  <footer>
    <p>You are here: Popular Apps</p>
    <div class="footer-content">
      <p>&copy; 2024 Online Safety Campaign</p>
      <a href="twitter.com" class="footer-a">Twitter</a>
      <a href="instagram.com" class="footer-a">Instagram</a>
      <a href="facebook.com" class="footer-a">Facebook</a>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>