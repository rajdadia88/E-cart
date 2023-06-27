<?php
session_start();
error_reporting(0);
include('includes/config.php');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="bootstrap/css/main1.css">
</head>
<body>
<div id="sidebar" class="span3">
		<!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
<div class="well well-small"><a id="myCart" href="product_summary.php"><img src="themes/images/ico-cart.png" alt="cart">E-cart Menu</a></div>

<!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->						
<ul class="nav nav-tabs nav-stacked">

<li> 
<?php $sql=mysqli_query($con,"select id,categoryName  from category");
while($row=mysqli_fetch_array($sql))
{
    ?>
                <a href="category.php?cid=<?php echo $row['id'];?>" >
                <?php echo $row['categoryName'];?></a>
                <?php }?>
  
                
                

			</li>
			</ul>											
						
			<ul id="sideManu" class="nav nav-tabs nav-stacked">


    <a class="active">
	
    </a>

                
                <ul>
				<li>
				
    		</li>					
			</ul>

			</li>
			</ul>				

			<!--end -->
		
		<br/>
		  <div class="thumbnail">
			<img src="product img/Head-Phones/4.jpeg" alt="Bootshop panasonoc New camera" style="width: 150px; height: 150px;">
			<div class="caption">
			  <h5>Cosmic Byte</h5>
				<h4 style="text-align:center"><a class="btn" href="product-details.php?pid=83"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">Rs.579</a></h4>
			</div>
		  </div><br/>
			<div class="thumbnail">
				<img src="product img/Smart-Watches/7.jpeg" title="Bootshop New Kindel" alt="Bootshop Kindel" style="width: 150px; height: 150px;">
				<div class="caption">
				  <h5>Noise ColorFit</h5>
				    <h4 style="text-align:center"><a class="btn" href="product-details.php?pid=94"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">Rs.2699</a></h4>
				</div>
			  </div><br/>
	</div>
</body>
</html>
