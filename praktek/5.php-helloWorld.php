<?php
$judul = "hello world";

$sapa = "assalamualaikum dunia";

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> <?= ucwords($judul) ?> </title>
 <!--  jika simple atau hanya ingin menampilkan dengan echo, kita cukup menulis tag php nya dengan  < ?= ?> seperti pada contoh diatas"  -->

 <!-- ucowrd() string function yang berguna untuk merubah setiap karakter pertama menjadi huruf besar -->
 <h1> <?php echo  ucwords($sapa) ?> </h1>
</head>
<body>
   
</body>
</html>


<?php
//* perhatikan saat membuka alamat pada browser kita menggunakan tanda - , untuk menyanmbung jika alamat url lebih dari satu kata,
//* bisa juga dengan tanda _ atau underscore 
//* silahkan pilih, asalkan jangan dengan spasi , meskipun spasi dapat berjalan , tetapi itu tidak di rekomendasikan
?>