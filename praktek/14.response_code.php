<?php

$hasil = null;
$username = "muhammad fajrin";
$pass = "bismillah";
if (isset($_POST["sending"])) {

   if ($_POST["username"] == $username && $_POST["password"] == $pass) {


      //* jika berhasil login akan di ridirect ke halaman di bawah ini
      header("location:14.response_code_login.php");
   } else {

      //  jika salah kita akan mengirimkan response code sperti ini
      http_response_code(404);

      //todo untuk melihat hasilnya silahkan buka di inspect browser dan di dalam header response nya
      $hasil = "gagal login";
      // exit();
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <h1>response code</h1>
   <form action="" method="post">

      <label for="uname">username</label>
      <input type="text" name="username" id="uname" placeholder="username anda"> <br>

      <label for="pass">password</label>
      <input type="text" name="password" id="pass" placeholder="username anda"> <br>
      <button type="submit" name="sending">kirim</button>


   </form>

   <h1>
      <?= $hasil ?>
   </h1>
</body>

</html>