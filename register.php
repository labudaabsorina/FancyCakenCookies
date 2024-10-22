<?php 
    require 'config/connection.php';
    if (isset($_POST["register"])) {

        if (registrasiAkun($_POST) > 0) {
            header("Location: login.php");
        } else {
            echo mysqli_error($connect);
        }
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
  <body class="body-register">
  <?php echo "<script> alert ('Yuk bikin akun dulu! :)'); </script>"; ?>
    <php endif; ?>
      <div class="register">
          <form method="POST">
            <h1 class="textregister text-white">Register</h1>
            <label ><strong>Nama Lengkap</strong></label><br>
            <input type="text" placeholder="Nama Lengkap" name="namalengkap"><br>
            <label><strong> Username</strong></label><br>
            <input type="text" placeholder="Username"  name="username"><br>
            <label ><strong> Email</strong></label><br>
            <input type="text" placeholder="Email"  name="email"><br>
            <label><strong> Password</strong></label><br>
            <input type="password" placeholder="Password"  name="password"><br>
            <button class="tombolregister mt-2 btn-primary" name="register">Register</button><br>
            <a href="login.php">Login</a>
            <label>|</label>
            <a href="landingpage.php">Cancel</a>

          </form>
            
      </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>