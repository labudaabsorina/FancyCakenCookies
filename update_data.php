<?php
session_start();
include"config/connection.php"; // masukan konekasi DB
// ambil variable
$nama=htmlspecialchars($_POST['nama']);
$price=htmlspecialchars($_POST['price']);
$uom=htmlspecialchars($_POST['uom']);
$quantity=htmlspecialchars($_POST['quantity']);
$id = @$_GET['id'];
//Proses query simpan
$update=mysqli_query($connect,"update product set Name='$nama', Price='$price', UOM='$uom', Quantity='$quantity' where id='$id'");
if($update){
    $_SESSION['pesan'] = '<font color=green>OK, 1 data berhasil diupdate.</font>';
	header("location: katalogpenjual.php");
}else{
	echo "Gagal update data!";
}
?>