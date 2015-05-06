<?php
  // Enable bebugging
  $app["debug"] = true;
  error_reporting(E_ALL);
  include "Assets/Inclusions/Main.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title><?= $siteName ?></title>
    <!-- Metadata -->
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta id="viewport" name="viewport" content ="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Links -->
      <link rel="stylesheet" href="Assets/Stylesheets/Main.css">
  </head>
  <body>
    <div class="container">
      <h4><?= $siteName ?></h4>
      <ul>
        <li><a href="/BasicForm/index.php">Basic Form</a></li>
        <li><a href="/FetchDataFromClass/index.php">Fetch Data from a Class</a></li>
      </ul>
    </div> <!-- .container -->
  </body>
</html>