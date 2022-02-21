<?php
	session_start();
?>
<?php
    require 'header.php';
?>
<head>
	<link rel="stylesheet" href="css/mycart.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<h2>MY CART</h2>
			</div>
			<div class="col">
				<table id="items">
					<tr>
						<th>Serial No.</th>
						<th>Item Name</th>
						<th>Item Price</th>
						<th>Quantity</th>
						<th>Remove</th>
					</tr>
						<?php  
							$total=0;
							if(isset($_SESSION['cart'])) {
								foreach($_SESSION['cart'] as $key => $value) {
									$sr=$key+1;
									$total=$total+$value['itemprice'];
									echo "
										<tr>
											<td>$sr</td>
											<td>$value[itemname]</td>
											<td>$value[itemprice]</td>
											<td><input class='text-center' type'number' value='$value[qty]' min='1' max='10'></td>
											<td>
												<form action='cart.php' method='POST'>
													<button name='remove'>Remove</button>
													<input type='hidden' name='itemname' value='$value[itemname]'>
												</form>
											</td>
										</tr>
									";
								}
							}
						?>
				</table>
			</div>
			<div class="col">
				<div class="total">
					<h3>Total:</h3>
					<h4>Rs.<?php echo $total ?></h4>
					 <button class="purchase">Make Purchase</button>
				</div>
			</div>
		</div>
	</div>
</body>	