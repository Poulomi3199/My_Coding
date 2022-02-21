<?php
	session_start();
?>
	<?php
                require 'header.php';
    ?><hr>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/shop.css">
	</head>
	<body>
		<section id="featured">
			<div class="container">
				<br>
				<div class="heading">
				<h3>To turn your house into a home. Explore bestsellers in wallpapers, furniture, carpet, lightings etc...</h3>
				</div>
				<a href="mycart.php"><button class="cart">MY CART</button></a>
			</div>
			<h2>FURNITURE</h2>
			<div class="row">
				<div class="product">
				<form action="cart.php" method="POST">
					<img class="img-fluid" src="img/1.jpg" alt="" style="width:295px; height:200px">
					<h4 class="pname">Queen Engineered Wood Regular Bed</h4>
					<h3 class="price">Rs. 16999.00</h4>
					<button type="submit" name="addtocart" class="buy">ADD TO CART</button>
						<input type="hidden" name="itemname" value="Queen Engineered Wood Regular Bed">
						<input type="hidden" name="itemprice" value="16999.00">
				</form>
				</div>
				<div class="product">
				<form action="cart.php" method="POST">
					<img class="img-fluid" src="img/2.jpg" alt="" style="width:295px; height:200px">
					<h4 class="pname">Wood 4 Seater Dining Table Set</h4>
					<h3 class="price">Rs. 23569.00</h3>
					<button type="submit" name="addtocart" class="buy">ADD TO CART</button>
						<input type="hidden" name="itemname" value="Wood 4 Seater Dining Table Set">
						<input type="hidden" name="itemprice" value="23569.00">
				</form>
				</div>
				<div class="product">
				<form action="cart.php" method="POST">
					<img class="img-fluid" src="img/3.jpg" alt="" style="width:295px; height:200px">
					<h4 class="pname">Teak Finish 2 Seater Sofa Set</h4>
					<h3 class="price">Rs. 13199.00</h3>
					<button type="submit" name="addtocart" class="buy">ADD TO CART</button>
						<input type="hidden" name="itemname" value="Teak Finish 2 Seater Sofa Set">
						<input type="hidden" name="itemprice" value="13199.00">
				</form>
				</div>
				<div class="product">
				<form action="cart.php" method="POST">
					<img class="img-fluid" src="img/4.jpg" alt="" style="width:295px; height:200px">
					<h4 class="pname">Plastic Storage Cabinet</h4>
					<h3 class="price">Rs. 6750.00</h3>
					<button type="submit" name="addtocart" class="buy">ADD TO CART</button>
						<input type="hidden" name="itemname" value="Plastic Storage Cabinet">
						<input type="hidden" name="itemprice" value="6750.00">
				</form>
				</div>
			</div>
			<hr> 
			<h2>HOME LIGHTNING</h2>
			<div class="row">
				<div class="product">
				<form action="cart.php" method="POST">
					<img class="img-fluid" src="img/5.jpg" alt="" style="width:295px; height:200px">
					<h4 class="pname">Double Headed Modern Wall Light</h4>
					<h3 class="price">Rs. 960.00</h4>
					<button type="submit" name="addtocart" class="buy">ADD TO CART</button>
						<input type="hidden" name="itemname" value="Double Headed Modern Wall Light">
						<input type="hidden" name="itemprice" value="960.00">
				</form>
				</div>
				<div class="product">
				<form action="cart.php" method="POST">
					<img class="img-fluid" src="img/6.jpg" alt="" style="width:295px; height:200px">
					<h4 class="pname">6 watt LED Waterproof Wall Lamp</h4>
					<h3 class="price">Rs. 1025.00</h3>
					<button type="submit" name="addtocart" class="buy">ADD TO CART</button>	
						<input type="hidden" name="itemname" value="6 watt LED Waterproof Wall Lamp">
						<input type="hidden" name="itemprice" value="1025.00">
				</form>
				</div>
				<div class="product">
				<form action="cart.php" method="POST">
					<img class="img-fluid" src="img/7.jpg" alt="" style="width:295px; height:200px">
					<h4 class="pname">50 LED 8 Metrer Star Diwali Light</h4>
					<h3 class="price">Rs. 399.00</h3>
					<button type="submit" name="addtocart" class="buy">ADD TO CART</button>	
						<input type="hidden" name="itemname" value="50 LED 8 Metrer Star Diwali Light">
						<input type="hidden" name="itemprice" value="399.00">
				</form>
				</div>
				<div class="product">
				<form action="cart.php" method="POST">
					<img class="img-fluid" src="img/8.jpg" alt="" style="width:295px; height:200px">
					<h4 class="pname">5 Meter LED Rope Light Pipe Light</h4>
					<h3 class="price">Rs. 395.00</h3>
					<button type="submit" name="addtocart" class="buy">ADD TO CART</button>	
						<input type="hidden" name="itemname" value="5 Meter LED Rope Light Pipe Light">
						<input type="hidden" name="itemprice" value="395.00">
				</form>
				</div>
			</div>
			<hr>
			<h2>FURNISHING</h2>
			<div class="row">
				<div class="product">
				<form action="cart.php" method="POST">
					<img class="img-fluid" src="img/9.jpg" alt="" style="width:295px; height:200px">
					<h4 class="pname">4-inch Double Size Foam Mattress</h4>
					<h3 class="price">Rs. 4179.00</h4>
					<button type="submit" name="addtocart" class="buy">ADD TO CART</button>	
						<input type="hidden" name="itemname" value="4-inch Double Size Foam Mattress">
						<input type="hidden" name="itemprice" value="4179.00">
				</form>
				</div>
				<div class="product">
				<form action="cart.php" method="POST">
					<img class="img-fluid" src="img/10.jpg" alt="" style="width:295px; height:200px">
					<h4 class="pname">Cap Wrapper Cum Baby Bath Towel</h4>
					<h3 class="price">Rs. 799.00</h3>
					<button type="submit" name="addtocart" class="buy">ADD TO CART</button>
						<input type="hidden" name="itemname" value="Cap Wrapper Cum Baby Bath Towel">
						<input type="hidden" name="itemprice" value="799.00">
				</form>
				</div>
				<div class="product">
				<form action="cart.php" method="POST">
					<img class="img-fluid" src="img/11.jpg" alt="" style="width:295px; height:200px">
					<h4 class="pname">Furnishings Molfino Cushion Cover</h4>
					<h3 class="price">Rs. 499.00</h3>
					<button type="submit" name="addtocart" class="buy">ADD TO CART</button>
						<input type="hidden" name="itemname" value="Furnishings Molfino Cushion Cover">
						<input type="hidden" name="itemprice" value="499.00">
				</form>
				</div>
				<div class="product">
				<form action="cart.php" method="POST">
					<img class="img-fluid" src="img/12.jpg" alt="" style="width:295px; height:200px">
					<h4 class="pname">Revive Abstract Carpet</h4>
					<h3 class="price">Rs. 599.00</h3>
					<button type="submit" name="addtocart" class="buy">ADD TO CART</button>	
						<input type="hidden" name="itemname" value="Queen Engineered Wood Regular Bed">
						<input type="hidden" name="itemprice" value="599.00">
				</form>
				</div>
			</div>
			<hr>
			<h2>WALL STICKERS AND PAINTING</h2>
			<div class="row">
				<div class="product">
				<form action="cart.php" method="POST">
					<img class="img-fluid" src="img/13.jpg" alt="" style="width:295px; height:200px">
					<h4 class="pname">Ghar Kraft Set of 2 Wall Sticker</h4>
					<h3 class="price">Rs. 199.00</h4>
					<button type="submit" name="addtocart" class="buy">ADD TO CART</button>	
						<input type="hidden" name="itemname" value="Ghar Kraft Set of 2 Wall Sticker">
						<input type="hidden" name="itemprice" value="199.00">
				</form>
				</div>
				<div class="product">
				<form action="cart.php" method="POST">
					<img class="img-fluid" src="img/14.jpg" alt="" style="width:295px; height:200px">
					<h4 class="pname">Set Of 5 Wall Painting With Frame</h4>
					<h3 class="price">Rs. 1499.00</h3>
					<button type="submit" name="addtocart" class="buy">ADD TO CART</button>	
						<input type="hidden" name="itemname" value="Set Of 5 Wall Painting With Frame">
						<input type="hidden" name="itemprice" value="1499.00">
				</form>
				</div>
				<div class="product">
				<form action="cart.php" method="POST">
					<img class="img-fluid" src="img/15.jpg" alt="" style="width:295px; height:200px">
					<h4 class="pname">'Flowers with Vine' Wall Sticker</h4>
					<h3 class="price">Rs. 174.00</h3>
					<button type="submit" name="addtocart" class="buy">ADD TO CART</button>	
						<input type="hidden" name="itemname" value="'Flowers with Vine' Wall Sticker">
						<input type="hidden" name="itemprice" value="174.00">
				</form>
				</div>
				<div class="product">
				<form action="cart.php" method="POST">
					<img class="img-fluid" src="img/16.jpg" alt="" style="width:295px; height:200px">
					<h4 class="pname">Indianara 3 Pc Floral Paintings</h4>
					<h3 class="price">Rs. 241.00</h3>
					<button type="submit" name="addtocart" class="buy">ADD TO CART</button>	
						<input type="hidden" name="itemname" value="Indianara 3 Pc Floral Paintings">
						<input type="hidden" name="itemprice" value="241.00">
				</form>
				</div>
			</div>
			<hr>
			<h2>ARTIFICIAL PLANTS AND FLOWERS</h2>
			<div class="row">
				<div class="product">
				<form action="cart.php" method="POST">
					<img class="img-fluid" src="img/17.jpg" alt="" style="width:295px; height:200px">
					<h4 class="pname">Kawai Homes Artificial Plants</h4>
					<h3 class="price">Rs. 399.00</h4>
					<button type="submit" name="addtocart" class="buy">ADD TO CART</button>
						<input type="hidden" name="itemname" value="Kawai Homes Artificial Plants">
						<input type="hidden" name="itemprice" value="399.00">
				</form>
				</div>
				<div class="product">
				<form action="cart.php" method="POST">
					<img class="img-fluid" src="img/18.jpg" alt="" style="width:295px; height:200px">
					<h4 class="pname">Artificial Wall Hanging Money Plant</h4>
					<h3 class="price">Rs. 269.00</h3>
					<button type="submit" name="addtocart" class="buy">ADD TO CART</button>
						<input type="hidden" name="itemname" value="Artificial Wall Hanging Money Plant">
						<input type="hidden" name="itemprice" value="269.00">
				</form>
				</div>
				<div class="product">
				<form action="cart.php" method="POST">
					<img class="img-fluid" src="img/19.jpg" alt="" style="width:295px; height:200px">
					<h4 class="pname">Electomania® Artificial Flower Bunch</h4>
					<h3 class="price">Rs. 459.00</h3>
					<button type="submit" name="addtocart" class="buy">ADD TO CART</button>
						<input type="hidden" name="itemname" value="Electomania® Artificial Flower Bunch">
						<input type="hidden" name="itemprice" value="459.00">
				</form>
				</div>
				<div class="product">
				<form action="cart.php" method="POST">
					<img class="img-fluid" src="img/20.jpg" alt="" style="width:295px; height:200px">
					<h4 class="pname">Sky Artificial Flowers&Pots</h4>
					<h3 class="price">Rs. 499.00</h3>
					<button type="submit" name="addtocart" class="buy">ADD TO CART</button>
						<input type="hidden" name="itemname" value="Sky Artificial Flowers&Pots">
						<input type="hidden" name="itemprice" value="499.00">
				</form>
				</div>
			</div>
			<hr>
			<h2>SMART HOME AUTOMATION</h2>
			<div class="row">
				<div class="product">
				<form action="cart.php" method="POST">
					<img class="img-fluid" src="img/21.jpg" alt="" style="width:295px; height:200px">
					<h4 class="pname">Mi Home Security Camera 1080P</h4>
					<h3 class="price">Rs. 2999.00</h4>
					<button type="submit" name="addtocart" class="buy">ADD TO CART</button>
						<input type="hidden" name="itemname" value="Mi Home Security Camera 1080P">
						<input type="hidden" name="itemprice" value="2999.00">
				</form>
				</div>
				<div class="product">
				<form action="cart.php" method="POST">
					<img class="img-fluid" src="img/22.jpg" alt="" style="width:295px; height:200px">
					<h4 class="pname">Crompton 16A Wi-Fi Smart Plug</h4>
					<h3 class="price">Rs. 1129.00</h3>
					<button type="submit" name="addtocart" class="buy">ADD TO CART</button>
						<input type="hidden" name="itemname" value="Crompton 16A Wi-Fi Smart Plug">
						<input type="hidden" name="itemprice" value="1129.00">
				</form>
				</div>
				<div class="product">
				<form action="cart.php" method="POST">
					<img class="img-fluid" src="img/23.jpg" alt="" style="width:295px; height:200px">
					<h4 class="pname">Echo Dot speaker with Alexa</h4>
					<h3 class="price">Rs. 3999.00</h3>
					<button type="submit" name="addtocart" class="buy">ADD TO CART</button>
						<input type="hidden" name="itemname" value="Echo Dot speaker with Alexa">
						<input type="hidden" name="itemprice" value="3999.00">
				</form>
				</div>
				<div class="product">
				<form action="cart.php" method="POST">
					<img class="img-fluid" src="img/24.jpg" alt="" style="width:295px; height:200px">
					<h4 class="pname">Silverlit 88308 I/R Echo Bot</h4>
					<h3 class="price">Rs. 2163.00</h3>
					<button type="submit" name="addtocart" class="buy">ADD TO CART</button>
						<input type="hidden" name="itemname" value="Silverlit 88308 I/R Echo Bot">
						<input type="hidden" name="itemprice" value="2163.00">
				</form>
				</div>
			</div>
		</section>
	
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	</body>