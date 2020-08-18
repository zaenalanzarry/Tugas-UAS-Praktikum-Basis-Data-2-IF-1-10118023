<?php
// menghubungkan php dengan koneksi database
include '../connect/koneksi.php';

session_start();
if(!isset($_SESSION['username']))
{
    header("location:../index.php");
}

if(isset($_POST['submit'])){
	
$id_jurusan	= $_POST['id_jurusan'];
$nama_jurusan	= $_POST['nama_jurusan'];
$id_fakultas	= $_POST['id_fakultas'];


$query =  mysqli_query($koneksi,"INSERT INTO jurusan VALUES('$id_jurusan','$nama_jurusan',NULL,'$id_fakultas')")  or die (mysql_error($koneksi));

header("location:data_jurusan.php?Berhasil");
}
?>