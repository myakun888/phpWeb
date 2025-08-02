<?php

session_start();


// if (isset($_SESSION["login"]) == true && $_SESSION['login'] == true) {
//    header('location: login.php');
// }

// if (isset($_SESSION["login"]) == true && $_SESSION['login'] == true) {
//    header('location: login.php');
// }

if (!empty($_SESSION['login'])) {
   header('location: login.php');
}

$info = "";


if ($_SERVER['REQUEST_METHOD'] == "POST") {
   # code...
   if ($_POST["u_name"] == "muhammad" && $_POST["pass"] == "saw") {


      //sukses
      $_SESSION['login'] = true;
      $_SESSION['name'] = "fajrin";
      $info = "berhasil LOGIN";
      header('location: login.php');


      # code...
   } else {
      $info = "gagal LOGIN";
   }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>session Form</title>
</head>

<body>
   <h1>FORM LOGIN</h1>
   <form action="session.php" method="post">


      <input type="text" name="u_name" placeholder="username anda"> <br><br>
      <input type="text" name="pass" placeholder="password anda"> <br><br>

      <button type="submit" name="kirim">kirim</button>
   </form>
   <h2>
      <?= $info; ?>
   </h2>
</body>

</html>