<?php
// menghubungkan php dengan koneksi database
include '../connect/koneksi.php';

session_start();
if(!isset($_SESSION['username']))
{
    header("location:../index.php");
}

if(isset($_POST['submit'])){
	
$nim			= $_POST['nim'];
$nama_mhs		= $_POST['nama_mhs'];
$jenjang		= $_POST['jenjang'];
$semester		= $_POST['semester'];
$password		= $_POST['password'];
$id_jurusan		= $_POST['id_jurusan'];


$query =  mysqli_query($koneksi,"INSERT INTO data_mahasiswa VALUES('$nim','$password','$nama_mhs',NULL,NULL,NULL,NULL,NULL,'$jenjang','$semester','$id_jurusan')")  or die (mysql_error($koneksi));

header("location:data_mahasiswa.php?Berhasil");
}
?>