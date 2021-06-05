<?php 

$title = "Books";
$content = <img src="images/banner2.jpg" class="imgLeft" />

<html>
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title><?php echo $title; ?></title>
      <link rel="stylesheet" type="text/css" href="Styles/stylesheet.css" />
  </head>
  <body>

      <form action= "bookController.php" method="post">
          <input type="text" name="first" placeholder="Enter Genre"><br>

      </form>
  </body>
</html>