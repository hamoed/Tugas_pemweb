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
    $id = $_POST['nid'];
    $cek=mysqli_query($koneksi,"SELECT*FROM database1 WHERE NPSN='$id'");
    $ket= mysqli_num_rows($cek);
    if (!$ket) 
    {
        include 'promp.php';
    }
    else
    {
        $row = mysqli_fetch_array($cek);
    }
?>
<html>
<script type="text/javascript">
    function cekData()
    {
        // Cek isi kotak teks username
        if (up.npsn.value == "")
        {
            alert("Field NPSN Harus Di Isi");
            up.npsn.focus();
            return false;
        }
        if (up.nama.value == "")
        {
            alert("Field Nama Sekolah Harus Di Isi");
            up.nama.focus();
            return false;
        }
        // Cek isi kotak teks password
        if (up.alamat.value == "")
        {
            alert("Field alamat Harus Di Isi");
            up.alamat.focus();
            return false;
        }
        if (up.desa.value == "")
        {
            alert("Field Desa Harus Di Isi");
            up.desa.focus();
            return false;
        }
        if (up.jenjang.value == "")
        {
            alert("Field Jenjang Harus Di Isi");
            up.jenjang.focus();
            return false;
        }
        if (up.status.value == "")
        {
            alert("Field status Harus Di Isi");
            up.status.focus();
            return false;
        }
        if (up.akreditasi.value == "")
        {
            alert("Field akreditasi Harus Di Isi");
            up.akreditasi.focus();
            return false;
        }
        if (up.kecamatan.value == "")
        {
            alert("Field kecamatan Harus Di Isi");
            up.kecamatan.focus();
            return false;
        }
        if (up.Kota.value == "")
        {
            alert("Field Kota Harus Di Isi");
            up.kota.focus();
            return false;
        }
        else
        return true;
    }
</script>
<?php include 'header.php'; ?>
<title>:::UPDATE:::</title>
<link rel="stylesheet" type="text/css" href="../../pintu_gerbang/login.css">
<head>
    <div id="utama">
        <div class="header">
        <div class="header-isi">
            <div class="gambar1">
                <div class="header-isi" align="center">
                    <br align="center"><br>Data Baru</br></br>
                    <form id="upp" method="post" action="updatedata.php" onsubmit="return cekData();">
                        <table border=0 align=center>
                            <tr>
                                <td><input placeholder="NPSN" value=<?php echo $row['NPSN']?> type="text" name="npsn" id="npsn" class="login_regis"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="Nama Sekolah" value=<?php echo $row['nama_sekolah'];?> name="nama" id="nama" class="login_regis"></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="alamat" value=<?php echo $row['alamat'];?> placeholder="alamat" id="alamat" class="login_regis"></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="desa" id="desa" placeholder="Desa" value=<?php echo $row['desa'];?> class="login_regis"></td>
                            </tr>
                            <tr>
                                <td><input placeholder="kecamatan" type="text" name="kecamatan" id="kecamatan" value=<?php echo $row['kecamatan'];?> class="login_regis"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="Kota / Kabupaten" name="kota" id="kota" value=<?php echo $row['kota'];?> class="login_regis"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="jenjang" name="jenjang" id="jenjang" value=<?php echo $row['jenjang'];?> class="login_regis"></td>
                            </tr>
                            <tr>
                                <td><input value=<?php echo $row['status'];?> type="text" placeholder="status" name="status" id="status" class="login_regis"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="akreditasi" name="akreditasi" id="akreditasi" class="login_regis"  value=<?php echo $row['akreditasi']?>></td>
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
</body>
</html>