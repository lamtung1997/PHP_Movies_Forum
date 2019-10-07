<?php
	if(isset($_GET['status']))
    {
        $status = $_GET['status'];
    }
    else
    {
        $status = "";
    }
    if(isset($_GET['user']))
    {
        $user = $_GET['user'];
    }
    else
    {
        $user = "";
    }
?>


<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "forum";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$commentation = $_GET['commentation'];
	$id = $_GET['id'];
	$commentator = $_GET['commentator'];

	$sql = "INSERT INTO commentation (id,commentator,commentation) VALUES ('$id','$commentator','$commentation')";
	if ($conn->query($sql) == TRUE) 
	{
		header("location:../../index.php?view=movie_detail&id=$id&status=yes&user=$user");
	}
?>