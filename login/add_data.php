<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tambah data</title>
  </head>
  <body>
    <h1>selamat datang!</h1>
    <form class="" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
      <table>
        <tr>
          <td>NIS</td>
          <td>  <input type="text" name="nis" value="" size="40"> </td>
        </tr>
        <tr>
          <td>Nama</td>
          <td>  <input type="text" name="nama" size="40" size="40"> </td>
        </tr>
        <tr>
          <td>alamat</td>
          <td>  <input type="text" name="alamat" value="" size="40"> </td>
        </tr>
        <tr>
          <td>password</td>
          <td>  <input type="text" name="password" value="" size="40"> </td>
        </tr>
        <tr>
          <td></td>
          <td>  <input type="submit" name="" value="simpan" size="40"> </td>
        </tr>
      </table>
    </form>
    <button type="button" name="logout" style="margin-left:67.5px; width:59px;"><a href="logout.php">logout</a>
</button>
  </body>
</html>

<?php

require_once "./connect.php";
if (isset($_POST['nis']) && isset($_POST['nama'])) {
  $nis = $_POST['nis'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $password = $_POST['password'];

  $sql = "INSERT INTO tb_siswa VALUES ('" .$nis. "', '" .$nama. "', '" .$alamat. "', '".$password."')";
  $result = mysqli_query($connect, $sql);
  if ($result) {
    echo 'data berhasil ditambahkan';
  }
  else {
    echo 'gagal menambahkan data <br/>';
echo mysqli_error($connect);
  }
}
echo '<hr />';
require_once "./record.php";

 ?>
