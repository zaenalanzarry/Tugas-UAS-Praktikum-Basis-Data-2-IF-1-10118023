<?php
// menghubungkan php dengan koneksi database
include '../connect/koneksi.php';

session_start();
if(!isset($_SESSION['username']))
{
    header("location:../login.php");
}
	
$id_fakultas = $_GET['id_fakultas'];

$query=mysqli_query($koneksi,"DELETE FROM fakultas WHERE id_fakultas='$id_fakultas'");
 
header("location:data_fakultas.php?Berhasil");
?>