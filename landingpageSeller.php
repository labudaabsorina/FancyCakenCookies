<?php
require 'config/connection.php';
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
                            <li><a href="katalogpenjual.php">Product List</a></li>
                            <li><a href="katalogpembeli.php">Order List</a></li>

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

    <!-- Jumbotron -->
    <section class="jumbotron text-white text-center">
        <img class="img-banner" src="img/banner.png" alt="">
    </section>
    <!-- Akhir Jumbotron -->

    <!-- What We Offer -->
    <section>
        <div class="container">
            <div class="row mt-5 mb-5 text-white text-center">
                <div class="col">
                    <h2>What We Offer</h2>
                </div>
            </div>
            
            <div class="row text-white text-center justify-content-center">
                <div class="col-2 me-5">
                    <div class="card">
                        <img src="img/wwo.png" class="card-img-top rounded-circle" alt="...">
                        <div class="card-body">
                            <p class="card-text">Brownies, you need a brownies for a great day, so it’s always available at our shop</p>
                        </div>
                    </div>
                </div>

                <div class="col-2 me-5">
                    <div class="card">
                        <img src="img/wwo-2.png" class="card-img-top rounded-circle" alt="...">
                        <div class="card-body">
                            <p class="card-text">Cupcake, we provide a variety cupcakes for all events and needs</p>
                        </div>
                    </div>
                </div>

                <div class="col-2 me-5">
                    <div class="card">
                        <img src="img/wwo-3.png" class="card-img-top rounded-circle" alt="...">
                        <div class="card-body">
                            <p class="card-text">Cookies, nothing tastes better than a brownies with a various flavors</p>
                        </div>
                    </div>
                </div>

                 <div class="col-2">
                    <div class="card">
                        <img src="img/wwo-4.png" class="card-img-top rounded-circle" alt="...">
                        <div class="card-body">
                            <p class="card-text">Customize Party Cake, we also accept any request for custom cake for your party</p>
                        </div>
                    </div>
                </div>
            </div> 
        </div>     
    </section>
    <!-- Akhir What We Offer -->

    <!-- Our Products -->
    <section>
        <div class="container">
            <div class="row mt-4 mb-4 text-white text-center">
                <div class="col">
                    <h2>Our Products</h2>
                </div>
            </div>
        
            <div class="row text-white text-center">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row mx-0 p-0 mt-3">
                                <div class="col-4">
                                    <div class="card">
                                        <a href="chocoClassic.php" class="text-decoration-none text-white">
                                        <img src="img/op.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Chocolate Classic</h5>
                                            <h5 class="fst-italic">Rp. 350.000</h5>
                                            <a href="#" class="btn-buy btn mt-2 text-white">Buy</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="card">
                                        <a href="milkyCookie.php" class="text-decoration-none text-white">
                                        <img src="img/op-2.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Milky Cookie</h5>
                                            <h5 class="fst-italic">Rp. 130.000</h5>
                                            <a href="#" class="btn-buy btn mt-2 text-white">Buy</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="card">
                                        <a href="berryChoco.php"class="text-decoration-none text-white">
                                        <img src="img/op-3.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Berry Choco Brownies</h5>
                                            <h5 class="fst-italic">Rp. 350.000</h5>
                                            <a href="#" class="btn-buy btn mt-2 text-white">Buy</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row mx-0 p-0 mt-3">
                                <div class="col-4">
                                    <div class="card">
                                        <a href="chocoCrumble.php" class="text-decoration-none text-white">
                                        <img src="img/op-4.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Choco Crumble Cream</h5>
                                            <h5 class="fst-italic">Rp. 100.000</h5>
                                            <a href="#" class="btn-buy btn mt-2 text-white">Buy</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="card">
                                        <a href="strawberryMoist.php" class="text-decoration-none text-white">
                                        <img src="img/op-5.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Strawberry Moist</h5>
                                            <h5 class="fst-italic">Rp. 100.000</h5>
                                            <a href="#" class="btn-buy btn mt-2 text-white">Buy</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="card">
                                        <a href="doubleChoco.php" class="text-decoration-none text-white">
                                        <img src="img/op-9.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Double Choco Cookie</h5>
                                            <h5 class="fst-italic">Rp. 125.000</h5>
                                            <a href="#" class="btn-buy btn mt-2 text-white">Buy</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                        

                        <button class="carousel-control-prev" style="bottom: 140px;" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next" style="bottom: 140px;" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div> 
    </section>  
    <!-- Akhir Our Products -->

    <!-- About Us -->
    <section>
        <div class="aboutus">
            <div class="row mx-0 p-0 mt-3">
                <div class="col-6">
                    <div class="card">
                        <img src="img/ab.png" class="card-img-top" alt="...">
                    </div>
                </div>

                <div class="aboutus-2 col-6 text-white">
                    <h1 class="mb-4">About Us</h1>
                    <p class="text-start fs-5"> Fancy Cake and Cookies is a local cake shop brand that was founded in 2018. We are inspired by togetherness that creates a sweet and harmonious atmosphere.  Our cakes are perfect for accompanying your beautiful moments with the right mix of sweetness.</p>
                    <h1 class="mt-5 mb-4">Why Choose Us</h1>
                    <p class="fs-5"><img class="text-start me-3" src="img/ab-2-10.png" style="float:left;">We guarantee the quality of all the cakes we provide as they are baked using the freshest ingredient.</p><br>
                    <p class="fs-5"><img class="text-start me-3" src="img/ab-3-04.png" style="float:left;">Our cake shop also provides an outstanding good and loyal service for our customers.</p><br>
                    <p class="fs-5"><img class="text-start me-3" src="img/ab-4-05.png" style="float:left;">Easy payment, we accept any kinds of online payments. It's obviously practice.</p><br>
                    <p class="fs-5"><img class="text-start me-3" src="img/ab-5-06.png" style="float:left;">Fast and safe delivery, all orders submitted will be processed and through safe delivery.</p>
                    <h1 class="life text-center">"Life is too short to skip dessert!"</h1>
                </div>
            </div>
        </div> 
    </section>
    <!-- Akhir About Us -->

    <!-- banner bawah-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/akhir.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>What They Say</h5>
                    <p>Thank you for the elegant customize birthday cake. It’s looked and tasted amazing!</p>
                    <span class="text-warning">Nashuha</span> <br>
                    <span>Customers</span>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/akhir.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>What They Say</h5>
                    <p>Thank you for the elegant customize birthday cake. It’s looked and tasted amazing!</p>
                    <span class="text-warning">Suci</span> <br>
                    <span>Customers</span>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/akhir.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>What They Say</h5>
                    <p>Thank you for the elegant customize birthday cake. It’s looked and tasted amazing!</p>
                    <span class="text-warning">Neng</span> <br>
                    <span>Customers</span>
                </div>
            </div>
        </div>
     </div>
    <!-- akhir banner bawah -->

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
     
    <!-- Akhir footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>