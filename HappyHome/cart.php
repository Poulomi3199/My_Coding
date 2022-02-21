<?php
session_start();
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if(isset($_POST['addtocart'])) {
			if(isset($_SESSION['cart'])) {
				$myitems=array_column($_SESSION['cart'],'itemname');
				if(in_array($_POST['itemname'],$myitems)) {
					echo"<script>
						alert('Item Already Added');
						window.location.href='shop.php';
					</script>";
				} else {
				$count=count($_SESSION['cart']);
				$_SESSION['cart'][$count]=array('itemname'=>$_POST['itemname'],'itemprice'=>$_POST['itemprice'],'qty'=>1);
					echo"<script>
						alert('Item Added Successfully');
						window.location.href='shop.php';
					</script>";
				}
			} else {
				$_SESSION['cart'][0]=array('itemname'=>$_POST['itemname'],'itemprice'=>$_POST['itemprice'],'qty'=>1);
					echo"<script>
						alert('Item Added Successfully');
						window.location.href='shop.php';
					</script>";
			}
		}	
		if(isset($_POST['remove'])){
			foreach($_SESSION['cart'] as $key => $value) {
				if($value['itemname']==$_POST['itemname']) {
					unset($_SESSION['cart'][$key]);
					$_SESSION['cart']=array_values($_SESSION['cart']);
					echo "<script>
						alert('Item Removed Successfully');
						window.location.href='mycart.php';
					</script>";
				}
			}
		}
	}
?>