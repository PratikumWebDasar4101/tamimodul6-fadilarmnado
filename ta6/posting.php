<?php include 'halamanawal.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Posting</title>
  </head>
  <body>
    <form  action="prosesposting.php" method="post" enctype="multipart/form-data">
      <center>
      <table>
        <tr>
          <td colspan="2"><h1><center>Postingan</center></h1> </td>
        </tr>
        <tr>
          <td>Post</td>
          <td><textarea name="posting" rows="20" cols="80"></textarea></td>
        </tr>
        <tr>
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
