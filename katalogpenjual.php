<?php
session_start();
include"config/connection.php";
 
$koneksi = mysqli_connect("localhost","root","","db_fancycake");
 
// Check connection
if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
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
    <br><br>


        </div>
        </div>
    </div>

    <!-- tstt -->

    <!DOCTYPE html>
    <html>
        <h4 class="text-white text-center">Product List</h4>
        <a href="tampil_data.php" class="btn mt-2 text-white">Product List</a> . <a href="input_data.php" class="btn mt-2 text-white">Add Product</a><br><br>

    <table id="t01" style="margin-left:auto;margin-right:auto; margin-top: 20px" border="1">
        <tr>
            <th align="center">ID</th>
            <th width="180" align="center">Nama</th>
            <th width="155" align="center">Price</th>
            <th width="85" align="center">UOM</th>
            <th width="85" align="center">Quantity</th>
            <th width="100" align="center">Opsi</th>
        </tr>

    <?php
    $data = mysqli_query($connect,"select * from product");
    while($d = mysqli_fetch_array($data)){?>
        <tr>
            <td><?php echo $d['id'];?></td>
            <td><?php echo $d['Name'];?></td>
            <td><?php echo $d['Price'];?></td>
            <td><?php echo $d['UOM'];?></td>
            <td><?php echo $d['Quantity'];?></td>
            <td><a href="edit_data.php?id=<?php echo $d['id']; ?>">Edit</a> / 
                <a href="javascript:del(<?php echo $d['id'];?>)">Hapus</a></td>
        </tr>
    <?php
    };
    ?>
    </table>
    <script language="JavaScript" type="text/javascript">
        function del(id){
            if (confirm("yakin akan menghapus data ini?")){
            window.location.href = 'hapus_data.php?id=' + id;
            }
        }
    </script>
    </body>
    </html>

    <!-- tstt -->


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