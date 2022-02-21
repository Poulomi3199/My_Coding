<?php
/*** begin our session ***/
session_start();
 /*** if we are here the data is valid and we can insert it into database username, password  ***/
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$servername = "localhost";
/* Database Attributes*/
$username = "root";
$password = "";
$database = "happyhome";
$conn = new mysqli($servername, $username, $password, $database);
if (!mysqli_connect($servername, $username, $password))
    die("Can't connect to database");
if (!mysqli_select_db($conn, $database))
    die("Can't select database");

$sql = "INSERT INTO user_msg (name, email, message)
 VALUES ('$name','$email','$message')";
if ($conn->query($sql) === TRUE) {
    echo "Your message successfully send";
	/*?>
		<script>
			location.replace("index.php");
		</script>
	<?php*/
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

 ?> 
 