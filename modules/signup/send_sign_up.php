<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "forum";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$email = $_GET['email'];
	$username = $_GET['username'];
	$psw = $_GET['psw'];

	$sql= "INSERT INTO users VALUES ('$username','$psw','$email')";
	if ($conn->query($sql) == TRUE) 
	{
		header('location:../../index.php?view=sign_up_success');
	}
	else {
		header('location:../../index.php?view=sign_up_failed');
	}
?>