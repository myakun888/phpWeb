<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>POST , menerima data</title>
</head>

<body>
   <?php
   $nama = $_POST["nama"]; // karena sudah masuk di variabel global $_POST
   ?>


   <h1>nama yang anda kirim adalah <?= $nama  ?></h1>
   <!-- //* ini contoh kita buat / bungkus dengan varibel -->
   <h1>nama yang anda kirim adalah <?= $_POST["nama"]  ?></h1>
   <!-- //* ini langsung -->


   <?php
   // if (condition) {
   //    # code...
   // } else {
   // }
   $n = 1;
   ?>

   <?php if ($n == 2) : ?>
      <h1>oke benar</h1>
   <?php else : ?>
      <!-- # code...
        -->
      <h1>salah</h1>
   <?php endif ?>


   <!-- ?> -->
</body>

</html>