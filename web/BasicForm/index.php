<?php
  // Enable bebugging
  $app["debug"] = true;
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Confuso</title>
    <!-- Metadata -->
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta id="viewport" name="viewport" content ="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Links -->
      <link rel="stylesheet" href="../Assets/Stylesheets/Main.css">
  </head>
  <body>
    <div class="container">
      <h4>Basic Form</h4>
      <?php if ($_POST): ?>
      <p>Hello, <?= $_POST['firstName'] ?>!</p>
      <?php else: ?>
        <form method="post">
          <label for="firstName">First name:</label><br />
          <input type="text" id="firstName" name="firstName"><br />
          <input type="submit" value="Greet me!">
        </form>
      <?php endif; ?>
      <a href="/" class="gmooh">Get me out of here</a>
    </div> <!-- .container -->
  </body>
</html>