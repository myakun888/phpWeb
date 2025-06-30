<?php
require_once __DIR__ .  "/11.2form_post.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>hasil dari form post</title>
</head>

<body>
   <h1> ini hasil dari form post <?= $_POST["input"] ?></h1>


   <a href="./11.form_post.php">kembali ke file awal</a>
</body>

</html>