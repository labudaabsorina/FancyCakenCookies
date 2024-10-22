<?php 
// Start the session
session_start();
require 'config/connection.php';
require 'item.php';

if(isset($_GET['id']) && !isset($_POST['update']))  { 
	$sql = "SELECT * FROM product WHERE id=".$_GET['id'];
	$result = mysqli_query($con, $sql);
	$product = mysqli_fetch_object($result); 
	$item = new Item();
	$item->id = $product->id;
	$item->Name = $product->Name;
	$item->Price = $product->Price;
	$item->quantity = 1;
	// Check product is existing in cart
	$index = -1;
	$cart = unserialize(serialize($_SESSION['cart'])); // set $cart as an array, unserialize() converts a string into array
	for($i=0; $i<count($cart);$i++)
		if ($cart[$i]->id == $_GET['id']){
			$index = $i;
			break;
		}
		if($index == -1) 
			$_SESSION['cart'][] = $item; // $_SESSION['cart']: set $cart as session variable
		else {
			
			if (($cart[$index]->quantity) < $iteminstock)
				 $cart[$index]->quantity ++;
			     $_SESSION['cart'] = $cart;
		}
}
// Delete product in cart
if(isset($_GET['index']) && !isset($_POST['update'])) {
	$cart = unserialize(serialize($_SESSION['cart']));
	unset($cart[$_GET['index']]);
	$cart = array_values($cart);
	$_SESSION['cart'] = $cart;
}
// Update quantity in cart
if(isset($_POST['update'])) {
  $arrQuantity = $_POST['quantity'];
  $cart = unserialize(serialize($_SESSION['cart']));
  for($i=0; $i<count($cart);$i++) {
     $cart[$i]->quantity = $arrQuantity[$i];
  }
  $_SESSION['cart'] = $cart;
}
 
if (isset($_POST['checkout'])) {
    if (checkout($_POST) > 0) {
        header("Location: detailsorder.php");
    } else { 
        echo mysqli_error($connect);
    }
}

function checkout($data){
    global $connect;
    
    $nama = $data["produk"];
    
    mysqli_query($connect, "INSERT INTO resumeorder (item) VALUES ('$nama')");
    
    return mysqli_affected_rows($connect);
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


    <!--urutan cekout-->
    <div class="urutan-cart text-center mt-5">
        <div class="container">
            <span class="warna-shopping p-3 rounded-pill">Shopping Cart</span>
            <i class="bi bi-arrow-right mx-3 p-3 rounded-circle"></i>
            <span class="warna-detail p-3 rounded-pill">Details Order</span>
            <i class="bi bi-arrow-right mx-3 p-3 rounded-circle"></i>
            <span class="warna-detail p-3 rounded-pill">Order Complete</span>
        </div>
    </div>

    <hr class="position-relative" style=" width: 60%; margin-left: 270px; top: 20px; border: 2px solid rgb(212, 157, 89);">
    
    
    
    <!-- contoh keranjang 2 -->
    <h2 style="margin-top: 50px" class="text-white text-center"> Your Shopping Cart </h2> 
    <form method="POST">
    <table id="t01" style="margin-left:auto;margin-right:auto; margin-top: 20px">
    <tr>
        <th>Option</th>
        <th>Id</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total Price</th>
    </tr>
    <?php 
        $cart = unserialize(serialize($_SESSION['cart']));
        $s = 0;
        $index = 0;
        for($i=0; $i<count($cart); $i++){
            $s += $cart[$i]->Price * $cart[$i]->quantity;
    ?>	
    <tr>
            <td><a href="keranjang.php?index=<?php echo $index; ?>" onclick="return confirm('Are you sure?')" >Delete</a> </td>
            <td> <?php echo $cart[$i]->id; ?> </td>
            <td> <?php echo $cart[$i]->Name; ?> </td>
            <input type="hidden" value="<?php echo $cart[$i]->Name; ?>" name="produk">
            <td> <?php echo $cart[$i]->Price; ?> </td>
            <td> <input type="number" min="1" value="<?php echo $cart[$i]->quantity; ?>" name="quantity[]"> </td>  
            <td> <?php echo $cart[$i]->Price * $cart[$i]->quantity; ?> </td>
            
    </tr>
        <?php 
            $index++;
        } ?>
        <tr>
            <td colspan="5" style="text-align:right; font-weight:bold">TOTAL
            <input id="saveimg" type="image" src="img/save.png" name="update" alt="Save Button">
            <input type="hidden" name="update">
            </td>
            <td> <?php echo $s; ?> </td>
        </tr>
    </table>
    <br>
        <a href="landingpage.php" class="btn-buy2 btn mt-2 text-white" name="continue">Continue Shopping</a> 
        <a href="detailsorder.php" class="btn-buy2 btn mt-2 text-white" name="checkout">Checkout</a>
    </form>
    <?php 
    if(isset($_GET["id"]) || isset($_GET["index"])){
    header('Location: keranjang.php');
    }
    ?>
    </body>
    </html>
    <!-- akhir contoh keranjang 2 -->

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