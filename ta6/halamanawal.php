<?php
  include_once 'koneksi.php';
  session_start();
  $nim = $_SESSION['nim'];

  $sql = $conn ->prepare("SELECT * FROM pendaftaran WHERE nim = '$nim'");
  $sql->execute();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>halaman awal</title>
  </head>
  <body>
    <form action="" method="post" enctype="multipart/form-data">
      <center>
        <h1>Hello, <?php echo $_SESSION['nama'];?> :)</h1><br>
        <h3>Menu</h3>
        <a href="update.php" style="text-decoration: none">Edit Profile</a><br><br>
        <a href="posting.php" style="text-decoration: none">Posting Sesuatu</a><br><br>
        <a href="daftarpost.php" style="text-decoration: none">Daftar postingan</a> <br><br>
        <a href="#" style="text-decoration: none">Semua Postingan</a><br><br>
        <a href="login.php" style="text-decoration: none">Logout</a>
      </center>
    </form>
  </body>
</html>
