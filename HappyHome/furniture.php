<!DOCTYPE html>
<html>
	<head>
		<?php
                require 'header.php';
		?>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/productdetail.css">
	</head>
	<body>
		<div class="layout6" id="furniture">
			<h4>Furniture</h4>
			<div id="p-flex">
				<div class="p-flex">
					<div class="p-flex-in">
						<a href="products/furniture1.php"><img class="p-img" src="products/furniture1.jpeg"/>  
						<?php
                
                                                  
                                                ?></a>
       <div class="p-name">Perfect Homes Carol Queen Bed</div>
            <div class="p-price"><p>&#8360 8,290<strike>&#8360 13,999</strike></p></div>
         <?php if(!isset($_SESSION['email'])){  ?>
        <a href="signin.php"><button class="p-add">Buy now</button></a>
             <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                  echo '<a href="#" class=p-add disabled>Added to cart</a>';
                                            }else{
                                                ?>
          <a href="cart_add.php?id=1" > <button class="p-add">Add to cart</button></a>
                                                <?php
                                            }
                                        }
                                        ?>
          </div></a></div>
     
        
        
        
        
        <div class="p-flex"><div class="p-flex-in">
          <a href="products/furniture2.php"> <img class="p-img" src="products/furniture2.jpeg"></a>
        <div class="p-name">Perfect Homes Atiu Glass 4 Seater Dining Set  </div>
          <div class="p-price"><p>&#8360 12,390<strike>&#8360 16,999</strike></p></div>
      
       <?php if(!isset($_SESSION['email'])){  ?>
         <a href="signin.php"><button class="p-add">Buy now</button></a>
             <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                  echo '<a href="#" class=p-add disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=2"> <button class="p-add">Add to cart</button></a>
                                                <?php
                                            }
                                        }
                                        ?>
      </div></div>
      <div class="p-flex"><div class="p-flex-in">
          <a href="products/furniture3.php"> <img class="p-img" src="products/furniture3.jpeg"/></a>
        <div class="p-name">Perfect Homes Julian 3 Door Wardrobe  </div>
          <div class="p-price"><p>&#8360 8,590<strike>&#8360 13,799</strike></p></div>
       
        <?php if(!isset($_SESSION['email'])){  ?>
         <a href="signin.php"><button class="p-add">Buy now</button></a>
             <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                  echo '<a href="#" class=p-add disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=3" > <button class="p-add">Add to cart</button></a>
                                                <?php
                                            }
                                        }
                                        ?>
      </div></div>
      <div class="p-flex"><div class="p-flex-in">
          <a href="products/furniture4.php"> <img class="p-img" src="products/furniture4.jpeg"/></a>
        <div class="p-name">Nilkamal Gem Mirror Plastic Wall Mount Cabinet </div>
          <div class="p-price"><p>&#8360 1,861<strike>&#8360 2,050</strike></p></div>
     
       <?php if(!isset($_SESSION['email'])){  ?>
         <a href="signin.php"><button class="p-add">Buy now</button></a>
             <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                  echo '<a href="#" class=p-add disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=4"> <button class="p-add">Add to cart</button></a>
                                                <?php
                                            }
                                        }
                                        ?>
      </div></div>
         </div>
        </div>
	</body>
</html>