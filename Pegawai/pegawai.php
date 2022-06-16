<?php
include ("koneksi.php");
$tampilkan = mysqli_query($kon, "select * from pegawai");
?>
<html>
<head>
    <title>CRUD SEDERHANA</title>
</head>
<body>
    <form method ="POST" action="simpan.php">
        <table>
            <tr>
                <td>ID Pegawai</td>
                <td>:</td>
                <td><input type="text" name="id_pegawai"></td>
            </tr>
            <tr>
                <td>Nama Pegawai</td>
                <td>:</td>
                <td><input type="text" name="nama_pegawai"></td>
            </tr>
            <tr>
                <td>Bagian</td>
                <td>:</td>
                <td><input type="text" name="bagian"></td>
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
                <td>ID PEGAWAI</td>
                <td>NAMA PEGAWAI</td>
                <td>BAGIAN</td>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row=mysqli_fetch_array($tampilkan))
            {
            ?>

            <tr>
                <td><?php echo $row ["id_pegawai"]; ?></td>
                <td><?php echo $row ["nama_pegawai"]; ?></td>
                <td><?php echo $row ["bagian"]; ?></td>
            </tr>

            <?php    
            }
            ?>
        </tbody>
</body>
</html>