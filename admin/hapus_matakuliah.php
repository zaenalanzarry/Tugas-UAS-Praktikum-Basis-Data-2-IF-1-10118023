<?php
// menghubungkan php dengan koneksi database
include '../connect/koneksi.php';

session_start();
if(!isset($_SESSION['username']))
{
    header("location:../login.php");
}
	
$id_mk = $_GET['id_mk'];

$query=mysqli_query($koneksi,"DELETE FROM mata_kuliah WHERE id_mk='$id_mk'");
 
header("location:data_matakuliah.php?Berhasil");
?>