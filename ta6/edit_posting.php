<?php
include 'halamanawal.php';
include_once 'koneksi.php';
session_start();

  $nim = $_GET['nim'];
  $sql = $conn->prepare("SELECT * FROM posting WHERE nim = '$nim'");
  $sql -> execute();
  $row = $sql -> fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>edit posting</title>
  </head>
  <body>
    <form method="post" enctype="multipart/form-data">
      <center>
        <table>
          <tr>
            <td colspan="2"><h1><center>Edit Posting</center></h1></td>
          </tr>
          <tr>
            <td>Post</td>
            <td><textarea name="posting" rows="20" cols="80">
                          <?php echo $row['isi_posting']; ?></textarea></td>
          </tr>
          <td>Upload Foto</td>
          <td><input type="file" name="gambar"></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" name="submit" value="posting"></td>
        </tr>
        </table>
      </center>
    </form>
  </body>
</html>

<?php
if (isset($_POST['submit'])) {
  if (isset($_GET['nim'])) {
    $posting = $_POST['posting'];
    $nama_gambar = $_FILES['gambar']['name'];
    $temp_gambar = $_FILES['gambar']['tmp_name'];
    $dir = "upload/";
    $tempat_gambar = $dir.$nama_gambar;
    $upload = move_uploaded_file($temp_gambar,$tempat_gambar);
    if (explode(' ',$posting) >= 30) {
      if ($nim != 0) {
        $sql =$conn->prepare("UPDATE posting SET isi_posting = '$posting',
              upload_foto = '$tempat_gambar',nim = '$nim' WHERE nim = '$nim'");
        $sql->execute();
        header("location: halamanawal.php");
      }else {
        echo "gagal";
      }

    }else {
      echo "jumlah kata minimal 30";
    }

  }
}
 ?>
