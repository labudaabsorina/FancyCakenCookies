<?php
session_start();
include"config/connection.php"; // masukan konekasi DB
// ambil variable
$nama=$_POST['nama'];
$price=$_POST['price'];
$uom=$_POST['uom'];
$quantity=$_POST['quantity'];

if($nama=='' or $price=='' or $uom=='' or $quantity==''){
$_SESSION['pesan'] = '<font color=red>MAAF, tidak boleh kosong!</font>';
header("location:input_data.php");	
}else{
//Proses query simpan
$simpan=mysqli_query($connect,"insert into product (id, Name, Price, UOM, Quantity) values ('', '$nama','$price', '$uom', '$quantity')");
if($simpan){
    $_SESSION['pesan'] = '<font color=green>OK, 1 data berhasil disimpan.</font>';
	header("location:katalogpenjual.php");
}else{
	echo "Gagal simpan data!";
}}
?>