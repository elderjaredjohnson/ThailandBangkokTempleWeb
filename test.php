<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="teststyle.css?v=<?php echo time(); ?>">>

    <title>Image Gallery Using PHP</title>
  </head>

  <body>
    <div class="container">
      <!-- heading text -->
      <ul class="image-gallery">
        <?php
          // Enter your Directry/Folder Name I have Given Folder Name As Images
          $files = scandir('images/');
          foreach ($files as $file) {
            if ($file !== "." && $file !== "..") {
              // Give Image source -- src='folder-name/$file'
              echo "<li><img src='images/$file' alt=''/><div class='overlay'><span>$file</span></div></li>";
            }
          }
        ?>
        <!-- other items here -->
      </ul>
    </div>
  </body>
</html>
