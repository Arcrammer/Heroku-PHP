<?php include "../Assets/Inclusions/Main.php" ?>
<!DOCTYPE html>
<html>
  <head>
    <title><?= $siteName ?> / Fetch Data From a Class</title>
    <!-- Metadata -->
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta id="viewport" name="viewport" content ="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Links -->
      <link rel="shortcut icon" href="Assets/Images/favicon.png">
      <link rel="stylesheet" href="../Assets/Stylesheets/Main.css">
  </head>
  <body>
    <?php
      // Create an instance of `Person()` and set some properties of it
      $me = new Person();
      $me->firstName = "Armani";
      $me->middleName = "S.";
      $me->lastName = "Valtier";
      $me->age = 19;
    ?>
    <div class="container">
      <h4><?= $siteName ?></h4>
      <p class="middish">Hello, <?= $me->name("Alexander", "Rhett", "Crammer") ?>!</p>
      <a href="/" class="gmooh">Get me out of here</a>
    </div> <!-- .container -->
  </body>
</html>