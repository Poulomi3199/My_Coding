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
	if(isset($_POST['submit'])){
		$username = mysqli_real_escape_string($con, $_POST['username']);
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$phone = mysqli_real_escape_string($con, $_POST['phone']);
		$password = mysqli_real_escape_string($con, $_POST['password']);
		$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
	
		$pass = password_hash($password, PASSWORD_BCRYPT);
		$cpass = password_hash($cpassword, PASSWORD_BCRYPT);
		
		$emailquery = "select * from registration where email='$email'";
		$query = mysqli_query($con,$emailquery);
		$emailcount = mysqli_num_rows($query);
		
		if($emailcount>0) {
			echo "Email already exists";
		} else {
			if($password === $cpassword) {
				$insertquery = "insert into registration
					( username, email, phone, password, cpassword ) 
					values('$username','$email','$phone','$pass','$cpass')";
				$iquery = mysqli_query($con, $insertquery);
				
				if($con) {
					?>
					<script>
						alert("Registration Successful");
					</script>
					<?php
				} else {
					?>
					<script>
						alert("Registration Failed");
					</script>
					<?php
				}
			} else {
				echo "Password are not same";
			}
		}
	}
?>
	<div class="container">
		<div class="content"><br>
			<h3>REGISTRATION</h3>
		</div>
		<div class="contact">
			<div class="contactform">
				<form action="<?php htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
					<div class="inputbox">
						<input type="text" name="username" required="required">
						<span>FULL NAME</span>
					</div>
					<div class="inputbox">
						<input type="email" name="email" required="required">
						<span>EMAIL ID</span>
					</div>
					<div class="inputbox">
						<input type="number" name="phone" required="required">
						<span>PHONE</span>
					</div>
					<div class="inputbox">
						<input type="password" name="password" required="required">
						<span>PASSWORD</span>
					</div>
					<div class="inputbox">
						<input type="password" name="cpassword" required="required">
						<span>RETYPE PASSWORD</span>
					</div>
					<div class="inputbox">
						<input type="submit" name="submit" value="SIGN UP">
					</div>
					<center><h4>Already have an account..?? <a href="login.php">LOGIN</a></h4></center>
				</form>
			</div>
		</div>
	</div>
</body>	
</html>