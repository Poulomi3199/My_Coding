<?php
	session_start();
	if(!isset($_SESSION['username'])) {
		echo "You are logged out";
		header('location:login.php');
	}
?>
<?php
                require 'header.php';
    ?>
	<link rel="stylesheet" href="css/index.css">
	<body>
		<br><br><br>
		<div class="content">
				<h1>WELLCOME <?php echo $_SESSION['username']; ?></h1>
				<h2>Design Your Dream Home</h2>
				<br></br>
					<a href="logout.php" class="button">LOGOUT</a>
		</div>
	</body>