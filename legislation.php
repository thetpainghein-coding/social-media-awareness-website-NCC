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
  $content = $_POST['description'];

  if (isset($_FILES["img1"]) && $_FILES["img1"]["error"] == 0) {
    $filename1 = $_FILES["img1"]["name"];
    $filepath1 = $_FILES["img1"]["tmp_name"];
  }

  if (isset($_FILES["img2"]) && $_FILES["img2"]["error"] == 0) {
    $filename2 = $_FILES["img2"]["name"];
    $filepath2 = $_FILES["img2"]["tmp_name"];
  }

  if (!empty($filename2)) {
    $sql = "INSERT INTO howparenthelp(title, description, image1, image2) VALUES ('$title','$content','$filename1','$filename2')";
    if ($conn->query($sql) == TRUE) {
      move_uploaded_file($filepath1, "images/" . $filename1);
      move_uploaded_file($filepath2, "images/" . $filename2);
      // echo " Insert service successfully ";
      header("location:howparenthelpSetup.php");
    }
  } else {
    $sql = "INSERT INTO howparenthelp(title, description, image1) VALUES ('$title','$content','$filename1')";
    if ($conn->query($sql) == TRUE) {
      move_uploaded_file($filepath1, "images/" . $filename1);
      // echo " Insert service successfully ";
      header("location:howparenthelpSetup.php");
    }
  }

  // $sql = "INSERT INTO newsletter(title, content, image) VALUES ('$title','$content','$filename')";

}


if (isset(($_GET['deleteid']))) {
  $delid = $_GET['deleteid'];
  $sql = "DELETE FROM howparenthelp WHERE id=$delid;";

  if ($conn->query($sql) == TRUE) {
    // echo " Deleting service successful ";
    header("location:howparenthelpSetup.php");
  }
}

if (isset(($_GET['editid']))) {
  $editid = $_GET['editid'];

  $sql = "SELECT * FROM howparenthelp WHERE id='$editid'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $prev_img1 = $row['image1'];
  $prev_img2 = $row['image2'];
} else {
  $sql = "SELECT * FROM newsletter";
  $result = $conn->query($sql);
}

if (isset($_POST['btnUpdate'])) {
  $id = $_POST['id'];
  $title = $_POST['title'];
  $description = $_POST['description'];

  if (isset($_FILES["img1"]) && $_FILES["img1"]["error"] == 0) {
    $filename1 = $_FILES["img1"]["name"];
    $filepath1 = $_FILES["img1"]["tmp_name"];
    move_uploaded_file($filepath1, "images/" . $filename1);
  } else {
    $filename1 = $prev_img1;
  }

  if (isset($_FILES["img2"]) && $_FILES["img2"]["error"] == 0) {
    $filename2 = $_FILES["img2"]["name"];
    $filepath2 = $_FILES["img2"]["tmp_name"];
    move_uploaded_file($filepath1, "images/" . $filename2);
  } else {
    $filename2 = $prev_img2;
  }


  // $sql = "UPDATE howparenthelp SET title='$title',content='$content',image ='$filename', publishdate='$og_publish_date' WHERE id= '$id'";
  $sql = "UPDATE howparenthelp SET title='$title',description=' $description',image1='$filename1',image2='$filename2' WHERE  id= '$id'";
  if ($conn->query($sql) == TRUE) {
    // echo " Insert service successfully ";
    header("location:howparenthelpSetup.php");
  }
}

if (isset($_POST['btnCancel'])) {
  header("location:howparenthelpSetup.php");
}


$sql1 = "SELECT * FROM howparenthelp";
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
    <h1>How Parent Help Set up</h1>
    <!-- Custom Cursors and 3D Illustrations can be added here -->
  </header>

  <main>
    <section id="contact">
      <div class="admin-form">
        <h2>Parent Help Feed Form</h2>

        <!-- Contact Form -->
        <form action="#" method="post" enctype="multipart/form-data">

          <input type="hidden" id="id" name="id" value="<?php echo isset($row['id']) ?  $row['id'] : "" ?>">

          <label for="name">Title:</label>
          <input type="text" id="title" name="title" value="<?php echo isset($row['title']) ?  $row['title'] : '' ?>" required />

          <label for="description">Message:</label>
          <textarea id="description" name="description" rows="4" required><?php echo isset($row['description']) ?  $row['description'] : '' ?></textarea>

          <label for="img">Images:</label>

          <?php if (isset(($_GET['editid']))) { ?>
            <label class="pre-img-lbl">Previous Image:</label>
            <img src="<?php echo isset($row['image1']) ?  "images/" . $row['image1'] : ""  ?>" alt="Image" class="pre-img">
            <input type="file" id="img1" name="img1" id="formFile" class="form-control" />
            <label class="pre-img-lbl">Previous Image:</label>
            <img src="<?php echo isset($row['image2']) ?  "images/" . $row['image2'] : ""  ?>" alt="No Image" class="pre-img">
            <input type="file" id="img2" name="img2" id="formFile" class="form-control" />
            <button type="submit" name="btnUpdate">Update</button>
          <?php } else { ?>
            <input type="file" id="img1" name="img1" id="formFile" class="form-control" required />
            <input type="file" id="img2" name="img2" id="formFile" class="form-control" />
            <button type="submit" name="btnSave">Save</button>

          <?php } ?>
        </form>
        <form action="#" method="post" class="cancel-form">
          <button type="submit" name="btnCancel" class="cancel-btn">Cancel</button>
        </form>

        <!-- Privacy Policy Link -->
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
          <table border="0" cellspacing="5" cellpadding="5px">
            <thead>
              <tr>
                <th class="table-id-col">Id</th>
                <th class="table-title-col">Title</th>
                <th class="table-description-col">Description</th>
                <th class="table-images-col" colspan="2">Images</th>
                <th class="table-action-col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              while ($row = $result->fetch_assoc()) {
              ?>

                <tr>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['title']; ?></td>
                  <td><?php echo $row['description']; ?></td>
                  <td><?php echo '<img src="' . 'images/' . $row['image1'] . '" alt="Image"  >'; ?></td>
                  <td><?php echo '<img src="' . 'images/' . $row['image2'] . '" alt=""  >'; ?></td>
                  <td>
                    <a type="button" class="btn btn-warning" href="howparenthelpSetup.php?editid=<?php echo $row['id'] ?>"> Edit </a>

                    <a type="button" class="btn btn-danger" href="howparenthelpSetup.php?deleteid=<?php echo $row['id'] ?>">Delete</a>
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

    </section>
  </main>

  <footer>
    <p>You are here: How Parent Help Setup</p>
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