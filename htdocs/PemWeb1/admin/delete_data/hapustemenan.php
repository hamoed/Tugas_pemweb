<?php
  include "../../koneksi.php";
  $id = $_POST['ver'];
  $cek=mysqli_query($koneksi,"SELECT * FROM database1 WHERE NPSN='$id'");
  $ket= mysqli_num_rows($cek);
  if (!$ket)
  {
    include 'promp2.php';
  }
  else
  {
    $query=mysqli_query($koneksi,"DELETE FROM `database1` WHERE NPSN='$id'");
    include 'promp3.php';
  }
?>