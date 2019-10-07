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

	$CID = $_GET['CID'];
	$id = $_GET['id'];

	$sql= "DELETE FROM commentation WHERE CID='$CID'";
	if ($conn->query($sql) == TRUE)
	{
		header("location:../../index.php?view=movie_detail&id=$id&status=yes&user=$user");
	}
?>