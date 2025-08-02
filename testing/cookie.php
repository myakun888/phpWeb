<?php
setcookie("name", "muhammad");

header("location: cookie_2.php");




?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cookie</title>
</head>

<body>

   <?= $_COOKIE ?>
</body>

</html>