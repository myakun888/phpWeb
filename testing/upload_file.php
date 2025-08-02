<?php



if (isset($_FILES["fileupload"])) {
   $file = $_FILES["fileupload"];
   $namaFile = $file["name"];
   $tmpFile = $file["tmp_name"];
   $erro = $file["error"];
   $lokasiTujuan = "/../file_upload/" . $namaFile;


   move_uploaded_file($tmpFile, __DIR__ . $lokasiTujuan . $namaFile);


   if ($erro === 0) {
      echo "nama file: " . $namaFile . "<br>";
      echo "lokasi temporary file " . $tmpFile . "<br> ";
      echo "lokasi tujuan file" . $lokasiTujuan . "<br>";
      echo "File path: " . __DIR__ . $lokasiTujuan . "<br>";
      echo $file["name"] . "<br>";
      // echo ceil(((int)$file["size"]) / 1000) . " byte" . "<br>";
      echo ((floor($file["size"]) / 1000000)) . "<br>";
      echo "File uploaded successfully.";
   } else {
      echo "Error uploading file: " . $file["error"];
   }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Upload File</title>
</head>

<body>

   <h1>form upload</h1>

   <form action="upload_file.php" method="POST" enctype="multipart/form-data">
      <input type="file" name="fileupload">
      <button type="submit">Upload</button>
</body>

</html>