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
        if (add.npsn.value == "")
        {
            alert("Field NPSN Harus Di Isi");
            add.npsn.focus();
            return false;
        }
        if (add.nama.value == "")
        {
            alert("Field Nama Sekolah Harus Di Isi");
            add.nama.focus();
            return false;
        }
        // Cek isi kotak teks password
        if (add.alamat.value == "")
        {
            alert("Field alamat Harus Di Isi");
            add.alamat.focus();
            return false;
        }
        if (add.desa.value == "")
        {
            alert("Field Desa Harus Di Isi");
            add.desa.focus();
            return false;
        }
        if (add.jenjang.value == "")
        {
            alert("Field Jenjang Harus Di Isi");
            add.jenjang.focus();
            return false;
        }
        if (add.status.value == "")
        {
            alert("Field status Harus Di Isi");
            add.status.focus();
            return false;
        }
        if (add.akreditasi.value == "")
        {
            alert("Field akreditasi Harus Di Isi");
            add.akreditasi.focus();
            return false;
        }
        if (add.kecamatan.value == "")
        {
            alert("Field kecamatan Harus Di Isi");
            add.kecamatan.focus();
            return false;
        }
        if (add.Kota.value == "")
        {
            alert("Field Kota Harus Di Isi");
            add.kota.focus();
            return false;
        }
        else
        return true;
    }
</script>
<?php include 'header.php'; ?>
<title>:::Insert:::</title>
<link rel="stylesheet" type="text/css" href="../../pintu_gerbang/login.css">
<head>
    <div id="utama">
        <div class="header">
        <div class="header-isi">
            <div class="gambar1">
                <div class="header-isi" align="center">
                    <br align="center"><br>Data Baru</br></br>
                    <form id="add" method="post" action="createdata.php" onsubmit="return cekData();">
                        <table border=0 align=center>
                            <tr>
                                <td><input placeholder="NPSN" type="text" name="npsn" id="npsn" class="login_regis"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="Nama Sekolah" name="nama" id="nama" class="login_regis"></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="alamat" placeholder="alamat" id="alamat" class="login_regis"></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="desa" id="desa" placeholder="Desa" class="login_regis"></td>
                            </tr>
                            <tr>
                                <td><input placeholder="kecamatan" type="text" name="kecamatan" id="kecamatan" class="login_regis"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="Kota / Kabupaten" name="kota" id="kota" class="login_regis"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="jenjang" name="jenjang" id="jenjang" class="login_regis"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="status" name="status" id="status" class="login_regis"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="akreditasi" name="akreditasi" id="akreditasi" class="login_regis"></td>
                            </tr>
                        </table>
                        <br>
                    <table border="0" align="center">
                    <tr>
                        <td><input type="submit" value="Tambah" class="tombol_login"></td>
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
                    
