<?php
// menghubungkan php dengan koneksi database
include '../connect/koneksi.php';

session_start();
if(!isset($_SESSION['nim']))
{
    header("location:../index.php");
}

if(isset($_POST['submit'])){
	
$nim 			= $_POST['nim'];
$id_mk 			= $_POST['id_mk'];
$semester	 	= $_POST['semester'];


$query =  mysqli_query($koneksi,"INSERT INTO krs VALUES ('','$nim','$id_mk','$semester',NULL)")  or die(mysqli_error($koneksi));

header("location:riwayat_nilai.php?Berhasil");
}
?>