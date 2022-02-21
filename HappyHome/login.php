<?php
	session_start();
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/user.css">
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php
		include 'dbcon.php';
		
		if(isset($_POST['submit'])) {
			$email = $_POST['email'];
			$password = $_POST['password'];	
			
			$email_search = "select * from registration where email= '$email' ";
			$query = mysqli_query($con,$email_search);
			
			$email_count = mysqli_num_rows($query);
			
			if($email_count) {
				$email_pass = mysqli_fetch_assoc($query);
				$db_pass = $email_pass['password'];
				
				$_SESSION['username'] = $email_pass['username'];
				
				$pass_decode = password_verify($password, $db_pass);
				
				if($pass_decode){
					echo "Login Successful";
					?>
					<script>
						location.replace("index.php");
					</script>
					<?php
				} else {
					echo "Incorrect Password";
				}
			} else {
				echo "Invalid Email";
			}
		}
	?>
	<div class="container">
		<p style="font-size: 38px; font-family: Segoe Script;color: rgba(255, 255, 255,0.5); font-weight: bold;" >
			Happy Home
		</p>
		<div class="content">
			<h2>USER LOGIN</h2>
		</div>
		<div class="contact">
			<div class="contactform">
				<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
					<div class="inputbox">
						<input type="email" name="email" required="required">
						<span>EMAIL ID</span>
					</div>
					<div class="inputbox">
						<input type="password" name="password" required="required">
						<span>PASSWORD</span>
					</div>
					<div class="inputbox">
						<input type="submit" name="submit" value="LOG IN">
					</div>
					<h4>Don't have an account..?? <a href="registration.php">SIGN UP</a></h4>
				</form>
			</div>
		</div>
	</div>
</body>	
</html>