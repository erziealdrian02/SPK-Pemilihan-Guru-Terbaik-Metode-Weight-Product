<?php
session_start();
include './process/koneksi.php';

if (isset($_GET['id'])) {
   if ($_GET['id'] == 'false') {
      echo "<script>alert('username / password salah. Gagal masuk.')</script>";
      header("Location: index.php");
      exit;
   } else if ($_GET['id'] == 'out') {
      echo "<script>alert('Anda belum masuk, silahkan masuk.')</script>";
      header("Location: index.php");
      exit;
   } else {
      echo "<script>alert('Logout berhasil.')</script>";
      header("Location: index.php");
      exit;
   }
}

if (isset($_POST['submit'])) {
   $username = mysqli_real_escape_string($connect, $_POST['username']);
   $password = mysqli_real_escape_string($connect, $_POST['password']);

   $sqllogin = "SELECT * FROM pengguna WHERE username='$username' AND password='$password'";
   $querylogin = mysqli_query($connect, $sqllogin);

   if (mysqli_num_rows($querylogin) > 0) {
      $row = mysqli_fetch_assoc($querylogin);
      $_SESSION['username'] = $username;
      $_SESSION['nama_pengguna'] = $row['nama_pengguna'];
      $_SESSION['profile'] = $row['profile'];
      $_SESSION['stat'] = 'masuk';
      echo "<script>alert('Berhasil masuk, selamat datang " . $row['nama_pengguna'] . "')</script>";
      header("Location: landing-page.php");
      exit;
   } else {
      echo "<script>alert('Username/password salah')</script>";
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>Login Sistem Pendukung Keputusan</title>
   <link rel="stylesheet" href="./css/login.css">
</head>

<body style="background-color: whitesmoke;">
   <div class="align">
      <div class="text-top" style="margin-top: 100px;">
         <h3 style="color: black; font-size: 15px; text-align:center">Sistem Pendukung Keputusan Pemilihan Guru Terbaik dengan Metode Weight Product <br> Yayasan Pendidikan Haji Noor Hasyim SMP Wira Buana</h3>
      </div>
      <div class="login" style="margin-top: 10px;">
         <div class="bar">&nbsp;</div>
         <center>
            <h2>login</h2>
         </center>
         <form method="POST" role="form">
            <input type="text" id="username" name="username" placeholder="Username" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <button type="submit" name="submit" value="Masuk" style="width: 100%;">Login</button>
         </form>
      </div>
   </div>
</body>

</html>