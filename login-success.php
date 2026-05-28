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


      <div class="guidance-container">
        <div class="guidance-main-tile">
          <h2>Teen Social Media Guidance</h2>
        </div>

        <div class="detail-guidance">
          <div class="detail-guidance-titles">
            <ul class="detail-guidance-titles-list">
              <li class="guidance-title-1">Screen time shouldn’t be all the time</li>
              <li class="guidance-title-2">Model good tech behavior</li>
              <li class="guidance-title-3">Encourage privacy</li>
              <li class="guidance-title-4">Don’t make screens the reward (or consequence)</li>
              <li class="guidance-title-5">Yes to Friending, No to Spying</li>
            </ul>
          </div>

          <div class="detail-guidance-text-container">
            <p class="start"> Click on each topic to read</p>
            <p class="guidance-1">Set sensible boundaries on how much screen time is appropriate for your teen. You can also designate media-free spaces, like bedrooms and the dinner table. Establishing (and enforcing) these limits teaches kids to be healthy media consumers.</p>
            <p class="guidance-2">It is important to model healthy behaviors and boundaries when it comes to screen time and social media use. Avoid using your phone at the table, and make sure your teens do not need to compete with a screen for your attention. Besides setting a good example, this shows them that you care and are interested, which makes them more likely to open up to you.</p>
            <p class="guidance-3">Whatever age your family decides is appropriate for social media, make sure that your teenager is very careful about privacy. Research privacy settings with them and make sure they understand when something is public or private — or somewhere in the middle — and how that should affect what they post. </p>
            <p class="guidance-4">Technology is enormously appealing to kids and teens as it is, but when we make screen time the go-to thing kids get for good behavior — or get taken away for bad behavior — we are making it even more desirable, thereby increasing the chances that a child will overvalue it.</p>
            <p class="guidance-5">If your teen is on social media, you can follow or friend them, and monitor their page. But avoid going through their messages unless there is cause for concern. Parents should begin by trusting their children, and privacy should be taken seriously.</p>
          </div>
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

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const lis = document.querySelectorAll('.detail-guidance-titles-list li');
      const paragraphs = document.querySelectorAll('.detail-guidance-text-container p');

      lis.forEach((li, index) => {
        li.addEventListener('click', () => {
          paragraphs.forEach(p => p.style.display = 'none'); // Hide all paragraphs
          paragraphs[index + 1].style.display = 'block'; // Show the clicked paragraph
        });
      });
    });
  </script>
</body>

</html>