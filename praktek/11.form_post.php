<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Form Post</title>
</head>

<body>
   <h1>ini materi <b>FORM POST</b></h1>

   <form action="11.2form_post.php" method="post">

      <input type="text" name="input">

      <button type="submit" name="kirim">kirim</button>
   </form>

   <?php

   ?>
   <?php


   ?>
   <?php if (isset($_POST["kirim"])) :  ?>


      <h2>ini adalah hasil input dari form post <?PHP echo ($_POST["input"])  ?></h2>

   <?php endif ?>


</body>

</html>