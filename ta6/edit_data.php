<?php
include 'halamanawal.php';
include_once 'koneksi.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>list</title>
  </head>
  <body>
    <table border="1">
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Kelas</th>
        <th>Gender</th>
        <th>Hobi</th>
        <th>Prodi</th>
        <th>Alamat</th>
        <th>action</th>
      </tr>

      <?php
      $sql = $conn->prepare("select * from pendaftaran");
      $sql -> execute();

     while ($row = $sql -> fetch(PDO::FETCH_ASSOC)) {
       ?>
         <tr>
           <td><?php echo $row['id'] ; ?> </td>
           <td><?php echo $row['nama']; ?> </td>
           <td><?php echo $row['nim']; ?> </td>
           <td><?php echo $row['kelas']; ?> </td>
           <td><?php echo $row['gender']; ?> </td>
           <td><?php echo $row['hobi']; ?> </td>
           <td><?php echo $row['fakultas']; ?> </td>
           <td><?php echo $row['alamat']; ?> </td>
           <td><a href="update.php?id=<?php echo $row['id'];?>">edit</a></td>
         </tr>
         <?php
     }
      ?>
      <tr>
        <td><a href="login.php <?php session_destroy(); ?>">Logout</a></td>
      </tr>
   </table>
  </body>
</html>
