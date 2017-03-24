<?php
  include "koneksi.php";
  $usernew = $_POST['usernew'];
  $namenew = $_POST['namenew'];
  $passnew = $_POST['passnew'];
  $cek=mysqli_query($koneksi,"SELECT * FROM user WHERE username='$usernew'");
  $ket= mysqli_num_rows($cek);
  if ($ket) 
  {
  	echo "<center>LOGIN GAGAL! <br>User Account sudah ada !!<br>";
    echo "<a href=createuser.php><b>ULANGI LAGI</b></a></center>";
  }
  else
  {
	  $query=mysqli_query($koneksi,"INSERT INTO `user`(`username`, `password`, `nama`) VALUES ('$usernew','$passnew','$namenew')");
  	if ($query) 
  	{
  		echo "<center>BERHASIL !!! <br>User Account Dibuat<br>";
  	  echo "<a href=login.php><b>LOGIN</b></a></center>";
  	}
  	else
  	{
  		echo "<center>LOGIN GAGAL! <br>User Account Gagal Dibuat!!<br>";
    	echo "<a href=createuser.php><b>ULANGI LAGI</b></a></center>";
  	}
  }
?>