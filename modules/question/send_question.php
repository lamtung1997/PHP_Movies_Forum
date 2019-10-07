<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "forum";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$question = $_GET['question'];

	$sql = "INSERT INTO questions (question) VALUES ('$question')";
	if ($conn->query($sql) == TRUE) 
	{
		header("location:../../index.php?view=question");
	}
?>