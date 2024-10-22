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

    <!-- shop category -->
    <div class="container-fluid-deskrip text-white">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div>
                        <h6 class="shop-kategori">Shop by Category</h6> <br>
                        
                    </div>
                    <div class="list-group list-group-flush">
                        <h5><a href="" class="list-group-item text-white">Slice Cake</a></h3>
                        <a href="chocoClassic.php" class="list-group-item mb-3">Birthday</a>
                        <a href="berryChoco.php" class="list-group-item mb-3">Brownies</a>
                        <a href="milkyCookie.php" class="list-group-item mb-3">Cookies</a>
                        <a href="strawberryMoist.php" class="list-group-item mb-3">Cupcakes</a>
                    </div>
                </div>
                <div class="col-3 ms-3 mb-5">
                   <img src="img/op-4.png" class="card-img-top" alt="...">
                        
                </div>
                <div class="col-3 ms-3">
                    <h3 class="nama-kue p-1">Choco Crumble Cream</h3>
                    <!-- <table> -->
                    <tr>
                            <td>
                                <h5  class="fst-italic" style="padding-top: 0cm;">Rp. 150.000</h5><br>
                            </td>
                            <!-- <form method="POST"> -->
                            <td style="padding-left: 1cm; padding-top: 0;">
                                <!-- <div class="btn-group" role="group" aria-label="Basic example"> -->
                                    <div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" />
                                    <a href="keranjang.php" class="btn-buy3 btn mt-2 text-white" name="add">Add</a>
                                    </div>
                                <!-- </div>       -->
                            </td>
                        </tr>
                    <!-- </table> -->


                    <span class="fst-italic">Description : </span><br>
                    <span>Choco Crumble Cream is one of our best dessert and best seller in our shop with combination 
                          cream chocolate crumble and vanilla
                          it's perfect  for  accompanying your day.</span>
                    </div>
                </div>
                <div class="halaman text-center mt-5 mb-5">
                    <div class="container">
                        <span class="page1 p-2 rounded-pill text-black "><b>1</b></span>
                        <span class="page2 p-2 rounded-pill text-black"><b>2</b></span>
                        <span class="page3 p-2 rounded-pill text-black"><b>3</b></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--akhir deskripsi-->

  <!-- Footer -->
    <footer class="footer text-white text-center">
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