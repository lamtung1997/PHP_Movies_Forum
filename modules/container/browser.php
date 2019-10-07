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
	if(isset($_GET['page']))
	{
	    $page = $_GET['page'];
	}
?>

<br>

<div class='number_menu w3-border'>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "forum";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		$sql = "SELECT * FROM movies";
		$result = $conn->query($sql);

		if($page != 1)
		{
			$previous = $page - 1;
			echo "<a href='index.php?view=browser&page=$previous&status=$status&user=$user' class='w3-btn w3-black w3-hover-white w3-round-large w3-border'><<</a>&nbsp&nbsp&nbsp";	
		}

		if ($result->num_rows > 0)
		{
			$amount = $result->num_rows/10;
			$i=1;
			while($i < $amount+1)
			{
				echo "<a href='index.php?view=browser&page=$i&status=yes&user=$user' class='w3-btn w3-black w3-hover-white w3-round-large w3-border'>$i</a>&nbsp";
				$i++;
			}
		}

		if($page <= $amount)
		{
			$next = $page + 1;
			echo "&nbsp&nbsp<a href='index.php?view=browser&page=$next&status=yes&user=$user' class='w3-btn w3-black w3-hover-white w3-round-large w3-border'>>></a>";	
		}
	?>
</div>

<div class="small_poster_area">
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "forum";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
		$start = ($page-1)*10 + 1;
		$end = $start + 9;

		$sql = "SELECT * FROM movies WHERE id BETWEEN $start AND $end";
		$result = $conn->query($sql);
		if ($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				?>
					<div class="small_poster">
						<div class="small_container">
		  					<a href="index.php?view=movie_detail&status=<?php echo $status;?>&user=<?php echo $user;?>&id=<?php echo $row['id'];?>"> 
		  						<img src="images/small_posters/<?php echo $row['image'];?>" style="height: 240px; width: 160px;"> 
		  					</a>
		  					<div class="overlay"> <?php echo $row['name'];?> </div>
						</div>
					</div>
				<?php
			}
		}
	?>
</div>