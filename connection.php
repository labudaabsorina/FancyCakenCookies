<?php 

  $connect = mysqli_connect("localhost", "root", "", "fancycakencookies");

  function registrasiAkun($data){
    global $connect;

    $namalengkap = $data["namalengkap"];
    $username = strtolower(stripslashes($data["username"]));
    $email = $data["email"];
    $password = $data["password"];

    $result = mysqli_query($connect, "SELECT username from user where username = '$username'");
    if (mysqli_fetch_assoc($result)) {
      echo "<script> alert ('email yang dipilih sudah terdaftar, gunakan email lain!'); </script>";
      return false;
    }

    mysqli_query($connect, "INSERT INTO user VALUES('', '$namalengkap', '$username', '$email', '$password')");

    return mysqli_affected_rows($connect);
  }

  function registrasiAkunSeller($data){
    global $connect;

    $namalengkap = $data["namalengkap"];
    $username = strtolower(stripslashes($data["username"]));
    $email = $data["email"];
    $password = $data["password"];

    $result = mysqli_query($connect, "SELECT username from seller where username = '$username'");
    if (mysqli_fetch_assoc($result)) {
      echo "<script> alert ('email yang dipilih sudah terdaftar, gunakan email lain!'); </script>";
      return false;
    }

    mysqli_query($connect, "INSERT INTO seller VALUES('', '$namalengkap', '$username', '$email', '$password')");

    return mysqli_affected_rows($connect);
  }

  function orderDetails($data){
    global $connect;

    $nama = $data["nama"];
    $email = $data["email"];
    $telepon = $data["telepon"];
    $alamat = $data["alamat"];
    $provinsi = $data["provinsi"];
    $kodepos = $data["kodepos"];


    return mysqli_affected_rows($connect);
  }

  function metodePembayaran($data){
    global $connect;

    $metodePembayaran = $data["metodePembayaran"];
    $total = $data["total"];

    mysqli_query($connect, "INSERT INTO metodepembayaran VALUES('', '$metodePembayaran', '$total')");

    return mysqli_affected_rows($connect);
  }

  function addClassic(){
    global $connect;

    $getdata = mysqli_query($connect, "SELECT * FROM product WHERE id = 6");

    return mysqli_affected_rows($connect);
  }
  
  
?>
