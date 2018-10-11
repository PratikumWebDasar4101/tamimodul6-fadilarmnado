<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <form action="login.php" method="post" enctype="multipart/form-data">
      <center>
      <table>
        <tr>
          <td colspan="2"><center><h1>LOGIN</h1></center> </td>
        </tr>
        <tr>
          <td>Nama</td>
          <td><input type="text" name="nama" ></td>
        </tr>
        <tr>
          <td>Nim</td>
          <td><input type="text" name="nim"></td>
        </tr>
        <tr>
          <td><input type="submit" name="submit1" value="Login"></td>
        </tr>
      </table>
    </center>
    </form>
  </body>
</html>


<?php
include_once 'koneksi.php';
session_start();
if (isset($_POST['submit1'])) {
  $nama = $_POST['nama'];
  $nim = $_POST['nim'];

  $sql = $conn ->prepare("SELECT * FROM pendaftaran WHERE nama = '$nama'
  AND nim = '$nim'");
  $sql->execute();

  $row = $sql -> rowcount();

  if ($row != 0){
    $_SESSION['nama'] = $nama;
    $_SESSION['nim'] = $nim;
    header("Location: halamanawal.php");
  }
  else {
    header("location: login.php");
  }
}
?>
