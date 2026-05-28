<!DOCTYPE html>
<?php
session_start();
$email = $_SESSION['email'];
include("dbconnect.php");

$sql = "SELECT * from services";
$resService = $conn->query($sql);

$sql2 = "SELECT * from newsletter";
$resNews = $conn->query($sql2);

$sql_SocialApps = "SELECT * from socialmediaapps";
$resSocialApps = $conn->query($sql_SocialApps);

$sub = 0;
$sql1 = "SELECT * from member WHERE email='$email'";
$resSub = $conn->query($sql1);
if ($resSub->num_rows > 0) {
  $row1 = $resSub->fetch_assoc();
  $sub = $row1['subscription'];
}

if (isset($_POST['btnSub'])) {
  $sub = 1;
  $sql3 = "UPDATE member SET subscription = '$sub' WHERE email= '$email' ";
  if ($conn->query($sql3) == TRUE) {
    echo " Newsletter subscribed";
    header("location:home.php");
  }
}
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
    <h1>Online Safety Campaign</h1>
    <!-- Custom Cursors and 3D Illustrations can be added here -->
  </header>

  <main>
    <section id="home">
      <div class="home-slider">
      </div>

      <div class="welcome">
        <h2>Welcome to Our Campaign</h2>
        <h5>Empowering teenagers to navigate the digital world safely.</h5>
      </div>

      <h2>Register to join our workshops</h2>

      <div class="service-container">
        <?php
        if ($resService->num_rows > 0) {
          while ($rowSer = $resService->fetch_assoc()) {
        ?>
            <!--  Service 1 -->
            <div class="service-content">
              <h3><?php echo $rowSer['title']; ?></h3>
              <p>
                <?php echo $rowSer['description']; ?>
              </p>
              <p><strong><?php echo $rowSer['info']; ?></strong> </p>
              <p><strong><?php echo $rowSer['createdat']; ?></strong></p>
              <div class="register-btn-container">
                <a type="button" class="btn btn-outline-info" href="#">Register Now</a>
              </div>
            </div>
        <?php
          }
        }
        ?>
      </div>

      <!-- Most Popular Social Media Apps -->
      <section class="popular-apps">
        <a href="popular-apps.php">
          <h3>Most Popular Social Media Apps</h3>
          <marquee behavior="scroll" direction="left" class="marquee-social-apps-container">
            <div class="social-apps-container">
              <?php
              if ($resSocialApps->num_rows > 0) {
                while ($rowSocialApp = $resSocialApps->fetch_assoc()) {
              ?>
                  <div class="social-app-box">

                    <div class="social-app-logo">
                      <img src="<?php echo "images\\" . $rowSocialApp['logo']; ?>" width="150px" heigth="150px">
                    </div>

                    <div class="social-app-name">
                      <h5><?php echo $rowSocialApp['name'] ?></h5>
                    </div>

                  </div>
                <?php
                }
              } else {
                ?>
                <h3>Coming Soon</h3>
              <?php } ?>
            </div>
          </marquee>
        </a>
      </section>

      <div class="teens-brain">
        <h3>How Social Media Affect Teens' Brain</h3>
        <img src="images/genz-social-media-hero-940x529.jpg" alt="image">
        <p>
          &emsp;A recent study published in JAMA Pediatrics highlights the impact of social media on adolescent brain development. Researchers observed that habitual social media use led to changes in brain regions controlling social rewards and punishments. Dr. Heidi Allison Bender, a neuropsychologist, explained that the affected areas include the amygdala, which is tied to emotions, and the dorsolateral prefrontal cortex, which is linked to judgement and reasoning.
          <br>
          &emsp;These changes may not be inherently harmful or beneficial, but they raise concerns about increased sensitivity to social cues and the potential for a heightened need for social media stimulation. Dr. Bender emphasized that the brain’s neuroplasticity could allow for new neural connections, even if some neurons are lost due to pruning.
          <br>
          &emsp;The study fits into broader concerns about technology's impact on developing brains, particularly regarding screen time and its effects on early literacy and attention. The COVID-19 pandemic's increase in screen time for virtual learning has also shown weaker academic and social skills in younger students.
          <br>
          &emsp;Dr. Bender advises parents to maintain open discussions about social media's pros and cons, acting as guides for their children whose frontal lobes, responsible for judgment and reasoning, are not fully developed until around age 21.
        </p>

        <p class="teens-brain-credit"><strong>Written by: Dr. Heidi Allison Bender
            <br>
            Published on: New York Presbyterian
          </strong></p>

      </div>
      <!-- How to Stay Safe Online -->
      <section class="stay-safe-online">
        <h3>How to Stay Safe Online</h3>
        <p>Follow these tips to ensure a secure online experience:</p>
        <ul>
          <li>Set strong, unique passwords</li>
          <li>Enable two-factor authentication</li>
          <li>Be cautious about sharing personal information</li>
          <li>Regularly update privacy settings</li>
          <li>Use antivirus software</li>
          <li>Verify the authenticity of online information</li>
        </ul>
      </section>

      <section id="news-section">
        <h1>Special News</h1>
        <?php
        if ($sub == 1) {
        ?>

          <?php
          if ($resNews->num_rows > 0) {
            while ($rowNews = $resNews->fetch_assoc()) {
          ?>
              <!--  Service 1 -->
              <div class="newsletter-container">

                <div class="newsletter-media">
                  <p><img src="<?php echo "images\\" . $rowNews['image']; ?>" width="400px"></p>

                  <p><strong>Publish Date: <?php echo $rowNews['publishdate']; ?></strong></p>
                </div>
                <div class="newsletter-content">
                  <h3>
                    <?php echo $rowNews['title']; ?>
                  </h3>
                  <p>
                    <?php echo $rowNews['content']; ?>
                  </p>
                </div>
              </div>
          <?php
            }
          }
        } else {
          ?>
          <!-- Contact Form -->

          <div class="home-subscription-form">
            <form action="#" method="POST">
              <div class="home-subscription-title"> <label for="name">Newsletter Subscription</label></div>

              <div class="home-subscription-img"> <img src="images/newsletter-icon-15.png" alt=""></div>

              <div class="home-subscription-btn">
                <button type="submit" name="btnSub">Subscribe</button>
              </div>
            </form>
          </div>
        <?php }
        ?>
      </section>
    </section>
  </main>

  <footer>
    <p>You are here: Home</p>
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