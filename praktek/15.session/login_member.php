<?php
session_start();

if ($_SESSION["login"] != true) {
   header('location: 15.session.php');
   exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>dasboard member</title>
</head>

<body>

   <h1>selamat datang <?= $_SESSION["name"] ?> </h1>


   <a href="log_out.php">log out</a>
</body>

</html>