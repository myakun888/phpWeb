<?php

//! adalah mengalihkan suatu ke halaman lain yang sudah kita tentuakan
//* dalam pembuatan web ridirect biasa terjadi
/**
 * riderect bisa kita lakuakn ke halaman domain sendir atau ke domain eksternal
 * 
 * jika di dalam domain sendiri kita cukup tuliskan path nya saja
 * 
 * jika domain eksternal kita tulis alamat domain lengkap nya
 * 
 * 
 * membuat riderect dalam php kita cukup gunakan function header("location: lokasi path");
 * 
 * contoh domain sendiri
 * header("location: admin.php") ini artinya ridirect / dialihkan ke halaman file admin.php
 * 
 * contoh domain exkternal
 * 
 * header("location:https://google.com") artinya menuju https://google.com
 * 
 *  */

$data = null;


$username = "muhammad fajrin";
$pass = "muhammad";

if (isset($_POST["sub"])) {

   if ($_POST["input_Email"] == $username && $_POST["input_Password"] == $pass) {
      $data = "login";

      header("location: 13.ridirect_login.php");
   } else {

      $data = "gagal";
   }
}

// var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>header</title>
</head>

<body>

   <form action="" method="post">
      <label for="emai">email</label>
      <input type="text" name="input_Email" id="email" placeholder="masukan email anda"><br> <br>

      <label for="pass">password</label>
      <input type="text" name="input_Password" id="pass" placeholder="masukan password anda">
      <br><br>
      <button type="submit" name="sub">LOGIN</button>


   </form>
   <!-- <h1>gas</h1> -->
   <h1><?= $data ?></h1>
</body>

</html>