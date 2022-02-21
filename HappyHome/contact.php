<?php
                require 'header.php';
    ?>
	<link rel="stylesheet" type="text/css" href="css/contact.css">
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<body>
	<div class="container">
		<div class="content">
			<h1>CONTACT US</h1>
		</div>
		<div class="contact">
			<div class="contactinfo">
				<div class="box">
					<div class="icon">
						<i class='fas fa-map-marker-alt' style='font-size:24px'></i>
					</div>
						<div class="text">
							<h3>ADDRESS</h3>
							<p>Milandeep, Sadhukhan Math<br>
								Singur, Hooghly<br>
								Pin-712409</p>
						</div>
				</div>
				<div class="box">
					<div class="icon">
						<i class="fa fa-envelope" style="font-size:27px"></i>
					</div>
						<div class="text">
							<h3>EMAIL</h3>
							<p>poulomi.roy301@gmail.com</p>
						</div>
				</div>
				<div class="box">
					<div class="icon">
						<i class='fas fa-phone-alt' style='font-size:28px'></i>
					</div>
						<div class="text">
							<h3>PHONE</h3>
							<p>+91 8777836714</p>
						</div>
				</div>
			</div>
			<div class="contactform">
				<form action="sendmessage.php" method="POST">
					<div class="inputbox">
						<input type="text" name="name" required="required">
						<span>Full Name</span>
					</div>
					<div class="inputbox">
						<input type="text" name="email" required="required">
						<span>Email Id</span>
					</div>
					<div class="inputbox">
						<textarea name="message" required="required"></textarea>
						<span>Type Something...</span>
					</div>
					<div class="inputbox">
						<input type="submit" name="submit" value="SEND YOUR MESSAGE">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>	