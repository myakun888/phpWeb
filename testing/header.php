<?php


$data = $_SERVER["testing"] = "sip";
// header('infor : xxx');
// header('autor : fajrin saputra');

header('autor : fajrin');
header('istri : dianwisora');

// exit()

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Header</title>
</head>

<style>
   body {
      color: black;
   }

   tr {
      border: 20px dashed yellow;
   }

   th {
      border: 5px solid gold;
      background-color: green;
      border-top-right-radius: 25px;
      border-top-left-radius: 25px;
   }

   td {
      border: 5px solid blue;
      /* border-spacing: 10px; */
      border-top-right-radius: 25px;
      border-top-left-radius: 25px;
      border-bottom-left-radius: 25px;
      border-bottom-right-radius: 25px;
      text-align: center;

   }

   table {
      /* border: 10px solid red; */
      /* background-color: black; */
      /* border-spacing: 10px; */
      padding: 5px;
   }
</style>

<body>
   <h1>header</h1>

   <table>
      <th> key </th>
      <th>value</th>

      <?php foreach ($_SERVER as $key => $value) : ?>
         <tr>

            <td> <?= $key ?></td>
            <td> <?= $value ?></td>
         </tr>

         <!-- # code... -->
      <?php endforeach ?>

      </tr>

      <!-- <h2> <?php echo $_SERVE ?></h2> -->
   </table>

   <h2> <?= $_SERVER["REQUEST_TIME"];  ?> </h2>
</body>

</html>