<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pendaftaran</title>
  </head>
  <body>
    <form action="prosesregis.php" method="post" enctype="multipart/form-data">
      <center>
      <table>
        <tr>
          <td colspan="2"><center><h1>PENDAFTARAN</h1></center></td>
        </tr>
        <tr>
          <td>nama</td>
          <td>&nbsp;&nbsp;<input type="text" name="nama" maxlength="35"></td>
        </tr>
        <tr>
          <td>nim</td>
          <td>&nbsp;&nbsp;<input type="text" name="nim" min="10" maxlength="10" pattern="[1-0]" ></td>
        </tr>
        <tr>
          <td>kelas</td>
          <td><input type="radio" name="kelas" value="41-01">41-01 <input type="radio" name="kelas" value="41-02">41-02
              <input type="radio" name="kelas" value="41-03">41-03 <input type="radio" name="kelas" value="41-04">41-04</td>
        </tr>
        <tr>
          <td>jenis kelamin</td>
          <td><input type="radio" name="gender" value="Laki-Laki">Laki-Laki <input type="radio" name="gender" value="Perempuan">Perempuan</td>
        </tr>
        <tr>
          <td>Hobi</td>
          <td><input type="checkbox" name="hobi" value="menulis">Menulis
          <input type="checkbox" name="hobi" value="menggambar">menggambar
          <input type="checkbox" name="hobi" value="menjahit">menjahit</td>
        </tr>
        <tr>
          <td>Fakultas</td>
          <td>
            <select name="prodi">
              <option value="fakultas ilmu terapan">fakultas ilmu terapan</option>
              <option value="fakultas ekonomi dan bisnis">fakultas ekonomi dan bisnis</option>
              <option value="fakultas industri kreatif">fakultas industri kreatif</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>alamat</td>
          <td><textarea name="alamat" rows="5" cols="50"></textarea> </td>
        </tr>
        <tr>
          <td><input type="submit" name="submit" value="register"></td>
        </tr>
      </table>
    </center>
    </form>
  </body>
</html>
