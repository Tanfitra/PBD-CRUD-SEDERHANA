<?php
//Panggil Koneksi
include("koneksi.php");

//Simpan Data
$query = mysqli_query($kon, "insert into karyawan values('$_POST[kd_karyawan]', '$_POST[nama_karyawan]', '$_POST[jenis_kelamin]', '$_POST[no_telp]', '$_POST[tgl_kontrak]', '$_POST[kd_jabatan]', '$_POST[kd_departmen]')");

if ($query)
{
    echo "Data Berhasil Disimpan!";
}
else
{
    echo "Data Gagal Disimpan!";
}
?>