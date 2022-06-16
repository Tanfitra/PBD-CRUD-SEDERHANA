<?php
//Panggil Koneksi
include("koneksi.php");

//Simpan Data
$query = mysqli_query($kon, "insert into pegawai values('$_POST[id_pegawai]', '$_POST[nama_pegawai]', '$_POST[bagian]')");

if ($query)
{
    echo "Data Berhasil Disimpan!";
}
else
{
    echo "Data Gagal Disimpan!";
}
?>