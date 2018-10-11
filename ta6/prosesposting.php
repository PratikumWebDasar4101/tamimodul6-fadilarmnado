<?php
include_once 'koneksi.php';
  session_start();
  if (isset($_POST['submit'])) {
    $posting = $_POST['posting'];

    $nama_gambar = $_FILES['gambar']['name'];
    $temp_gambar = $_FILES['gambar']['tmp_name'];
    $dir = "upload/";
    $tempat_gambar = $dir.$nama_gambar;
    $upload = move_uploaded_file($temp_gambar,$tempat_gambar);
    $nim = $_SESSION['nim'];


    if (explode(' ',$posting) >= 30) {
      if ($nim != 0) {
        $sql =$conn->prepare("INSERT INTO posting(isi_posting,upload_foto,nim)
                VALUES ('$posting','$tempat_gambar','$nim')");
        $sql->execute();
        header("location: halamanawal.php");
      }else {
        echo "gagal";
      }

    }else {
      echo "jumlah kata minimal 30";
    }

  }
?>
