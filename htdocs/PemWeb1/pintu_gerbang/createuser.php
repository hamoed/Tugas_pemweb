<html>
<script type="text/javascript">
	function cekData()
    {
        // Cek isi kotak teks username
        if (sigup.namenew.value == "")
        {
            alert("Name Harus Di Isi");
    	    sigup.namenew.focus();
            return false;
        }
        if (sigup.usernew.value == "")
        {
            alert("Username Harus Di Isi");
            sigup.usernew.focus();
            return false;
        }
        // Cek isi kotak teks password
        if (sigup.passnew.value == "")
        {
            alert("Password Harus Di Isi");
            sigup.passnew.focus();
            return false;
        }
        else
        return true;
    }
</script>
<title>:::Sigup:::</title>
<head>
<link rel="stylesheet" type="text/css" href="login.css">
<div id="utama">
        <div class="header">
        <div class="header-isi">
            <div class="gambar">
                <div class="header-isi" align="center">
                    <br align="center"><br>Create New User</br></br>
                    <form id="sigup" method="post" action="add_new_user.php" onsubmit="return cekData();">
                        <table border=0 align=center>
                        <tr>
                            <td><input type="text" name="namenew" id="namenew" placeholder="Nama Lengkap" class="login_regis"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="usernew" id="usernamenew" placeholder="User Name" class="login_regis"></td>
                        </tr>
                        <tr>
                            <td><input type="password" name="passnew" id="passwordnew" placeholder="Password" class="login_regis"></td>
                        </tr>
                        </table>
                        <br>
                            <table border="0" align="center">
                                <tr>
                                    <td><input type="submit" value="Create" class="tombol_login"></td>
                                </tr>
                            </table>
                    </form>
                </div>
            </div>
            <h3>
                <p align="center" class="copyright"><h>Sudah punya account </h><a href="login.php"><i>Login</i></a></p>  
            </h3>
        </div>
        </div>
    </div>
</head>
</html>