<!DOCTYPE html>
<?php
include('dbconnect.php');

$sql1 = "SELECT * from contactus";
$result = $conn->query($sql1);

if (isset(($_GET['deleteid']))) {
  $delid = $_GET['deleteid'];
  $sql = "DELETE FROM contactus WHERE id=$delid;";

  if ($conn->query($sql) == TRUE) {
    // echo " Deleting service successful ";
    header("location:contactList.php");
  }
}
?>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Online Safety Campaign</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link href="DataTables/datatables.min.css" rel="stylesheet">

</head>

<body>
  <nav>
    <ul>
      <li class="link"><a href="adminhome.php">Home</a></li>
      <li class="link"><a href="servicesSetup.php">Services</a></li>
      <li class="link"><a href="newsletterSetup.php">NewsLetter</a></li>
      <li class="link"><a href="howparenthelpSetup.php">HowParentHelp</a></li>
      <li class="link"><a href="socialmediaappSetup.php">SocialMediaApps</a></li>
      <li class="link"><a href="contactList.php">Help/Support</a></li>
      <li class="link"><a href="MemberList.php">MemberList</a></li>
      <li class="link"><a href="logout.php">Logout</a></li>
    </ul>

  </nav>
  <header>

  </header>

  <main>
    <section id="">
      <?php
      if ($result->num_rows > 0) {
      ?>
        <h2>Help/Support List</h2>
        <table id="contact-table" class="table table-striped" style="width:100%">
          <thead>
            <tr>
              <th>Id</th>
              <th>Message</th>
              <th>Email</th>
              <th>Date</th>
              <th>Action</th>
              <!-- <th>Status</th>
              <th>Actions</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
            while ($row = $result->fetch_assoc()) {
            ?>

              <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['message']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['sentdate']; ?></td>
                <td> <a type="button" class="btn btn-danger" href="contactList.php?deleteid=<?php echo $row['id'] ?>">Delete </a></td>

                <!-- <td>Done</td>
                <td><Button> Done</Button></td> -->

              </tr>
            <?php
            }
            ?>
          </tbody>

        </table>
      <?php
      } else {
        echo " There is no data";
      }
      ?>

    </section>
  </main>

  <footer>
    <p>You are here: Help/Support</p>
    <div class="footer-content">
      <p>&copy; 2024 Online Safety Campaign</p>
      <a href="twitter.com" class="footer-a">Twitter</a>
      <a href="instagram.com" class="footer-a">Instagram</a>
      <a href="facebook.com" class="footer-a">Facebook</a>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="DataTables/datatables.min.js"></script>

  <script>
    new DataTable('#contact-table')
  </script>
</body>

</html>