<?php
//* header itu ada di variabel global server $_SERVER
/**
 * header kita bisa gunakan untuk mengirim informasi tambahan di luar url, dan http method
 * karena berbentuk array jadi kita bisa gunakan keynya
 * header pada php otomatis di conversi ke UPPERCASE (huruf besar)
 * 
 * ciri header selalu di awali dengan prefix HTTP, 
 * jadi jika keyya kita buat dengan nama "informasi", maka akan menjadi "HTTP_INFORMASI"
 * jika menggunakan spasi, atau -, otomatis akan di ubah menjadi underscore _
 * 
 * 
 */

//* dalam contoh ini kita akan menangkap header, HTTP_HOST
/** 
 * untuk melihat ada berapa banyak header di php silahkan iterasi variabel $_SERVER
 */


$data = $_SERVER["HTTP_HOST"];
echo "sekarang kita berada pada host, $data";
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
      th {
         border: 2px solid green;
         text-transform: uppercase;
      }

      td {
         border: 2px solid greenyellow;
         text-align: center;
      }
   </style>
</head>

<body>

   <table>
      <tr>
         <th>key</th>
         <th>value</th>
      </tr>

      <?php foreach ($_SERVER as $key => $value) { ?>
         <tr>
            <td><?= $key ?></td>
            <td><?= $value ?></td>
         </tr>

      <?php } ?>


   </table>
   <hr>
   <h2>ini ngirim header</h2>

   <!-- mengirim header, secar default tidka bisa dari browser kecuali jika kita membuat api , bisa dengan script js fetch(), atau dengan libray axios dll, atau bisa juga dengan aplikasi pihak ketiga disni kita coba dengan POSTMAN -->
   <!-- kita kirim dengan key nya "HTTP_KIRIM" -->
   akan error jika di jalankan di browser, tapi jika di lihat dari postman semua berjalan lancar <br>

   <h3> <?= $_SERVER["HTTP_KIRIM"] ?></h3>
   <hr>
   <h2>menambahkan respone header</h2>
   <!-- kita juga bisa  menambah respone header  yang kita ingin kirimkan, dengan menggunakan function header('key : value'),  ini keyvalue nya dalam satu string-->

   <?php header('author : fajrin saputra'); ?>
   <!-- untuk melihanya dengan postman di bagian respone header nya -->
   silahkan lihat di postman ny di bagian respone header , yang dikirim adalah "author: fajrin saputra"
</body>

</html>