<!DOCTYPE html>
<?php
session_start();
$email = $_SESSION['email'];
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
    <section id="livestreaming">

      <div class="about-livestreaming">
        <div class="about-text">
          <h3>What is live-streaming?</h3>
          <p>
            Livestreaming, also known as "going live" is the broadcasting of live video over the internet to an audience in real-time. <br>While most social media platforms let users upload video content, livestreaming is video content in real time. Since it is in real time, livestreamers can take and answer questions and interact with viewers. You can also record livestreamed presentations and post them online later to reach a larger audience.</p>
        </div>
      </div>

      <div class="livestreaming-tips">
        <div class="tips-list">

          <h3>Info and Tips for Livestreaming Safety</h3>

          <ul>
            <div class="tip">
              <li class="tip-1-title"><i class="fa-solid fa-chevron-down"></i>Check the settings </li>
              <p class="tip-1-content"> Familiarise yourself with the live stream platform before getting started and decide what settings are best for you. Many live streaming apps allow you to switch off comments, delete videos after a live stream and update your location settings.</p>
            </div>
            <div class="tip">
              <li class="tip-2-title"><i class="fa-solid fa-chevron-down"></i>Who will see your broadcast?</li>
              <p class="tip-2-content"> Consider your audience before starting a live stream. We recommend using a friends-only setting to ensure you know who is watching.</p>
            </div>
            <div class="tip">
              <li class="tip-3-title"><i class="fa-solid fa-chevron-down"></i>What information are you sharing?</li>
              <p class="tip-3-content"> Consider what information you are share during the live stream, for example, is your location available or are you giving away any personal information during the broadcast?</p>
            </div>
            <div class="tip">
              <li class="tip-4-title"><i class="fa-solid fa-chevron-down"></i>Think before you broadcast</li>
              <p class="tip-4-content">It can be very easy for someone to record a live broadcast without you knowing. Users should also remember that while they can delete a video once it is broadcast they cannot remove what has been viewed during the live broadcast.</p>
            </div>
            <div class="tip">
              <li class="tip-5-title"><i class="fa-solid fa-chevron-down"></i>Who and what are you broadcasting?</li>
              <p class="tip-5-content"> There a few things to consider before broadcasting… who is in the broadcast? Do I have their permission to film? Will anyone be offended by my broadcast? Will my broadcast affect anyone?</p>
            </div>
            <div class="tip">
              <li class="tip-6-title"><i class="fa-solid fa-chevron-down"></i>Reporting Broadcasts</li>
              <p class="tip-6-content"> If you see something that makes you uncomfortable you can report it to the social network through the reporting tool. Users should also report any abusive comments they encounter and block the sender.</p>
            </div>
          </ul>
        </div>

        <div class="tips-img">
        </div>
      </div>
    </section>
  </main>

  <footer>
    <p>You are here: Live Streaming</p>
    <div class="footer-content">
      <p>&copy; 2024 Online Safety Campaign</p>
      <a href="twitter.com" class="footer-a">Twitter</a>
      <a href="instagram.com" class="footer-a">Instagram</a>
      <a href="facebook.com" class="footer-a">Facebook</a>
    </div>
  </footer>
  <script src="https://kit.fontawesome.com/0e36839614.js" crossorigin="anonymous"></script>
</body>

</html>