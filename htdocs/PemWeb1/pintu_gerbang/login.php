<html>
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
	function cekData()
    {
        // Cek isi kotak teks username
        if (login.username.value == "")
        {
            alert("Username Harus Di Isi");
    	    login.username.focus();
            return false;
        }
        // Cek isi kotak teks password
        if (login.password.value == "")
        {
            alert("Password Harus Di Isi");
            login.password.focus();
            return false;
        }
        else
        return true;
    }
</script>
<title>Pintu Gerbang</title>
<link rel="stylesheet" type="text/css" href="login.css">
<head>
    <div id="utama">
    	<div class="header">
    	<div class="header-isi">
    		<div class="gambar">
         		<div class="header-isi" align="center">
         			<br align="center"><br>SIGN IN</br></br>
         		<form id="login" method="post" action="periksa.php" onsubmit="return cekData();">
				<table>
					<tr>
    					<td><input type="text" name="user" id="username" class="login_regis" placeholder="Username"></td>
					</tr>
					<tr>
    					<td><input type="password" name="pass" id="password" class="login_regis" placeholder="Password"></td>
					</tr>
				</table>
				<br>
					<table border="0" align="center">
						<tr>
    						<td><input type="submit" value="kirim" class="tombol_login"></td>
    					</tr>
    					<tr>
    						<td><input type="reset" value="reset" class="tombol_login"></td>
    					</tr>
					</table>
				</form>
         	</div>
         	</div>
         	<h3>
	 			<p align="center" class="copyright"><h>User baru </h><a href="createuser.php"><i>Buat akun</i></a></p>	
			</h3>
         </div>
         </div>
    </div>
</head>
</body>
</html>
