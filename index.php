<?php 
session_start();
error_reporting(0);

include('includes/config.php');
include('header.php');
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysqli_query($con,$sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
		
		}else{
			$message="Product ID is invalid";
		}
	}
		echo "<script>alert('Product has been added to the cart')</script>";
		echo "<script type='text/javascript'> document.location ='my-cart.php'; </script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<style>
.floating-btn{
					width: 60px;
					height: 60px;
					background: black;
					display: flex;
					border-radius: 50%;
					color: white;
					font-size: 30px;
					align-items: center;
					justify-content: center;
					text-decoration: none;
					box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.25);
					position: fixed;
					right: 20px;
					bottom: 20px;
					transition: background 0.25s;
}
</style>
<!-- Header End====================================================================== -->
<!-- floating Icon-->
		<a href="chatbot/mainbot.php" class="material-icons floating-btn">chat</a>
<!-- floating Icon end-->
<div id="carouselBlk">
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
		  <div class="item active">
		  <div class="container">
			<a href="product-details.php?pid=39"><img src="themes/images/carousel/maxresdefault 1.jpg" alt="special offers"/ style="width:1170px; height: 480px;"> </a>
			<div class="carousel-caption">
				  
				</div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a href="product-details.php?pid=28"><img style="width:1170px; height: 480px;" src="themes/images/carousel/Acer .png" alt=""/></a>
				<div class="carousel-caption">
				  
				</div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a href="product-details.php?pid=26"><img style="width:1170px; height: 480px;" src="themes/images/carousel/Predator.jpg" alt=""/></a>
			<div class="carousel-caption">
				  
				</div>
			
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="product-details.php?pid=38"><img style="width:1170px; height: 480px;"  src="themes/images/carousel/Apple_.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		   
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="product-details.php?pid=100"><img style="width:1170px; height: 480px;"  src="themes/images/carousel/Apple_Watch_.jpg" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			</div>
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="product-details.php?pid=43"><img style="width:1170px; height: 480px;" src="themes/images/carousel/Asus.webp" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	  </div> 
</div>
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
<?php 
include('menu.php');
?>
	
<!-- Sidebar end=============================================== -->



		<div class="span9">		
			<div class="well well-small">
			<h4>Featured Laptop <small class="pull-right">200+ featured products</small></h4>
			<div class="row-fluid">
			<div id="featured" class="carousel slide">
			<div class="carousel-inner">
			  <div class="item active">
			  <ul class="thumbnails">
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="product_details.php"><img src="product img/Laptops/13.jpeg" alt=""></a>
					<div class="caption">
					  <h5>Acer Predator</h5>
					  <h4><a class="btn" href="product-details.php?pid=26">VIEW</a> <span class="pull-right">Rs.99990</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="product_details.php"><img src="product img/Laptops/19.jpeg" alt=""></a>
					<div class="caption">
					  <h5 style="padding-top: 5px;">Acer Nitro 5</h5>
					  <h4><a class="btn" href="product-details.php?pid=28">VIEW</a> <span class="pull-right">Rs.55990</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="product_details.php"><img src="product img/Laptops/25.jpeg" alt=""></a>
					<div class="caption">
					  <h5 style="padding-top: 20px;">HP 15s Ryzen 3 </h5>
					  <h4><a class="btn" href="product-details.php?pid=27">VIEW</a> <span class="pull-right">Rs.42999</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="product_details.php"><img src="product img/Laptops/28.jpeg" alt=""></a>
					<div class="caption">
					  <h5 style="padding-top: 35px;">APPLE MacBook Air M1</h5>
					  <h4><a class="btn" href="product-details.php?pid=31">VIEW</a> <span class="pull-right">Rs.88990</span></h4>
					</div>
				  </div>
				</li>
				
			  </ul>

			  </div>
			   
			   <div class="item">
			  <ul class="thumbnails">
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="product_details.php"><img src="product img/Laptops/1st.jpeg" alt=""></a>
					<div class="caption">
					  <h5 style="padding-top: 20px;">ASUS VivoBook 15</h5>
					  <h4><a class="btn" href="product-details.php?pid=264">VIEW</a> <span class="pull-right">Rs. 39990</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="product_details.php"><img src="product img/Laptops/7th.jpeg" alt=""></a>
					<div class="caption">
					  <h5 style="padding-top: 5px;">Acer Aspire 7</h5>
					  <h4><a class="btn" href="product-details.php?pid=24">VIEW</a> <span class="pull-right">Rs.52990</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="product_details.php"><img src="product img/Laptops/10th.jpeg" alt=""></a>
					<div class="caption">
					  <h5 style="padding-top: 20px;">HP Core i3 11th Gen </h5>
					  <h4><a class="btn" href="product-details.php?pid=25">VIEW</a> <span class="pull-right">Rs. 42990</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="product_details.php"><img src="product img/Laptops/22.jpeg" alt=""></a>
					<div class="caption">
					  <h5 style="padding-top: 25px;">DELL Vostro</h5>
					  <h4><a class="btn" href="product-details.php?pid=29">VIEW</a> <span class="pull-right">Rs.57890</span></h4>
					</div>
				  </div>
				</li>
				
			  </ul>
			  </div>
			  </div>
			  <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
			  <a class="right carousel-control" href="#featured" data-slide="next">›</a>
			  </div>
			  </div>
		</div>
		<h4>Latest Products </h4>
			  <ul class="thumbnails">
				<li class="span3">
				  <div class="thumbnail">
					<a  href="product-details.php?pid=38"><img src="product img/Mobiles/19.jpeg" alt="" style="width:150px;height: 210px;"></a>
					<div class="caption">
					  <h5>APPLE iPhone 13 Pro</h5>
					  <p> 
						Max (Sierra Blue, 256 GB)
					  </p>
					 
					  <h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">Rs. 139900 </a></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a  href="product-details.php?pid=36"><img src="product img/Mobiles/14.jpeg" alt="" style="width:110px;height: 210px;"></a>
					<div class="caption">
					  <h5>APPLE iPhone 12</h5>
					  <p> 
						 Mini (Black, 64 GB)
					  </p>
					 
					  <h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">Rs.49999 </a></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a  href="product-details.php?pid=32"><img src="product img/Mobiles/3.jpeg" alt="" style="width:110px;height: 210px;"></a>
					<div class="caption">
					  <h5>Realme Narzo 30</h5>
					  <p> 
						(Racing Blue, 128 GB) (6 GB RAM)
					  </p>
					 
					  <h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">Rs.15499</a></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a  href="product-details.php?pid=97"><img src="product img/Smart-Watches/16.jpeg" alt="" style="width:140px;height: 180px;"></a>
					<div class="caption">
					  <h5>Fitpro W26 Plus</h5>
					  <p> 
						Smart Watch with Scroll working Smartwatch (Black Strap, Free Size)
					  </p>
					 
					  <h4 style="text-align:center"><a class="btn" href="product-details.php?pid=97"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="http://localhost/ecart_shop/product-details.php?pid=97">Rs.1659</a></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a  href="product-details.php?pid=96"><img src="product img/Smart-Watches/13.jpeg" alt="" style="width:140px;height: 180px;"></a>
					<div class="caption">
					  <h5>DIZO Watch 2</h5>
					  <p> 
						By Realme TechLife Black Strap, Free Size
					  </p>
					 
					  <h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">Rs.2699</a></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a  href="product-details.php?pid=94"><img src="product img/Smart-Watches/7.jpeg" alt="" style="width:140px;height: 180px;"></a>
					<div class="caption">
					  <h5 style="padding-top:20px;">Noise ColorFit</h5>
					  <p> 
						Caliber Smartwatch Black Strap, Regular
					  </p>
					 
					  <h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">Rs.2699</a></h4>
					</div>
				  </div>
				</li>
			  </ul>	

		</div>
		</div>
	</div>
</div>
<!-- Footer -->
<?php
include('footer.php');
?>
<!-- Footer end -->
</body>
</html>