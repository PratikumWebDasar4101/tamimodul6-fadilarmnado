<?php
include_once 'koneksi.php';
session_start();

if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $nim = $_POST['nim'];
  $kelas = $_POST['kelas'];
  $gender = $_POST['gender'];
  $hobi = $_POST['hobi'];
  $prodi = $_POST['prodi'];
  $alamat = $_POST['alamat'];

  $_SESSION['nama'] = $nama;
  $_SESSION['nim'] = $nim;
  $_SESSION['kelas'] = $kelas;
  $_SESSION['gender'] = $gender;
  $_SESSION['hobi'] = $hobi;
  $_SESSION['prodi'] = $prodi;
  $_SESSION['alamat'] = $alamat;

  $sql = "INSERT INTO pendaftaran(nama,nim,kelas,gender,hobi,fakultas,alamat)
          VALUES ('$nama','$nim','$kelas','$gender','$hobi','$prodi','$alamat')";
  $conn->exec($sql);
  if ($conn) {
    echo "berhasil masuk database";
    header("Location: login.php");
  }else {
    echo "gagal";
  }

}
?>
