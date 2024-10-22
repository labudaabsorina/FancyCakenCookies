<?php
session_start();
include 'config/connection.php';
 
$koneksi = mysqli_connect("localhost","root","","db_fancycake");
// ambil variable
$id = @$_GET['id'];
//Proses query simpan
$del=mysqli_query($connect,"delete from product where id='$id'");
if($del){
    $_SESSION['pesan'] = '<font color=green>OK, 1 data berhasil dihapus.</font>';
	header("location: katalogpenjual.php");
}else{
	echo "Gagal hapus data!";
}?>