<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "forum";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$name = $_GET['name'];
	$id = $_GET['id'];
	$answer = $_GET['answer'];

	$sql = "INSERT INTO answers (id,name,answer) VALUES ('$id','$name','$answer')";
	if ($conn->query($sql) == TRUE) 
	{
		header("location:../../index.php?view=answer&id=$id");
	}
?>