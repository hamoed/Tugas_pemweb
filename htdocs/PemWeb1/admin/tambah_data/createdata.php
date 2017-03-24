<?php
  include "../../koneksi.php";
  $npsn = $_POST['npsn'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $desa = $_POST['desa'];
  $kecamatan = $_POST['kecamatan'];
  $kota = $_POST['kota'];
  $jenjang = $_POST['jenjang'];
  $status = $_POST['status'];
  $akreditasi = $_POST['akreditasi'];
  $cek=mysqli_query($koneksi,"SELECT * FROM database1 WHERE NPSN='$npsn'");
  $ket= mysqli_num_rows($cek);
  if ($ket) 
  {
    include('promp.php');
  }
  else
  {
    $query=mysqli_query($koneksi,"INSERT INTO `database1`VALUES ('$npsn','$nama','$alamat','$desa','$kecamatan','$kota','$jenjang','$status','$akreditasi');");
    if ($query) 
    {
      include ('promp1.php');  
    }
    else
    {
      include ('promp2.php');   
    }
  }
?>