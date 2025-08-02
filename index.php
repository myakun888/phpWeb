<?php

$materi_belajar = [
   "http/https",
   "html",
   " css",
   "php dasar",
   "javascript"
];
$agenda_pembelajaran = [
   "pengenalan web",
   "client dan server",
   "membuat web dengan php dan server",
   "query parameter",
   "from post",
   "sesion",
   "cookie",
   "upload file",
   "dan lain lain",
];
$sumber_materi_belajar = [
   "php.net (dokumentasi resmi php)",
   "programmer zaman now",
   "w3school",
   "wpu unpass",
   "dan yang lainya",
];


//! ini function untuk membreakdown dengan for Each
function breakdown(array $nilai)
{

   foreach ($nilai as $key) {
      echo "<li> $key  </li>";
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Materi PHP Web</title>
   <style>
      body {
         padding: 10px;
         width: 1500px;
         color: blue;
         height: fit-content;
         align-content: center;
      }
   </style>
</head>

<body>
   <h1>
      Bismillahhirohmanirohim</h1>
   <h2> PHP Web </h2>

   <p>
      di materi ini kita akan melanjutkan menguasai PHP, pada materi ini kita akan membahas PHP web
      sebelum mempelajari baiknya mengerti beberapa hal berikut ini

   <ul>
      <?php
      breakdown($materi_belajar);

      ?>
   </ul>


   akan lebih baik jika mengerti juga PHP OOP, dan php database (mysql);

   </p>
   <h2>
      agenda pembelajaran

   </h2>
   <ul>

      <?php
      breakdown($agenda_pembelajaran);
      ?>
   </ul>

   <p>

      materi di ambil dari berbagai sumber, internet
      dan tak lupa kita ucapkan terimakasih diantaranya
   <ul>

      <?php
      breakdown($sumber_materi_belajar) ?>
   </ul>
   </p>
</body>

</html>