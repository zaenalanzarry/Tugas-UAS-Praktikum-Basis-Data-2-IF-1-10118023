<?php
// menghubungkan php dengan koneksi database
include '../connect/koneksi.php';

session_start();
if(!isset($_SESSION['nim']))
{
    header("location:../index.php");
}

if(isset($_POST['update'])){
	
$nim		= $_POST['nim'];
$nama_mhs	= $_POST['nama_mhs'];
$jk_mhs		= $_POST['jk_mhs'];
$agama_mhs	= $_POST['agama_mhs'];
$tempat_lahir_mhs  	= $_POST['tempat_lahir_mhs'];
$tanggal_lahir_mhs 	= $_POST['tanggal_lahir_mhs'];
$alamat_mhs 	= $_POST['alamat_mhs'];



$query =  mysqli_query($koneksi,"UPDATE data_mahasiswa set nama_mhs='$nama_mhs', jk_mhs='$jk_mhs', agama_mhs='$agama_mhs', tempat_lahir_mhs='$tempat_lahir_mhs', tanggal_lahir_mhs='$tanggal_lahir_mhs', alamat_mhs='$alamat_mhs' where nim='$nim' ")  or die ($mysql_error($koneksi));

header("location:profile.php?Berhasil");
}
?>