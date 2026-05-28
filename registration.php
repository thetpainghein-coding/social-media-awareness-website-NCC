<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Online Safety Campaign</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<?php
include('dbconnect.php');
if (isset($_POST['btnSave'])) {
  $title = $_POST['title'];
  $content = $_POST['content'];

  if (isset($_FILES["img"]) && $_FILES["img"]["error"] == 0) {
    $filename = $_FILES["img"]["name"];
    $filepath = $_FILES["img"]["tmp_name"];
  }

  $sql = "INSERT INTO newsletter(title, content, image) VALUES ('$title','$content','$filename')";
  if ($conn->query($sql) == TRUE) {
    move_uploaded_file($filepath, "images/" . $filename);
    // echo " Insert service successfully ";
    header("location:newsletterSetup.php");
  }
}

if (isset(($_GET['deleteid']))) {
  $delid = $_GET['deleteid'];
  $sql = "DELETE FROM newsletter WHERE id=$delid;";

  if ($conn->query($sql) == TRUE) {
    // echo " Deleting service successful ";
    header("location:newsletterSetup.php");
  }
}


if (isset(($_GET['editid']))) {
  $editid = $_GET['editid'];
  $sql = "SELECT * FROM newsletter WHERE id='$editid'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $prev_img = $row['image'];
  $og_publish_date = $row['publishdate'];
} else {
  $sql = "SELECT * FROM newsletter";
  $result = $conn->query($sql);
}

if (isset($_POST['btnUpdate'])) {
  $id = $_POST['id'];
  $title = $_POST['title'];
  $content = $_POST['content'];

  if (isset($_FILES["img"]) && $_FILES["img"]["error"] == 0) {
    $filename = $_FILES["img"]["name"];
    $filepath = $_FILES["img"]["tmp_name"];
    move_uploaded_file($filepath, "images/" . $filename);
  } else {
    $filename = $prev_img;
  }

  $sql = "UPDATE newsletter SET title='$title',content='$content',image ='$filename', publishdate='$og_publish_date' WHERE id= '$id'";
  if ($conn->query($sql) == TRUE) {
    // echo " Insert service successfully ";
    header("location:newsletterSetup.php");
  }
}

if (isset($_POST['btnCancel'])) {
  header("location:newsletterSetup.php");
}

$sql1 = "SELECT * FROM newsletter";
$result = $conn->query($sql1);
?>

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
    <h1>NewsLetter Set up</h1>
    <!-- Custom Cursors and 3D Illustrations can be added here -->
  </header>

  <main>
    <section id="contact">
      <div class="admin-form">
        <h2>Newsletter Form</h2>
        <!-- Contact Form -->
        <form action="#" method="post" enctype="multipart/form-data">

          <input type="hidden" id="id" name="id" value="<?php echo isset($row['id']) ?  $row['id'] : "" ?>">
          <label for="name">Name:</label>
          <input type="text" id="title" name="title" value="<?php echo isset($row['title']) ?  $row['title'] : '' ?>" required />

          <label for="content">Message:</label>
          <textarea id="content" name="content" rows="4" required><?php echo isset($row['content']) ?  $row['content'] : '' ?></textarea>



          <?php if (isset(($_GET['editid']))) { ?>
            <label for="img">Message:</label>
            <label class="pre-img-lbl">Previous Image:</label>
            <img src="<?php echo isset($row['image']) ?  "images/" . $row['image'] : ""  ?>" alt="Image" class="pre-img">
            <input type="file" id="img" name="img" />
            <button type="submit" name="btnUpdate">Update</button>
          <?php } else { ?>
            <label for="img">Message:</label>
            <input type="file" id="img" name="img" id="formFile" class="form-control" required />
            <button type="submit" name="btnSave">Save</button>
          <?php } ?>
        </form>
        <form action="#" method="post" class="cancel-form">
          <button type="submit" name="btnCancel" class="cancel-btn">Cancel</button>
        </form>

        <p>
          Before sending a message, please review our
          <a href="privacy-policy.html" target="_blank">Privacy Policy</a>.
        </p>
      </div>

      <div class="data-table">

        <?php
        if ($result->num_rows > 0) {
        ?>
          <h2> Services List </h2>
          <table>
            <thead>
              <tr>
                <th class="table-id-col">Id</th>
                <th class="table-title-col">Title</th>
                <th class="table-content-col">Content</th>
                <th class="table-image-col">Image</th>
                <th class="table-publishdate-col">Publish Date</th>
                <th class="table-action-col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php


              while ($row = $result->fetch_assoc()) {
              ?>

                <tr>
                  <td class="table-id-col"><?php echo $row['id']; ?></td>
                  <td class="table-title-col"><?php echo $row['title']; ?></td>
                  <td class="table-content-col"><?php echo $row['content']; ?></td>
                  <!-- <td><?php echo $row['image']; ?></td> -->
                  <td class="table-image-col"><?php echo '<img src="' . 'images/' . $row['image'] . '" alt="Image"  >'; ?></td>
                  <td class="table-publishdate-col"><?php echo $row['publishdate']; ?></td>
                  <td class="table-action-col">
                    <a type="button" class="btn btn-warning" href="newsletterSetup.php?editid=<?php echo $row['id'] ?>"> Edit </a>

                    <a type="button" class="btn btn-danger" href="newsletterSetup.php?deleteid=<?php echo $row['id'] ?>">Delete</a>

                  </td>
                </tr>
              <?php
              }
              ?>
          </table>
        <?php
        } else {
          echo " There is no data";
        }
        ?>
        </tbody>
      </div>



      <!-- Privacy Policy Link -->

    </section>
  </main>

  <footer>
    <p>You are here: NewsLetter Setup</p>
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