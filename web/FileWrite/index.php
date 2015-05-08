<?php include "../Assets/Inclusions/Main.php" ?>
<!DOCTYPE html>
<html>
  <head>
    <title><?= $siteName ?> / Write to a File</title>
    <!-- Metadata -->
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta id="viewport" name="viewport" content ="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Links -->
      <link rel="shortcut icon" href="Assets/Images/favicon.png">
      <link rel="stylesheet" href="../Assets/Stylesheets/Main.css">
  </head>
  <body>
    <div class="container">
      <h4><?= $siteName ?></h4>
      <?php if($_POST): ?>
      <?php
        // Write the provided content to the file
        $fileWriteDemoFile = fopen("FileWriteDemo.txt", "w+");
        fwrite($fileWriteDemoFile, $_POST['file_content']);
        $writtenContent = file_get_contents("FileWriteDemo.txt");
        fclose($fileWriteDemoFile);
      ?>
        <p>The following was written and pulled from the file:</p>
        <p class="well"><?= $writtenContent ?></p>
      <?php else: ?>
        <form method="post">
          <label for="fileContent">Text to write:</label><br />
          <input type="text" id="fileContent" name="file_content"><br />
          <input type="submit" value="Write it!">
        </form>
      <?php endif; ?>
      <a href="/" class="gmooh">Get me out of here</a>
    </div> <!-- .container -->
  </body>
</html>