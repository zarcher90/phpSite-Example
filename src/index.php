<?php
  if(!isset($_COOKIE['allowAccess'])) {
    //redirect to login page
    header("Location:login/login.php");
    exit();
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Testing PHP Page</title>
  </head>
  <body>
    <h1>Testing PHP code</h1>
    <?php
    echo "i can continue to edit.... even on the fly";
    ?>
  </body>
</html>
