<?php

$nama = htmlspecialchars($_GET["nama"]);
$nama_belakang = $_GET["nama2"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>

   <h1> hallo <?= $nama ?> </h1>
   <h1><?= $nama_belakang ?></h1>
</body>

</html>