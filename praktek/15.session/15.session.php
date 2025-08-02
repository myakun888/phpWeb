<?php
// ini menandai session di mulai
session_start();

//ini logic, jika kita sudah login maka akan langsung ke halaman login_member
//jika variabel session login ada , dan  session login bernilai true
if (isset($_SESSION["login"]) && $_SESSION["login"] == true) {
   # code...
   // maka langsung ke halaman member
   header("location: login_member.php");
   exit();
};

// 

$info = "";

// jika ada request post  
if ($_SERVER['REQUEST_METHOD'] == "POST") {
   // maka lakukan pengecekan, jika paswword dan username nya cocok / true , maka login 
   // note: baiknya untuk user email dan pass word di tarik dari database
   //ini hanya contoh 
   if ($_POST["u_name"] == "muhammad" && $_POST["password"] == "saw") {

      // jika sukes , maka akan di arahkan ke halaman login_member
      header("location: login_member.php");
      // lalu kita mengisi / membuat array dengan nama key 'login' yang bernilai true;
      $_SESSION['login'] = true;
      $_SESSION['name'] = $_POST["u_name"]; // ini mengisi nya diamabil dari $_POST
      // bisa juga dnegan cara biasa seperti , $_SESSION['nama]="muhammad";
   } else {

      // jika password gagal maka variabel info akan di isi dengan value 'gagal login', lalu di tamplkan
      $info = "gagal login";
   }
}
?>

<!DOCTYPE html>

<head>
   <title>session login oke</title>
</head>

<h1>ini session login oke</h1>

<form action="15.session.php" method="post">

   <input type="text" name="u_name" placeholder="email anda"> <br><br>
   <input type="text" name="password" placeholder="password anda"> <br><br>
   <button type="submit" name="kirim">LOGIN</button>

</form>

<!-- logic ini , jika variabel info berisi value 'gagal login', maka tampilkan  -->
<?php if ($info == "gagal login") : ?>
   <h2> <?= $info ?> </h2>
<?php endif ?>



</html>