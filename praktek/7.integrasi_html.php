<?php

const TUHAN = "ALLAH SWT";

$hamba = "muhammad fajrin saputra";

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      
      <!-- //* kita bisa menggunakan tag php <?php ?> -->
   <h1> tuhan saya dan semesta alam adalah <?php echo TUHAN ?></h1>

   <h5>dan saya adalah seorang hamba milik <?php echo TUHAN ?> dengan nama <?php echo $hamba ?></h5>

   <!-- bisa juga dengan alternatif <?= $data ?> jika suatu kode hanya menampilkan variabel -->
    <!-- kode <?= $data ?> sama dengan <?php echo $data ?> -->

    <h3> semua ini adalah milik <?= TUHAN ?></h3>

</head>
<body>
   
</body>
</html>