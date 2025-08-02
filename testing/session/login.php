<?php

session_start();

if ($_SESSION['login'] != true) {

   header('location: session.php');
   # code...
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashbord</title>
</head>

<body>

   <h1>selamat datang <?= $_SESSION['name'] ?> </h1>

   <a href="logout.php">logout</a>


</body>

</html>