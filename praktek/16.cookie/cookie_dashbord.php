<?php

$informasi = "";

if (empty($_COOKIE["name"])) {

   //untuk mengambil kita cukup gunakan $_COOKIE["KEY NYA"] // dalam contoh ini adalah name
   $informasi = "belum di set";
} else {

   $informasi = $_COOKIE["name"];
};
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>dashbord</title>
</head>

<body>


   <h1>informasi nama dari cookie anda, <?= htmlspecialchars($informasi) ?> </h1>


   <?php

   echo $_COOKIE["name"];

   //* atau
   $informasi = $_COOKIE["name"];
   echo $informasi;

   ?>
</body>

</html>