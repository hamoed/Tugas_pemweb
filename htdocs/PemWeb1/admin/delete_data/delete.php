<?php
    session_start();
    if(!isset($_SESSION['Username1']))
    {
        header("Location: ../../login.php");
    }
    else
    {
        include '../../koneksi.php';
        $data=mysqli_query($koneksi, 'select * from database1');
        if (!$data) 
        {
            die('SQL Error : '.mysqli_error($koneksi));
        }

    }
?>
<html>
<script type="text/javascript">
    function cekData()
    {
        // Cek isi kotak teks username
        if (del.id.value == "")
        {
            alert("ID Harus Di Isi");
            del.id.focus();
            return false;
        }
        else
        return true;
    }
</script>
<head>
<link rel="stylesheet" type="text/css" href="../../pintu_gerbang/login.css">
    <?php include 'header.php'; ?>
    <div id="utama">
        <div class="header">
        <div class="header-isi">
            <div class="gambar">
                <div class="header-isi" align="center">
                    <br align="center"><br>DELETE DATA</br></br>
                    <title>:::Delete:::</title>
                    <form id="del" method="post" action="deletedata.php" onsubmit="return cekData();">
                    <table border=0 align=center>
                    <tr>
                        <td><input placeholder="NPSN" class="login_regis" type="text" name="id" id="id"></td>
                    </tr>
                    </table>
                    <br>
                    <table border="0" align="center">
                    <tr>
                        <td><input type="submit" value="Cari" class="tombol_login"></td>
                    </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
    </head>
</html>