<html>
<script type="text/javascript">
function konfirmasi() {
    answer = confirm("Anda Yakin ??")
    if (answer)
    {
        return true;
    }
    else
    {
      deletedata.ver.focus();
        return false;
    }
}
</script>
<?php
  include "../../koneksi.php";
  $id = $_POST['id'];
  $cek=mysqli_query($koneksi,"SELECT * FROM database1 WHERE NPSN='$id'");
  $ket= mysqli_num_rows($cek);
  if (!$ket)
  {
    //urungdadi
    include 'promp.php';
  }
  else
  {
      $row = mysqli_fetch_array($cek);
      include 'header.php';
  }
?>
<title>Delete</title>
<link rel="stylesheet" type="text/css" href="../../pintu_gerbang/login.css">
<head>
<div id="utama">
      <div class="header">
      <div class="header-isi">
        <div class="gambar1">
            <div class="header-isi" align="center">
              <br align="center"><br>DELETE DATA</br></br>
              <form id="deletedata" method="post" action="hapustemenan.php" onsubmit="return konfirmasi();">
              <table>
                <tr>
                    <td><input class="login_regis" type="text" name="ver" id="ver" value=<?php echo $row['NPSN']?> readonly="1"></td>
                </tr>
                <tr>
                    <td class="login_regis"><?php echo $row['nama_sekolah']?></td>
                </tr>
                <tr>
                    <td class="login_regis"><?php echo $row['alamat']?></td>
                </tr>
                <tr>
                    <td class="login_regis"><?php echo $row['desa']?></td>
                </tr>
                <tr>
                    <td class="login_regis"><?php echo $row['kecamatan']?></td>
                </tr>
                <tr>
                  <td class="login_regis"><?php echo $row['kota']?></td>
                </tr>
                <tr>
                  <td class="login_regis"><?php echo $row['jenjang']?></td>
                </tr>
                <tr>
                  <td class="login_regis"><?php echo $row['status']?></td>
                </tr>
                <tr>
                  <td class="login_regis"><?php echo $row['akreditasi']?></td>
                </tr>
              </table>
              <br>
                <table border="0" align="center">
                  <tr>
                      <td><input type="submit" value="Hapus" class="tombol_login"></td>
                    </tr>
                </table>
              </form>
              </div></div></div></div></div></head>
</html>