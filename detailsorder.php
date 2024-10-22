<?php 
    require 'config/connection.php';
    if (isset($_POST["save"])) {

        if (orderDetails($_POST) > 0) {
            header("Location: ordercomplete.php");
        } else {
            echo mysqli_error($connect);
        }
    }
?>

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
                    <div class="navbar-nav">
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
                        
                    </div>

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

        <!--urutan checkout-->
        <div class="urutan-cart-1 text-center">
            <div class="container-details">
                <span class="warna-shopping-1 p-3 rounded-pill">Shopping Cart</span>
                <i class="bi-1 bi-arrow-right mx-3 p-3 rounded-circle"></i>
                <span class="warna-detail-1 p-3 rounded-pill">Details Order</span>
                <i class="bi-1 bi-arrow-right mx-3 p-3 rounded-circle"></i>
                <span class="warna-detail-2 p-3 rounded-pill">Order Complete</span>
            </div>
        </div>

        <hr class="position-relative" style=" width: 60%; margin-left: 270px; top: 20px; border: 2px solid rgb(212, 157, 89);">

        <h3 class="judul text-center text-white">Your Order Details</h3>
        
        <div class="details container-fluid text-white ">
            <div class="container mt-5">
                <form method="POST">
                    <div class="row">
                        <div class="col-6">
                                <label class="namalengkap"><b>Nama Lengkap</b></label>
                                <input type="text" class="form-control" name="nama">
                                <label class="email mt-3"><b>Email</b></label>
                                <input type="email" class="form-control" name="email">
                                <label class="phone mt-3"><b>Phone</b></label>
                                <input type="text" class="form-control" name="telepon">
                                <label class="address mt-3"><b>Address</b></label>
                                <input type="text" class="form-control" name="alamat">
                        </div>
                        <div class="col-6">
                            <label class="province mt-3"><b>Province</b></label>
                                <select class="form-select" aria-label="Default select example" name="provinsi">
                                    <option selected> Select Province</option>
                                    <option value="Jakarta">Jakarta</option>
                                    <option value="Bogor">Bogor</option>
                                    <option value="Depok">Depok</option>
                                    <option value="Bekasi">Bekasi</option>
                                </select>
                            <label class="zip mt-3"><b>Zip</b></label><br>
                            <input class="inputZip col-md-2"  type="text" class="form-control" name="kodepos"><br>
                            <label class="maps mt-3"><b>Select Via Maps</b></label><br>
                            <iframe src="https://maps.google.com/maps?q=chicago&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                                style="border:0" allowfullscreen></iframe><br>
                            <!-- <button class="btn-save mt-3" type="submit" name="save">SAVE & CONTINUE</button> -->
                            <a href="ordercomplete.php" class="btn-buy2 btn mt-2 text-white" name="save">SAVE & CONTINUE</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- akhiraann form alamat dll -->

        
        <!-- Footer -->
        <footer class="footer text-white text-center mt-5">
            <div class="info container-fluid">
                <div class="row">
                    <div class="col">
                        <img class="img-logo" src="img/logo.png" alt="">
                    
                    </div>
                    <div class="col mt-3">
                        <span>Need Help?</span><br>
                        <a class="text-white text-decoration-none" href="">Contact Us</a><br>
                        <a class="text-white text-decoration-none" href="">FAQ</a>

                    </div>
                    <div class="col mt-3">
                        <span>Payment Method</span><br>
                        <img class="img-bca me-1" src="img/bca.png" alt="">
                        <img class="img-visa me-1" src="img/visa.png" alt="">
                        <img class="img-mastercard" src="img/mastercard.png" alt="">

                    </div>
                    <div class="col mt-3">
                        <span>Find Us!</span><br>
                        <i class="bi bi-instagram fs-2 me-1"></i>
                        <i class="bi bi-facebook fs-2"></i>

                    </div>
                    <div class="col mt-3">
                        <span>Our Kitchen</span><br>
                        <i class="bi bi-geo-alt-fill me-1"></i><span class="cempakaputih">Cempaka Putih, Central jakarta</span>
                    </div>
                </div>
            </div>
        </footer>

        <!-- akhir footer  -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
    </body>
</html>