<?php include "../Assets/Inclusions/Main.php" ?>
<!DOCTYPE html>
<html>
  <head>
    <title><?= $siteName ?></title>
    <!-- Metadata -->
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta id="viewport" name="viewport" content ="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Links -->
      <link rel="shortcut icon" href="Assets/Images/favicon.png">
      <link rel="stylesheet" href="Assets/Stylesheets/Main.css">
  </head>
  <body>
    <div class="container">
      <h4><?= $siteName ?></h4>
      <ul>
        <li><a href="/BasicForm/index.php">Basic Form</a></li>
        <li><a href="/FetchDataFromClass/index.php">Fetch Data from a Class</a></li>
        <li><a href="/FileWrite/index.php">Write to a File</a></li>
        <li><a href="/ImageUpload/index.php">Upload an Image</a></li>
      </ul>
    </div> <!-- .container -->
  </body>
</html>