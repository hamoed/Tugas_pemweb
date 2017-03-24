<!DOCTYPE html>
<html>
  <script type="text/javascript">
    function alert()
    {
      alert("username atau password salah !!!");
    }
  </script>
<?php
  include "../koneksi.php";
  $user = $_POST['user'];
  $pass     = $_POST['pass'];
  $login = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$user' AND password='$pass'");
  $login_admin = mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$user' AND password='$pass'");
  $ketemu= mysqli_num_rows($login);
  $ketemu_admin= mysqli_num_rows($login_admin);
  $r1= mysqli_fetch_array($login_admin);
  $r = mysqli_fetch_array($login); 
  if ($ketemu)
  {
    session_start();
    $_SESSION[Username]     = $r[username];
    $_SESSION[Password]     = $r[password];
    header('location: ../beranda.php?module=home');
  }
  elseif ($ketemu_admin) 
  {
    session_start();
    $_SESSION[Username1]     = $r1[username];
    $_SESSION[Password1]     = $r1[password];
    header('location: ../admin/beranda_admin.php?module=admin');
  }
  else
  {
    header('location: orapas.php');
  }
?>