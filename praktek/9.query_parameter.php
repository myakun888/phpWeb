<?php
$judul = "query parameter";
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>
      <?= $judul ?>
   </title>
</head>
<!-- membuat queri parameter pada url diawali dengan tanda ? , tanda tanya 
 contoh
 localhost/data.php/?key = value -->
<h1>nama yang di inputkan pada queri diatas adalah <?php echo $_GET["nama"] ?> </h1>

<!-- multipel atau lebih dari satu -->
<h1>nama di parameter ini dengan key nama juga adalah <?= $_GET["namajuga"] ?> </h1>
<!-- jika lebih dari satu parameter maka di tambahkan dengan tandan & key = valuenya 
 contoh
 localhost/data.php?key=value&key=value
 -->


<!-- queri parameter array -->
<p>
   secara default queri parameter menggunakan array key dan value, jadi jika kita memasukan lebih dari satu <br> parameter dengan nama key yang sama, maka yang di ambil adalah value dari key yang terakhir <br>


   contoh <br>
   localhost/data.php?nama=cristiano&nama=ronaldo <br>
   saat kita menggambil variabel $_GET["nama"] , maka value nya adalah ronaldo <br>

   lalu bagaimana jika ingin mengambil semua, maka gunakan tanda [] setelah key nya <br>

   localhost/data.php?nama[]=cristiano&nama[]=ronaldo <br> seperti kita menambahkan array pada php

   //todo buka komentar jika ingin melihat nya
   <br>
<h1>hasilnya seperti di bawah ini</h1>
<!-- <?php var_dump($_GET["nama"]) ?> -->



</p>

<body>

</body>

</html>