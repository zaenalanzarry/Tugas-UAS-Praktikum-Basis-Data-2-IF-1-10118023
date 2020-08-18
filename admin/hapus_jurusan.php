<?php
// menghubungkan php dengan koneksi database
include '../connect/koneksi.php';

session_start();
if(!isset($_SESSION['username']))
{
    header("location:../login.php");
}
	
$id_jurusan = $_GET['id_jurusan'];

$query=mysqli_query($koneksi,"DELETE FROM jurusan WHERE id_jurusan='$id_jurusan'");
 
header("location:data_jurusan.php?Berhasil");
?>