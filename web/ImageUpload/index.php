<?php include "../Assets/Inclusions/Main.php" ?>
<!DOCTYPE html>
<html>
  <head>
    <title><?= $siteName ?> / File Upload</title>
    <!-- Metadata -->
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta id="viewport" name="viewport" content ="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Links -->
      <link rel="shortcut icon" href="../Assets/Images/favicon.png">
      <link rel="stylesheet" href="../Assets/Stylesheets/Main.css">
  </head>
  <body>
    <div class="container">
      <h4><?= $siteName ?></h4>
      <?php if ($_FILES): ?>
        <?php
          // Write the image to the hard drive
          move_uploaded_file($_FILES["image"]["tmp_name"], "UploadedImages/" . $_FILES["image"]["name"]);
        ?>
        <p>Is <em>this</em> what you've uploaded?</p>
        <p class="image-well"><img src="UploadedImages/<?= $_FILES["image"]["name"] ?>" alt="<?= $_FILES["image"]["name"] ?>"></p>
      <?php else: ?>
        <form enctype="multipart/form-data" method="post">
          <input type="file" name="image"><br />
          <input type="submit" value="Upload">
        </form>
      <?php endif; ?>
    </div> <!-- .container -->
  </body>
</html>