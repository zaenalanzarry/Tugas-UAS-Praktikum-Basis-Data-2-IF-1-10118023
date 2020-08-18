<?php
// menghubungkan php dengan koneksi database
include '../connect/koneksi.php';

session_start();
if(!isset($_SESSION['username']))
{
    header("location:../index.php");
}

if(isset($_POST['update'])){
	
$id_fakultas 		= $_POST['id_fakultas'];
$nama_fakultas		= $_POST['nama_fakultas'];


$query =  mysqli_query($koneksi,"UPDATE fakultas set nama_fakultas='$nama_fakultas' where id_fakultas='$id_fakultas' ")  or die($mysql_error($koneksi));

header("location:data_fakultas.php?Berhasil");
}
?>