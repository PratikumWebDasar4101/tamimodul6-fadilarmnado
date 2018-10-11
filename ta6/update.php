<?php
include 'halamanawal.php';
include_once 'koneksi.php';
  $nim = $_SESSION['nim'];
  $sql = $conn -> prepare("select * from pendaftaran where nim = '$nim' ");
  $sql -> execute();

  $row = $sql -> fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit Profil</title>
  </head>
  <body>
    <form method="post">
      <center>
      <table>
        <tr>
          <td colspan="2"><h1><center>Edit Profil</center></h1> </td>
        </tr>
        <tr>
          <td>Nama</td>
          <td><input type="text" name="nama" value="<?php echo $row['nama']; ?>"></td>
        </tr>
        <tr>
          <td>NIM</td>
          <td><input type="text" name="nim" value="<?php echo $row['nim']; ?>" readonly></td>
        </tr>
        <tr>
          <td>kelas</td>
          <td><input type="radio" name="kelas" <?php if ($row['kelas'] == '41-01') {
              echo "checked";} ?> value="41-01">41-01

              <input type="radio" name="kelas" <?php if ($row['kelas'] == '41-02') {
              echo "checked";} ?> value="41-02">41-02

              <input type="radio" name="kelas" <?php if ($row['kelas'] == '41-03') {
                  echo "checked";} ?> value="41-03">41-03

              <input type="radio" name="kelas"  <?php if ($row['kelas'] == '41-04') {
                  echo "checked";} ?> value="41-04">41-04
          </td>
        </tr>
        <tr>
          <td>jenis kelamin</td>
          <td><input type="radio" <?php if ($row['gender'] == 'Laki-Laki') { echo "checked";} ?> name="gender" value="Laki-Laki">Laki-Laki
              <input type="radio" <?php if ($row['gender'] == 'Perempuan') { echo "checked";} ?> name="gender" value="Perempuan">Perempuan
          </td>
        </tr>
        <tr>
          <td>hobi</td>
          <td><input type="checkbox" name="hobi" <?php if ($row['hobi'] == 'menulis') { echo "checked";} ?> value="menulis">Menulis
          <input type="checkbox" name="hobi" <?php if ($row['hobi'] == 'menggambar') { echo "checked";} ?> value="menggambar">menggambar
          <input type="checkbox" name="hobi" <?php if ($row['hobi'] == 'menjahit') { echo "checked";} ?> value="menjahit">menjahit </td>
        </tr>
        <tr>
          <td>fakultas</td>
          <td><select name="prodi">
            <option <?php if ($row['fakultas'] == 'fakultas ilmu terapan') { echo "checked";} ?> value="fakultas ilmu terapan">fakultas ilmu terapan</option>
            <option <?php if ($row['fakultas'] == 'fakultas ekonomi dan bisnis') { echo "checked";} ?> value="fakultas ekonomi dan bisnis">fakultas ekonomi dan bisnis</option>
            <option <?php if ($row['fakultas'] == 'fakultas industri kreatif') { echo "checked";} ?> value="fakultas industri kreatif">fakultas industri kreatif</option>
          </select></td>
        </tr>
        <tr>
          <td>alamat</td>
          <td> <textarea name="alamat" rows="5" cols="50"><?php echo $row['alamat']; ?></textarea></td>
        </tr>
        <tr>
          <td><input type="submit" name="submit" value="Kirim"> </td>
        </tr>
      </table>
    </center>
    </form>
  </body>
</html>


<?php
if (isset($_POST['nama'])) {
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

  $sql = $conn -> prepare("UPDATE pendaftaran set nama = '$nama',
                  nim = '$nim', kelas = '$kelas',
                  gender = '$gender', hobi = '$hobi', fakultas = '$prodi',
                  alamat = '$alamat'
                  where nim = '$nim' ");
  $sql -> execute();

  if ($sql) {
    header("location: halamanawal.php");
  }else {
    echo "gagal";
  }
}
?>
