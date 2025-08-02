<?php

$data = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {

   if ($_POST['email'] == "muhammad" && $_POST['pass'] == "saw") {
      setcookie("name", "fajrin", time() + 60 * 2, "/praktek/16/cookie/");

      header("location: cookie_dashbord.php");
      exit();
   } else {

      $data = 'email atau password anda salah';
   }
   //    # code...
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>cookie</title>
</head>

<body>

   <h1>cookie</h1>

   <form action="cookie_login.php" method="post">
      <input type="text" name="email" id="" placeholder="email"> <br><br>
      <input type="text" name="pass" id="" placeholder="password"> <br><br>
      <button type="submit" name="kirim">kirim</button>
   </form>

   <?php if (!$data == "") : ?>
      <h3> <?= $data ?> </h3>

   <?php endif   ?>

   <h1><?php echo $_COOKIE["name"] ?></h1>
</body>

</html>