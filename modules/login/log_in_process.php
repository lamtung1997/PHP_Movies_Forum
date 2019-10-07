<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "forum";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$username = $_GET['username'];
	$psw = $_GET['psw'];

	$sql= "SELECT * FROM `users` WHERE username='$username' and password='$psw'";
	$result = $conn->query($sql);
	if ($result->num_rows == 1)
	{
		header("location:../../index.php?status=yes&user=$username");
	}
	else
	{
		header('location:../../index.php?view=log_in_failed');
	}
?>