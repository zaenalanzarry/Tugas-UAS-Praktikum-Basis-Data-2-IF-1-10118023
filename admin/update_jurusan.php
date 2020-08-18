<?php
// menghubungkan php dengan koneksi database
include '../connect/koneksi.php';

session_start();
if(!isset($_SESSION['username']))
{
    header("location:../index.php");
}

if(isset($_POST['update'])){
	
$id_jurusan			= $_POST['id_jurusan'];
$nama_jurusan		= $_POST['nama_jurusan'];
$id_fakultas 		= $_POST['id_fakultas'];


$query =  mysqli_query($koneksi,"UPDATE jurusan set nama_jurusan='$nama_jurusan', id_fakultas='$id_fakultas' where id_jurusan='$id_jurusan' ")  or die($mysql_error($koneksi));

header("location:data_jurusan.php?Berhasil");
}
?>