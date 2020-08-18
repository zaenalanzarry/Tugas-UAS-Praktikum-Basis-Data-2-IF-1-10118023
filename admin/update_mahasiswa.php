<?php
// menghubungkan php dengan koneksi database
include '../connect/koneksi.php';

session_start();
if(!isset($_SESSION['username']))
{
    header("location:../index.php");
}

if(isset($_POST['update'])){
	
$nim				= $_POST['nim'];
$password 			= $_POST['password'];
$nama_mhs			= $_POST['nama_mhs'];
$tempat_lahir_mhs  	= $_POST['tempat_lahir_mhs'];
$tanggal_lahir_mhs 	= $_POST['tanggal_lahir_mhs'];
$jk_mhs 			= $_POST['jk_mhs'];
$agama_mhs	 		= $_POST['agama_mhs'];
$jenjang 			= $_POST['jenjang'];
$semester 			= $_POST['semester'];
$id_jurusan			= $_POST['id_jurusan'];


$query =  mysqli_query($koneksi,"UPDATE data_mahasiswa set password='$password', nama_mhs='$nama_mhs', jk_mhs='$jk_mhs', agama_mhs='$agama_mhs', tempat_lahir_mhs='$tempat_lahir_mhs', tanggal_lahir_mhs='$tanggal_lahir_mhs', jenjang='$jenjang', semester='$semester', id_jurusan='$id_jurusan' where nim='$nim' ")  or die ($mysql_error($koneksi));

header("location:data_mahasiswa.php?Berhasil");
}
?>