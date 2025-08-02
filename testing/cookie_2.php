 <?php

   $salam = "";
   if (!empty($_COOKIE["name"]) == true) {

      $salam = "cookie anda tersedia" . $_COOKIE["name"];
   } else {
      $salam = "cookie belum di set";
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

    <?= $salam ?> <br> <br>
    <?php if ($salam == "") : ?>

       <h1>data anda kosong</h1>
    <?php else : ?>
       <h1> <?= $salam ?> </h1>
    <?php endif  ?>
 </body>

 </html>

 <!-- 
<?php

var_dump(isset($_COOKIE["name"]));
var_dump($_COOKIE["name"]);
?> -->