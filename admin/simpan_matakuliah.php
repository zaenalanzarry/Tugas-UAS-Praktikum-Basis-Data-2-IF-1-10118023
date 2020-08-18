  
<?php
// menghubungkan php dengan koneksi database
include '../connect/koneksi.php';

session_start();
if(!isset($_SESSION['username']))
{
    header("location:../index.php");
}

if(isset($_POST['submit'])){
	
$id_mk 			= $_POST['id_mk'];
$nama_mk		= $_POST['nama_mk'];
$jumlah_sks		= $_POST['jumlah_sks'];
$nip			= $_POST['nip'];


$query =  mysqli_query($koneksi,"INSERT INTO mata_kuliah VALUES('$id_mk','$nama_mk','$jumlah_sks','$nip')")  or die (mysql_error($koneksi));

header("location:data_matakuliah.php?Berhasil");
}
?>