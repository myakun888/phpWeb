<?php

// var_dump($_GET);



// echo  $_GET["nama"];
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>


   <?php var_dump($_GET["nama"]) ?> <br>,<br>

   <?php echo "ini kita ambil index ke satu nilainya adalah" . " " . $_GET["nama"][1] ?>



   <form action="GET" method="get">

      <input type="text" name="user name">
      <input type="text" name="data">

      <button type="submit"></button>
   </form>
</body>

</html>