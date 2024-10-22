<?php 
    require 'config/connection.php';
    if (isset($_POST["login"])) {
      
      $email = $_POST["email"];
      $password = $_POST["password"];

      $result = mysqli_query($connect, "SELECT * from seller where email = '$email'");

      // cek email
      if (mysqli_num_rows($result) === 1){

        // cek password
        $row = mysqli_fetch_assoc($result);
        $rownama = $row["nama"];
        if ($password === $row["password"]) {
          header("Location: landingpageSeller.php");
          exit;
        }
      }

      $error = true;
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">  
  </head>
  <body class="body-login">
    <!-- <?php echo "<script> alert ('Selamat datang kembali! Silakan Login terlebih dahulu.'); </script>"; ?>
    <php endif; ?> -->
      <div class="login">
          <form action="" method="POST">
            <h1 class="signin">Log-In</h1>
            <label ><strong> Email</strong></label><br>
            <input type="text" placeholder="Masukkan Email" name="email"><br>
            <label><strong> Password</strong></label><br>
            <input type="password" placeholder="Password" name="password"><br>
            <?php if (isset($error)) : ?>
              <p style="color: red; font-style: italic;">username / password salah</p>
              <?php endif; ?>
            <button class="tombol mt-2 btn-primary" name="login">Log In</button><br>
            <label calss="belumpunyaakun mt-2">Belum Punya Akun?</label>
            <a href="registerseller.php" name="register">Register</a>

          </form>
            
      </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>