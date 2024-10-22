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

    <div class="katalog-pembeli">
        <h2 class="judul-page mt-5 mb-5" style="color:antiquewhite; padding-left: 50px;">Order list</h2>
        <div class="Container-tabel">
            <table class="table-pembeli ms-5" style="margin-left:auto;margin-right:auto; margin-top: 20px">
                <thead>
                  <tr>
                    <th>Order Number</th>
                    <th>Name</th>
                    <th>Items</th>
                    <th>Ship to</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>
                        <span>42012001</span><br>
                        <span class="tanggal">08-06-2022</span>
                    </th>
                    <td>Suci Agisni</td>
                    <td>Chocolate Classic x1</td>
                    <td>Depok</td>
                    <td>
                        <div class="payment-method">
                            <select nama="format" id="format">
                                <option selected disabled>Actions</option>
                                <option>On Process</option>
                                <option>Ready</option>
                                <option>Sent</option>
                                <option>Done</option>
                            </select>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <th>
                        <span>42012002</span><br>
                        <span class="tanggal">09-06-2022</span>
                    </th>
                    <td>Nashuha Insani</td>
                    <td>
                        <div class="items">
                            <span>Milky Cookie x2</span><br>
                            <span>Berry Choco Brownies x1</span>
                        </div>
                    </td>
                    <td>Jakarta</td>
                    <td>
                        <div class="payment-method">
                            <select nama="format" id="format">
                                <option selected disabled>Actions</option>
                                <option>On Process</option>
                                <option>Ready</option>
                                <option>Sent</option>
                                <option>Done</option>
                            </select>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <th>
                        <span>42012003</span><br>
                        <span class="tanggal">09-06-2022</span>
                    </th>
                    <td>Labuda Absorina</td>
                    <td>Choco Crumble Cream x1</td>
                    <td>Bogor</td>
                    <td>
                        <div class="payment-method">
                            <select nama="format" id="format">
                                <option selected disabled>Actions</option>
                                <option>On Process</option>
                                <option>Ready</option>
                                <option>Sent</option>
                                <option>Done</option>
                            </select>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <th>
                        <span>42012004</span><br>
                        <span class="tanggal">09-06-2022</span>
                    </th>
                    <td>Neng Suhaeni</td>
                    <td>
                        <div class="items">
                            <span>Strawberry Moist x1</span><br>
                            <span>Milky Cookie x5</span><br>
                            <span>Double Choco Cookie x1</span>
                        </div>
                    </td>
                    <td>Bekasi</td>
                    <td>
                        <div class="payment-method">
                            <select nama="format" id="format">
                                <option selected disabled>Actions</option>
                                <option>On Process</option>
                                <option>Ready</option>
                                <option>Sent</option>
                                <option>Done</option>
                            </select>
                        </div>
                    </td>
                  </tr>
                </tbody>
              </table>
        </div>

    </div>

    


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