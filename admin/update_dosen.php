<?php
// menghubungkan php dengan koneksi database
include '../connect/koneksi.php';

session_start();
if(!isset($_SESSION['username']))
{
    header("location:../index.php");
}

if(isset($_POST['update'])){
	
$nip 		= $_POST['nip'];
$nama_dosen	= $_POST['nama_dosen'];
$alamat_dosen 	= $_POST['alamat_dosen'];
$tempat_lahir_dosen  = $_POST['tempat_lahir_dosen'];
$tanggal_lahir_dosen = $_POST['tanggal_lahir_dosen'];
$jk_dosen			= $_POST['jk_dosen'];
$agama_dosen	 	= $_POST['agama_dosen'];
$password 			= $_POST['password'];


$query =  mysqli_query($koneksi,"UPDATE data_dosen set nama_dosen='$nama_dosen', password='$password', jk_dosen='$jk_dosen', agama_dosen='$agama_dosen', tempat_lahir_dosen='$tempat_lahir_dosen', tanggal_lahir_dosen='$tanggal_lahir_dosen', alamat_dosen='$alamat_dosen' where nip='$nip' ")  or die($mysql_error($koneksi));

header("location:data_dosen.php?Berhasil");
}
?>