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

		$search = $_GET['search'];

		$sql = "SELECT * FROM movies WHERE name like '%$search%'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				?>
					<div class="small_poster">
						<div class="small_container">
		  					<a href="index.php?view=movie_detail&id=<?php echo $row['id'];?>"> 
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