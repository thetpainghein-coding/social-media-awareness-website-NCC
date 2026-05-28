<!DOCTYPE html>
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
    <section class="legislation-content">
      <div class="legislation-top">
        <h2>Legislation and Guidance</h2>

        <p>
          Stay informed about the legal aspects and best practices when it comes
          to online social media use.
          Click <a href="https://www.legislation.gov.uk/ukpga/2023/50" target="_blank">here</a> to read official online safety laws.
        </p>
      </div>


      <h2>ICT Legislation</h2>

      <!-- Information about Legislation and Guidance -->
      <div class="legislation-act-container">
        <div class="legislation-act-each">
          <div class="act-img">
            <img src="images/data-protection.png" alt="">
          </div>
          <div class="act-text">
            <h4>Data Protection</h4>
            <p>The increased volume of information stored on
              computers meant there was a need to control what
              was stored in the interests of protecting individual
              personal data. </p>
          </div>
        </div>

        <div class="legislation-act-each">
          <div class="act-img">
            <img src="images/480px-Copyright.png" alt="">
          </div>
          <div class="act-text">
            <h4>Copy Right</h4>
            <p>This law was designed to protect the “intellectual
              property” rights of those individuals and
              organisations that create and produce material
              based on original ideas. </p>
          </div>
        </div>

        <div class="legislation-act-each">
          <div class="act-img">
            <img src="images/computer-miuse.png" alt="">
          </div>
          <div class="act-text">
            <h4>Computer Misuse</h4>
            <p>This act was designed to prevent computer crimes
              involving unlawful access to information systems or
              data files.</p>
          </div>
        </div>
      </div>


      <div class="login-register-container">
        <div class="login-register-title">
          <h4>Login or Register to read our Special contents</h4>
        </div>
        <div class="login-register-description">
          <p>Our website, SMC, offers a dedicated content service aimed at promoting digital and social media safety for teens. This contents provides valuable insights, tips, and resources to help teens navigate the online world safely and responsibly. By subscribing, teens and their parents can stay informed about the latest trends, potential risks, and best practices for maintaining a secure and positive online presence.</p>
        </div>
        <div class="login-register-btns">
          <a type="button" href="login.php" class="login-register-btn">Login</a>
          <a type="button" href="registration.php" class="login-register-btn">Register</a>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <p>You are here: Legislation</p>
    <div class="footer-content">
      <p>&copy; 2024 Online Safety Campaign</p>
      <a href="twitter.com" class="footer-a">Twitter</a>
      <a href="instagram.com" class="footer-a">Instagram</a>
      <a href="facebook.com" class="footer-a">Facebook</a>
    </div>
  </footer>

</body>

</html>