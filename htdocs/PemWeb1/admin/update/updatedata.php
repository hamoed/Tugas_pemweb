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
      $query=mysqli_query($koneksi,"UPDATE `database1` SET `nama_sekolah`='$nama',`alamat`='$alamat',`desa`='$desa',`kecamatan`='$kecamatan',`kota`='$kota',`jenjang`='$jenjang',`status`='$status',`akreditasi`='$akreditasi' WHERE `NPSN`='$npsn'");
    if ($query) 
    {
       include 'promp2.php';
    }
    else
    {
        include 'promp3.php';
    }
?>