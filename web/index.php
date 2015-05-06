<?php
  // Enable bebugging
  $app["debug"] = true;
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
        <li><a href="BasicForm/">Basic Form</a></li>
      </ul>
    </div> <!-- .container -->
  </body>
</html>