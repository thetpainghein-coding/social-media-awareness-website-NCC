<!DOCTYPE html>
<html lang="en">

<?php
include("dbconnect.php");

$sql = "SELECT * from services";
$resService = $conn->query($sql);

$sql_SocialApps = "SELECT * from socialmediaapps";
$resSocialApps = $conn->query($sql_SocialApps);

?>

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
      <li class="link"><a href="index.php">Home</a></li>
      <li class="link"><a href="binformation.php">Information</a></li>
      <li class="link"><a href="blegislation.php">Legislation</a></li>
      <li class="link"><a href="login.php">Login</a></li>
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

      <h2 class="index-services-header">Welcome to Our Campaign</h2>
      <h5>Empowering teenagers to navigate the digital world safely.</h5>
      <h2 class="index-services-header">Register to join our workshops</h2>
      <div class="services-container">


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
      </div>


      <!-- Most Popular Social Media Apps -->

      <section class="popular-apps">
        <a href="login.php">
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

      <div class="login-register-container">
        <div class="login-register-title">
          <h4>Login or Register to read our Special contents</h4>
        </div>
        <div class="login-register-description">
          <p>Our website, SMC, offers a dedicated contents service aimed at promoting digital and social media safety for teens. This contents provides valuable insights, tips, and resources to help teens navigate the online world safely and responsibly. By subscribing, teens and their parents can stay informed about the latest trends, potential risks, and best practices for maintaining a secure and positive online presence.</p>
        </div>
        <div class="login-register-btns">
          <a type="button" href="login.php" class="login-register-btn">Login</a>
          <a type="button" href="registration.php" class="login-register-btn">Register</a>
        </div>
      </div>
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
</body>

</html>