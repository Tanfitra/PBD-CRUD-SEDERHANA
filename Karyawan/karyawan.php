<?php
include ("koneksi.php");
$tampilkan = mysqli_query($kon, "select * from karyawan");
?>
<html>
<head>
    <title>TUGAS CRUD SEDERHANA</title>
</head>
<body>
    <form method ="POST" action="simpan.php">
        <table>
            <tr>
                <td>Kode Karyawan</td>
                <td>:</td>
                <td><input type="text" name="kd_karyawan"></td>
            </tr>
            <tr>
                <td>Nama Karyawan</td>
                <td>:</td>
                <td><input type="text" name="nama_karyawan"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="text" name="jenis_kelamin"></td>
            </tr>
            <tr>
                <td>Nomer Telepon</td>
                <td>:</td>
                <td><input type="text" name="no_telp"></td>
            </tr>
            <tr>
                <td>Tanggal Kontrak</td>
                <td>:</td>
                <td><input type="text" name="tgl_kontrak"></td>
            </tr>
            <tr>
                <td>Kode Jabatan</td>
                <td>:</td>
                <td><input type="text" name="kd_jabatan"></td>
            </tr>
            <tr>
                <td>Kode Department</td>
                <td>:</td>
                <td><input type="text" name="kd_departmen"></td>
            </tr>
            <tr>
                <td><button type="submit">SIMPAN</button></td>
            </tr>
        </table>
    </form>
    <hr noshade="1" width="100%">
    <table width="50%" cellspacing="0" cellpadding="4" border="1">
        <thead>
            <tr>
                <td>KODE KARYAWAN</td>
                <td>NAMA KARYAWAN</td>
                <td>JENIS KELAMIN</td>
                <td>NOMER TELEPON</td>
                <td>TANGGAL KONTRAK</td>
                <td>KODE JABATAN</td>
                <td>KODE DEPARTMEN</td>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row=mysqli_fetch_array($tampilkan))
            {
            ?>

            <tr>
                <td><?php echo $row ["kd_karyawan"]; ?></td>
                <td><?php echo $row ["nama_karyawan"]; ?></td>
                <td><?php echo $row ["jenis_kelamin"]; ?></td>
                <td><?php echo $row ["no_telp"]; ?></td>
                <td><?php echo $row ["tgl_kontrak"]; ?></td>
                <td><?php echo $row ["kd_jabatan"]; ?></td>
                <td><?php echo $row ["kd_departmen"]; ?></td>
            </tr>

            <?php    
            }
            ?>
        </tbody>
</body>
</html>