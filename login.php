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
    <section id="information">
      <div class="about-us-container">
        <div class="about-us-left">
        </div>
        <div class="about-us-right">
          <h2>About Us</h2>
          <p>
            Welcome to the Information page of the Online Safety Campaign. Here,
            we provide details about our social media campaigns and their aims and
            vision to keep teenagers safe online.
          </p>
          <h3>Our Social Media Campaigns</h3>
          <p>
            Our campaigns focus on empowering teenagers to navigate the digital
            world safely. We aim to create awareness about online risks and
            promote responsible use of social media platforms.
          </p>
        </div>
      </div>
      <div class="vision-mission">
        <div class="vision-mission-box">
          <div class="vision-mission-title">
            <h2>Vision</h2>
          </div>
          <div class="vision-mission-text">
            <p>To create a generation of digitally aware teens who use social media responsibly, confidently, and safely, fostering an online environment where positivity, respect, and informed decision-making prevail.</p>
          </div>
        </div>

        <div class="vision-mission-box">
          <div class="vision-mission-title">
            <h2>Mission</h2>
          </div>
          <div class="vision-mission-text">
            <p>Our mission is to empower teens with the knowledge and skills needed to navigate the digital landscape securely. We aim to provide engaging educational content, practical tools, and supportive resources that promote digital literacy, critical thinking, and responsible social media usage. </p>
          </div>
        </div>
      </div>

      <h2 class="team-l">Meet Out Team</h2>

      <div class="team-member-container">
        <div class="team-member">
          <h4>Sasha</h4>
          <img src="images/StockSnap_DNROL0GINM.jpg" alt="">
          <h4>Communication Executive</h4>
        </div>

        <div class="team-member">
          <h4>Daisy</h4>
          <img src="images/StockSnap_J5WDVQRQ6Y.jpg" alt="">
          <h4>Operation Executive</h4>
        </div>

        <div class="team-member">
          <h4>Greg</h4>
          <img src="images/StockSnap_T8VNJRQH7F.jpg" alt="">
          <h4>Program Director</h4>
        </div>

        <div class="team-member">
          <h4>Tiffany</h4>
          <img src="images/StockSnap_X0XJR9QNN8.jpg" alt="">
          <h4>Media Executive</h4>
        </div>

      </div>

    </section>
  </main>

  <footer>
    <p>You are here: Information</p>
    <div class="footer-content">
      <p>&copy; 2024 Online Safety Campaign</p>
      <a href="twitter.com" class="footer-a">Twitter</a>
      <a href="instagram.com" class="footer-a">Instagram</a>
      <a href="facebook.com" class="footer-a">Facebook</a>
    </div>
  </footer>
</body>

</html>