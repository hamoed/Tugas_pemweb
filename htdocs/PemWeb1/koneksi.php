<?php
	$db_host='localhost';
	$db_user='root';
	$db_password='';
	$db_nama='pemweb1';
	$koneksi=mysqli_connect($db_host, $db_user, $db_password, $db_nama);
	if (!$koneksi) 
	{
		die('Gagal terhubung dengan database : '.mysqli_connect_error());
	}
?>