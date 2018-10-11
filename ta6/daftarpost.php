<?php
include_once 'koneksi.php';
session_start();
$nim = $_SESSION['nim'];
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DaftarPost</title>
  </head>
  <body>

      <table>
        <tr>
          <td colspan="4"><h1><center>Daftar Postingan</center></h1></td>
        </tr>
        <tr>
          <th>Post</th>
          <th>Foto</th>
          <th>Action</th>
        </tr>
        <?php
          $sql = $conn->prepare("SELECT * FROM posting WHERE nim = '$nim'");
          $sql->execute();
          $row = $sql->fetch(PDO::FETCH_ASSOC);
        ?>
        <tr>
          <td><?php echo $row['isi_posting']; ?></td>
          <td><img src="<?php echo $row['upload_foto'];?>" width="200px"></td>
          <td><a href="edit_posting.php?nim=<?php echo $row['nim']; ?>">edit</a> </td>
        </tr>
      </table>

  </body>
</html>
