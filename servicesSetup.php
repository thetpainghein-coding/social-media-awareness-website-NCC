<!DOCTYPE html>
<?php

include("dbconnect.php");
$sql1 = "SELECT * from howparenthelp";
$result = $conn->query($sql1);
?>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Online Safety Campaign</title>
  <link rel="stylesheet" href="style.css">
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
    <h1>Online Safety Campaign</h1>
    <!-- Custom Cursors and 3D Illustrations can be added here -->
  </header>

  <main>



    <!-- Add content with tips for parents -->
    <div class="parents-help-top-container">
      <div class="parents-help-top-left">

      </div>
      <div class="parents-help-top-right">
        <h2>How Parents Can Help</h2>
        <p>
          Discover top tips for parents to support healthy teen use of social
          media.
        </p>
        <ul>
          <li>Stay involved and communicate openly with your teenager.</li>
          <li>
            Set boundaries and establish clear rules for social media use.
          </li>
          <li>
            Teach the importance of privacy settings and online etiquette.
          </li>
          <li>
            Monitor your teen's online activities without invading their
            privacy.
          </li>
          <li>
            Encourage a healthy balance between online and offline activities.
          </li>
        </ul>
      </div>
    </div>
    <div class="parents-help-contents-list">
      <h2>"Parents Help" Feed</h2>
      <?php
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
      ?>

          <div class="parents-help-content">
            <h3><?php echo $row['title']; ?></h3>
            <div class="parents-help-imgs-container">
              <?php if ($row['image2'] == null) { ?>
                <img src="<?php echo "images\\" . $row['image1']; ?>" alt="image">
              <?php } else { ?>
                <img src="<?php echo "images\\" . $row['image1']; ?>" alt="image">
                <img src="<?php echo "images\\" . $row['image2']; ?>" alt="image">
              <?php } ?>
            </div>
            <div class="parents-help-des">
              <p><?php echo $row['description']; ?></p>

            </div>
          </div>
      <?php }
      }
      ?>
    </div>
    <!-- Add more tips or content as needed -->
    </section>
  </main>

  <footer>
    <p>You are here: Parents Help</p>
    <div class="footer-content">
      <p>&copy; 2024 Online Safety Campaign</p>
      <a href="twitter.com" class="footer-a">Twitter</a>
      <a href="instagram.com" class="footer-a">Instagram</a>
      <a href="facebook.com" class="footer-a">Facebook</a>
    </div>
  </footer>
</body>

</html>