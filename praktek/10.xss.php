<?php

$nama = $_GET["nama"];
$nama_belakang = $_GET["nama2"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>XSS (Cross-Site Scripting)</title>
</head>


<h1>hallo <?= $nama ?></h1>
<h1>hallo <?= $nama_belakang ?></h1>

<script>

</script>

<body>

</body>

</html>