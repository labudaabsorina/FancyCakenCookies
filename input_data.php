<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Boostrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <img class="img-kategori ms-3 me-3" src="img/kat-07.png" alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
                <!-- <div class="navbar-nav">
                    <div class="menukue">
                        <ul>
                            <li><a class="inimenu mt-2" style="color: #FFC793;" href="#">Shop by Category</a>
                                <ul class="dropdown">
                                    <li><a href="#">Birthday</a></li>
                                    <li><a href="#">Brownie</a></li>
                                    <li><a href="#">Cookies</a></li>
                                    <li><a href="#">Cup Cakes</a></li>
                                    <li><a href="#">Slice Cake</a></li>
                                </ul>
                            </li>
                            <li><a href="#">|</a></li>
                            <li><a href="#">Sort by</a></li>

                        </ul>
                        
                    </div>
                    
                </div> -->

                <div class="fancy">
                    <a href="landingpage.php">
                        <img class="img-logo" src="img/logo.png" alt="">
                    </a>
                </div>
                
                <div class="navbar-nav">
                    <!-- <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form> -->
                    <a href="keranjang.php">
                         <img class="img-keranjang ms-3 keranjang" src="img/ker-12.png" alt="">
                    </a>
                    <div class="menukue">
                        <ul>
                            <li><img class="img-user ms-3 me-3" src="img/user-09.png" alt="">
                                <ul class="dropdown">
                                    <li><a href="landingpage.php">logout</a></li>
                                </ul>
                            </li>
                        </ul>                   
                    </div> 
                </div>
    
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->
    <br><br><br><br>

<body style="padding:15px;background:#361E0C">
	<h4 class="text-white text-center"> Input Produk </h4>
<?php 
session_start(); // session untuk notifikasi pesan
echo @$_SESSION['pesan'];
session_destroy();
?>
<form action="insert_data.php" method="post">
<input style="margin-bottom:10px;" type="text" name="nama" placeholder="Name..."><br>
<input style="margin-bottom:10px;" type="text" name="price" placeholder="Price..."><br>
<input style="margin-bottom:10px;" type="text" name="uom" placeholder="UOM..."><br>
<input style="margin-bottom:10px;" type="text" name="quantity" placeholder="Quantity..."><br>
<button type="submit">Simpan</button>
</form>
</body>
</html>