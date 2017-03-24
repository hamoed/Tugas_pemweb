<html>
<link rel="stylesheet" type="text/css" href="login.css">
<head>
	<div id=utama></div>
</head>
<?php
	session_start();
    if(isset($_SESSION['Username1']))
    {
        header("Location: ../admin/beranda_admin.php");
    }
    else
    {

    }
?>
<script type="text/javascript">
	window.onload =function() {
    alert("Username atau Password anda salah !!!")
    window.location = "login.php";
}
</script>
</html>