<?php

session_start();
$_SESSION['favcolor'] = 'blue';
$_SESSION['favanimal'] = 'doggo';
 
?>

<!DOCTYPE html>
<html>
  <body>

    <?php
      // Echo session variables that were set on previous page
      echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
      echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
      print_r($_SESSION);
    ?>

  </body>
</html>

<?php
  session_unset();
  session_destroy();

?>